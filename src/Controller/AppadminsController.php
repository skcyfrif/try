<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Network\Request;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Time;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Http\Exception\NotFoundException;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
//  require_once(ROOT . '/vendor/' . DS . '/phpoffice/vendor/autoload.php');

/**
 * Appadmins Controller
 *
 *
 * @method \App\Model\Entity\Appadmin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppadminsController extends AppController {
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash');

        $this->loadComponent('Custom');

        $this->loadModel('Users');
        $this->loadModel('UserDetails');
        $this->loadModel('Settings');
        $this->loadModel('Optionals');

        $this->viewBuilder()->setLayout('admin');

        if (!empty($this->Auth->user('type')) && !in_array($this->Auth->user('type'), [1, 2])) {
            $this->Flash->warning(__('Can\'t allow to access. Contact with admin.'));
            return $this->redirect(HTTP_ROOT);
        }
    }

    public function beforeFilter(Event $event) {
        $this->Auth->allow(['login', 'forgotPassword', 'recoverPassword']);
    }

    public function index() {
        return $this->redirect(['controller' => 'Appadmins', 'action' => 'dashboard']);
        exit;
    }

    public function dashboard() {
       $all_data = [];
        $this->set(compact('all_data'));
    }

    public function dataTable() {
        
    }

    public function dataForms() {
        
    }

    public function register() {
        return $this->redirect(HTTP_ROOT . 'admin-login/');
        $datas = [];

        $password = 123456;
        $hasher = new DefaultPasswordHasher();

        $datas['name'] = 'Admin';
        $datas['email'] = 'admin@gmail1.com';
        $datas['password'] = $hasher->hash($password);
        $datas['unq_id'] = $this->Custom->getUniqNumber();
        $datas['type'] = 1;
        $datas['is_active'] = 1;
        $datas['created_dt'] = date('Y-m-d h:i:s');
        $datas['last_login_ip'] = $this->Custom->get_ip_address();
        $datas['last_login_date'] = date('Y-m-d h:i:s');
        $datas['qstr'] = '';
        $datas['token'] = '';
        $datas['lastmodify_dt'] = date('Y-m-d h:i:s');
        //pj($datas);exit;
        $userData = $this->Users->newEntity();
        $userData = $this->Users->patchEntity($userData, $datas);
        $this->Users->save($userData);
        exit;
    }

    public function login() {
        $this->viewBuilder()->setLayout('admin_login');
        $title = "Login";

        if ($this->getRequest()->getSession()->read('Auth.User.id') != '') {
            return $this->redirect(['controller' => 'Appadmins', 'action' => 'index']);
        }
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $user = $this->Auth->identify();
            //pj( $user);exit;

            if (!empty($user) && !in_array($user['type'], [1, 2])) {
                $this->Flash->warning(__('Can\'t access. Contact with admin.'));
                return $this->redirect(HTTP_ROOT . 'admin-login');
            }
            if (!empty($user)) {
                   
                $this->Auth->setUser($user);
                $this->Flash->success(__('Welcome ' . $this->Auth->user('name')));
                $redirectUrl = $this->request->getQuery('redirect');
                $this->Users->updateAll(['last_login_date' => date('Y-m-d H:i:s'), 'last_login_ip' => $this->Custom->get_ip_address()], ['id' => $this->Auth->user('id')]);
                if (!empty($redirectUrl)) {
                    return $this->redirect($redirectUrl);
                }
                return $this->redirect(HTTP_ROOT . 'appadmins');
            } else {
                $this->Flash->warning(__('Email or password is incorrect'));
            }
        }

        $this->set(compact('title'));
    }

    public function logout() {
        $this->Flash->success(__('Successfully logout.'));

        $type = $this->Auth->user('type');

        if ($this->Auth->logout()) {
            return $this->redirect(HTTP_ROOT . 'admin-login/');
        }
    }

    public function forgotPassword() {
        if ($this->getRequest()->getSession()->read('Auth.User.id') != '') {
            return $this->redirect(['controller' => 'Appadmins', 'action' => 'index']);
        }
        $this->viewBuilder()->setLayout('admin_login');
        $title = "Forgot Password";
        $this->set(compact('title'));
    }

    public function recoverPassword($toke = null) {
        if ($this->getRequest()->getSession()->read('Auth.User.id') != '') {
            return $this->redirect(['controller' => 'Appadmins', 'action' => 'index']);
        }
        $this->viewBuilder()->setLayout('admin_login');
        $title = "Recover Password";


        if (empty($toke)) {
            $this->Flash->error(__('ERROR. Try again...'));
            return $this->redirect(HTTP_ROOT . 'admin-login');
        }
        $user_data = $this->Users->find('all')->where(['token' => $toke])->first();
        if (empty($user_data)) {
            $this->Flash->error(__('ERROR. Try again...'));
            return $this->redirect(HTTP_ROOT . 'admin-login');
        }
        if ($this->request->is('post')) {
            $postData = $this->request->getData();
            if (!empty($postData['password'])) {
                $hasher = new DefaultPasswordHasher();
                $password = $hasher->hash($postData['password']);
                $this->Users->updateAll(['password' => $password, 'token' => ''], ['id' => $user_data->id]);
            }
            $this->Flash->success(__('Password changed successfuly.'));
            return $this->redirect(HTTP_ROOT . 'admin-login');
        }


        $this->set(compact('title'));
    }

    public function siteSetting() {
        $site_name = $this->Optionals->find('all')->where(['name' => 'site_name'])->first();
        $site_short_name = $this->Optionals->find('all')->where(['name' => 'site_short_name'])->first();

        $this->set(compact('site_name', 'site_short_name'));
        
        if ($this->request->is('post')) {
            $postData = $this->request->getData();
            if (!empty($postData['logo']['tmp_name'])) {
                $imagePath = "img/";
                $ext = explode('.', $postData["logo"]["name"]);
                if (strtolower(end($ext)) != 'png') {
                    $this->Flash->error(__('Only Png file allowerd.'));
                    return $this->redirect(['action' => 'siteSetting']);
                }
                $custom_name = 'logo.' . end($ext);

                $filename = $postData["logo"]["tmp_name"];
                list($width, $height) = getimagesize($filename);

                if (move_uploaded_file($filename, $imagePath . $custom_name)) {
                    $this->Flash->success(__('Logo has been updated.'));
                    return $this->redirect(['action' => 'siteSetting']);
                }
                $this->Flash->error(__('Data could not be saved. Please, try again.'));
            }
            if (!empty($postData['icon']['tmp_name'])) {
                $imagePath = "img/";
                $ext = explode('.', $postData["icon"]["name"]);
                if (strtolower(end($ext)) != 'png') {
                    $this->Flash->error(__('Only Png file allowerd.'));
                    return $this->redirect(['action' => 'siteSetting']);
                }
                $custom_name = 'Favicon.' . end($ext);

                $filename = $postData["icon"]["tmp_name"];
                list($width, $height) = getimagesize($filename);

                if (move_uploaded_file($filename, $imagePath . $custom_name)) {
                    $this->Flash->success(__('Site icon has been updated.'));
                    return $this->redirect(['action' => 'siteSetting']);
                }
                $this->Flash->error(__('Data could not be saved. Please, try again.'));
            }

            if (!empty($postData['site_name']) || !empty($postData['site_short_name'])) {

                $new_site_name = [];
                if (!empty($site_name)) {
                    $new_site_name['id'] = $site_name->id;
                }
                $new_site_name['name'] = 'site_name';
                $new_site_name['value'] = $postData['site_name'];

                $siteName = $this->Optionals->newEntity();
                $siteName = $this->Optionals->patchEntity($siteName, $new_site_name);
                $this->Optionals->save($siteName);


                $new_site_short_name = [];
                if (!empty($site_short_name)) {
                    $new_site_short_name['id'] = $site_short_name->id;
                }
                $new_site_short_name['name'] = 'site_short_name';
                $new_site_short_name['value'] = $postData['site_short_name'];

                $siteShortName = $this->Optionals->newEntity();
                $siteShortName = $this->Optionals->patchEntity($siteShortName, $new_site_short_name);
                $this->Optionals->save($siteShortName);

                $this->Flash->success(__('Data has been updated.'));
                return $this->redirect(['action' => 'siteSetting']);
            }
        }
    }

    public function accountSetting() {
        $this->loadModel('PaypalDetails');
        
        $admin_mail = $this->Settings->find('all')->where(['type' => 1, 'name' => 'ADMIN_TO_MAIL'])->first();
        $from_mail = $this->Settings->find('all')->where(['type' => 1, 'name' => 'FROM_EMAIL'])->first();

        $this->Users->hasOne('UserDetails', ['className' => 'UserDetails', 'foreignKey' => 'user_id'/* , 'conditions' => ['UserDetails.user_id' => $this->Auth->User('id)] */]);
        $userData = $this->Users->find('all')->contain(['UserDetails'])->where(['Users.id' => $this->Auth->user('id')])->first();
        
        $paypal_details = $this->PaypalDetails->find('all')->first();
        
        
//        pj($userData);exit;
        $this->set(compact('admin_mail', 'from_mail', 'userData','paypal_details'));
    }

    public function accountUpdate() {
        $this->viewBuilder()->setLayout('ajax');
        $this->request->allowMethod(['post']);
        $postData = $this->request->getData();

        $path = WWW_ROOT . 'files' . DS . 'admin_photos';
        $folder = new Folder($path);
        if (is_null($folder->path)) {
            $folder->create($path);
            new Folder($path, true, 0755);
        }

        $this->Users->hasOne('UserDetails', ['className' => 'UserDetails', 'foreignKey' => 'user_id']);
        $userData = $this->Users->find('all')->contain(['UserDetails'])->where(['Users.id' => $this->Auth->user('id')])->first();

        if (!empty($postData['email'])) {
            if ($postData['email'] != $userData->email) {
                $checkMail = $this->Users->find('all')->where(['email' => $postData['email']])->count();
                if ($checkMail != 0) {
                    $this->Flash->error(__('Email address already present.'));
                    return $this->redirect(['action' => 'accountSetting']);
                }
                $this->Users->updateAll(['email' => $postData['email']], ['id' => $this->Auth->User('id')]);
            }
        }

        $this->Users->updateAll(['name' => $postData['name']], ['id' => $this->Auth->User('id')]);

        $new_user_details_data = [];
        if (!is_null($userData->user_detail) && !empty($userData->user_detail->id)) {
            $new_user_details_data['id'] = $userData->user_detail->id;
        }

        $new_user_details_data['user_id'] = $this->Auth->User('id');
        $new_user_details_data['phone_number'] = $postData['phone_number'];
        $new_user_details_data['gender'] = $postData['gender'];
        $new_user_details_data['address'] = $postData['address'];

        if (!empty($postData['file_input']['tmp_name'])) {
            if (!empty($userData->user_detail->photo)) {
                @unlink($userData->user_detail->path . $userData->user_detail->photo);
            }

            $imagePath = "img/";
            $ext = explode('.', $postData["file_input"]["name"]);
            $custom_name = time() . rand() . '.' . end($ext);

            $filename = $postData["file_input"]["tmp_name"];
            list($width, $height) = getimagesize($filename);
            move_uploaded_file($filename, $imagePath . $custom_name);
            $new_user_details_data['path'] = $imagePath;
            $new_user_details_data['photo'] = $custom_name;
        }

        $newEntity = $this->UserDetails->newEntity();
        $newEntity = $this->UserDetails->patchEntity($newEntity, $new_user_details_data);
        $this->UserDetails->save($newEntity);

        $this->Flash->success(__('Data has been updated successfuly.'));
        return $this->redirect(['action' => 'accountSetting']);
        exit;
    }

    public function mailUpdate() {
        $this->viewBuilder()->setLayout('ajax');
        $this->request->allowMethod(['post']);
        $postData = $this->request->getData();

        if (!empty($postData['admin_mail'])) {
            $this->Settings->updateAll(['value' => $postData['admin_mail']], ['type' => 1, 'name' => 'ADMIN_TO_MAIL']);
        }
        if (!empty($postData['from_mail'])) {
            $this->Settings->updateAll(['value' => $postData['from_mail']], ['type' => 1, 'name' => 'FROM_EMAIL']);
        }

        $this->Flash->success(__('Data has been updated successfuly.'));
        return $this->redirect(['action' => 'accountSetting']);
        exit;
    }

    public function changePassword() {
        $this->viewBuilder()->setLayout('ajax');
        $this->request->allowMethod(['post']);
        $postData = $this->request->getData();
        if (!empty($postData['password'])) {
            $hasher = new DefaultPasswordHasher();
            $password = $hasher->hash($postData['password']);
            $this->Users->updateAll(['password' => $password], ['id' => $this->Auth->User('id')]);
        }
        $this->Flash->success(__('Password has been updated successfuly.'));
        return $this->redirect(['action' => 'accountSetting']);
        exit;
    }

    public function updatePaypal() {
        $this->loadModel('PaypalDetails');
        $this->viewBuilder()->setLayout('ajax');
        $this->request->allowMethod(['post']);
        $postData = $this->request->getData();
        $this->PaypalDetails->deleteAll([1]);

        $newData = $this->PaypalDetails->newEntity();
        $newData = $this->PaypalDetails->patchEntity($newData, $postData);
        $this->PaypalDetails->save($newData);

        $this->Flash->success(__('Paypal has been updated successfuly.'));
        return $this->redirect(['action' => 'accountSetting']);
        exit;
    }

    public function emailTemplate($option = null, $id = null) {
        $allData = $this->Settings->find('all')->where(['type' => 2]);
        $getData = [];

        if (!empty($id)) {
            $getData = $this->Settings->find('all')->where(['id' => $id, 'type' => 2])->first();
            if (empty($getData)) {
                $this->Flash->error(__('No data found. Please, try again.'));
                return $this->redirect(['action' => 'emailTemplate']);
            }
        }
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if (empty($getData->id)) {
                $this->Flash->error(__('Data could not be saved. Please, try again.'));
                return $this->redirect(['action' => 'emailTemplate']);
            }

            if (empty($data['value'])) {
                $this->Flash->error(__('Content can\'t be empty. Add content..'));
                return $this->redirect(['action' => 'emailTemplate', 'edit', @$getData->id]);
            }

            $newData = $this->Settings->newEntity();
            $data['id'] = @$getData->id;
            $newData = $this->Settings->patchEntity($newData, $data);

            if ($this->Settings->save($newData)) {
                $this->Flash->success(__('Data has been updated.'));
                return $this->redirect(['action' => 'emailTemplate']);
            }

            $this->Flash->error(__('Data could not be saved. Please, try again.'));
        }

        $this->set(compact('id', 'allData', 'getData'));
    }

    public function otherWebsiteInfo($option = null, $id = null) {
        $this->loadModel('OtherSites');
        $allData = $this->OtherSites->find('all')->order(['sort_order' => 'ASC']);
        $path = WWW_ROOT . 'files' . DS . 'other_site';
        $folder = new Folder($path);
        if (is_null($folder->path)) {
            $folder->create($path);
            new Folder($path, true, 0755);
        }

        $getData = [];
        $new_data = [];

        If (!empty($option) && !empty($id)) {
            $getData = $this->OtherSites->find('all')->where(['id' => $id])->first();
            if ($option == "delete") {
                $this->OtherSites->deleteAll(['id' => $id]);
                $this->Custom->deleteFile($getData->path, $getData->site_img);
                $this->Custom->deleteFile($getData->path, $getData->site_logo);
                $this->Flash->success(__('Data deleted successfuly.'));
                return $this->redirect(['action' => 'otherWebsiteInfo']);
            }
            if ($option == "active") {
                $this->OtherSites->updateAll(['is_active' => 1], ['id' => $id]);
                $this->Flash->success(__('Data has been Activated.'));
                return $this->redirect(['action' => 'otherWebsiteInfo']);
            }
            if ($option == "deactive") {
                $this->OtherSites->updateAll(['is_active' => 2], ['id' => $id]);
                $this->Flash->success(__('Data has been deactivated.'));
                return $this->redirect(['action' => 'otherWebsiteInfo']);
            }
        }

        if (($option == 'edit') && !empty($getData)) {
            $new_data['id'] = $getData->id;
        }



        if ($this->request->is('post')) {
            $postData = $this->request->getData();
            $new_data['site_description'] = $postData['site_description'];
            $new_data['site_url'] = $postData['site_url'];
            $newEntity = $this->OtherSites->newEntity();
            $newEntity = $this->OtherSites->patchEntity($newEntity, $new_data);
            $this->OtherSites->save($newEntity);
            if (($option == 'edit') && !empty($getData)) {
                $this->Flash->success(__('Information updated successfuly.'));
                return $this->redirect(['action' => 'otherWebsiteInfo']);
            }
            $this->Flash->success(__('Information added successfuly.'));
            return $this->redirect(['action' => 'otherWebsiteInfo']);
        }


        $this->set(compact('allData', 'getData'));
    }

    public function membership($option = null, $id = null) {
        $this->loadModel('Membership');
        $allData = $this->Membership->find('all');
        
        

        $getData = [];
        $new_data = [];

        If (!empty($option) && !empty($id)) {
            $getData = $this->Membership->find('all')->where(['id' => $id])->first();
            if ($option == "delete") {
                $this->Membership->deleteAll(['id' => $id]);
                $this->Flash->success(__('Data deleted successfuly.'));
                return $this->redirect(['action' => 'membership']);
            }
            if ($option == "active") {
                $this->Membership->updateAll(['is_active' => 1], ['id' => $id]);
                $this->Flash->success(__('Data has been Activated.'));
                return $this->redirect(['action' => 'membership']);
            }
            if ($option == "deactive") {
                $this->Membership->updateAll(['is_active' => 2], ['id' => $id]);
                $this->Flash->success(__('Data has been deactivated.'));
                return $this->redirect(['action' => 'membership']);
            }
        }





        if ($this->request->is('post')) {
            $postData = $this->request->getData();

            if (($option == 'edit') && !empty($getData)) {
                $postData['id'] = $getData->id;
            }
            $newEntity = $this->Membership->newEntity();
            $newEntity = $this->Membership->patchEntity($newEntity, $postData);
            $this->Membership->save($newEntity);
            if (($option == 'edit') && !empty($getData)) {
                $this->Flash->success(__('Information updated successfuly.'));
                return $this->redirect(['action' => 'membership']);
            }
            $this->Flash->success(__('Information added successfuly.'));
            return $this->redirect(['action' => 'membership']);
        }

        $this->set(compact('allData', 'getData'));
    }
    public function chatgptusers($option = null, $id = null) {
        $this->loadModel('Chatgpt_users');
        $allData = $this->Chatgpt_users->find('all');
       
        $getData = [];
        $new_data = [];
        $this->set(compact('allData', 'getData'));
        
    }
    public function udyogYojana($option = null, $id = null) { 
        $this->loadModel('RegisterPages');
        $this->loadComponent('Custom');
       $this->RegisterPages->hasMany('Familys', ['className' => 'Familys', 'foreignKey' => 'user_id']);
       $getData = $this->RegisterPages->find('all')->contain(['Familys']);//->where(['RegisterPages.id' => $user_id]);
       //pj($getData);exit;
        $allData = $this->RegisterPages->find('all'); 
        //$path = WWW_ROOT . 'img' . DS . 'register_pages';
        
        $getData = [];
        $new_data = [];
        
        If (!empty($option) && !empty($id)) {
            $getData = $this->RegisterPages->find('all')->where(['id' => $id])->first();
            if ($option == "delete") {
                $this->RegisterPages->deleteAll(['id' => $id]);
               
                $this->Flash->success(__('Data deleted successfuly.'));
                return $this->redirect(['action' => 'udyog_yojana']);
            }
            if($option == "removeimg"){
                $postData['id'] = $getData->id;
             $this->RegisterPages->updateAll(['logo'=>''],['id' => $id]);
             $this->Flash->success(__('image has been  remove.'));
             return $this->redirect(['action' => 'udyog_yojana/edit/'.$postData['id']]);

            }
            if($option == "edit"){
                $postData['id']= $getData->id;
                $getData= $this->RegisterPages->find('all')->contain(['Familys'])->where(['id'=>$id])->first();
                //pj($editdata);exit;
            
            }   
        }
     
        if ($this->request->is('post')) { 
            $postData = $this->request->getData();    
            
            if (($option == 'edit') && !empty($getData)) {
                $postData['id'] = $getData->id;
              
            }
           
            $newEntity = $this->RegisterPages->newEntity();
            $newEntity = $this->RegisterPages->patchEntity($newEntity, $postData);
           $savedata= $this->RegisterPages->save($newEntity);
         
            if (($option == 'edit') && !empty($getData)) {
          
                $filename = $this->Custom->uploadImageBanner($postData['logo']['tmp_name'], $postData['logo']['name'], 'img/uploads/','600');
                $this->RegisterPages->updateAll(['logo' => $filename], ['id' => $getData ->id]);

                $this->Flash->success(__('Information updated successfuly.'));
                return $this->redirect(['action' => 'udyog_yojana']);
            }
            $this->Flash->success(__('Information added successfuly.'));
            return $this->redirect(['action' => 'udyog_yojana']);
        }
       
        $this->set(compact('allData', 'getData'));
        
    }
   
    

    public function familys($option = null, $id = null) {
        $this->loadModel('Familys');
        $allData = $this->Familys->find('all')->where(['user_id' => $id]);

        
        $getData = [];
        $new_data = [];
   
    $this->set(compact('allData', 'getData'));

    }

    public function paypal($option = null, $id = null) {
        $this->loadModel('Paypal');
        $allData = $this->Paypal->find('all')->where(['user_id' => $id]);

        
        $getData = [];
        $new_data = [];
        
       
        $this->set(compact('allData', 'getData'));
        
    }
    public function refund( $id = null){
        $this->loadModel('Refund');
        $allData = $this->Refund->find('all')->where(['id' => $id]);

        
        
        $getData = [];
        $new_data = [];
        if ($option == "refund") {
        
            $this->Refund->updateAll(['payment_status' => 0],['payment_status' =>1],['payment_status' =>2], ['id' => $id]);
        }
        $this->set(compact('allData', 'getData'));
    }
    public function news($option = null, $id = null){
        $this->loadModel('News');
        $this->loadModel('Countries');
        $this->loadModel('Categories');
        $countryData = $this->Countries->find('all');
        $categoriesData = $this->Categories->find('all');
       // $allData = $this->News->find('all');
        $getData = [];
        $new_data = [];
        If (!empty($option) && !empty($id)) {
            $getData = $this->News->find('all')->where(['id' => $id])->first();
            
            
            if (($option == "edit") && !empty($getData)) {
                $postData['id'] = $getData->id;
                $getData= $this->News->find('all')->where(['id'=>$id])->first();
                
            }
            if ($option == "delete") {
                $this->News->deleteAll(['id' => $id]);  
                $this->Flash->success(__('Data deleted successfuly.'));
                return $this->redirect(['action' => 'news_listing']);
            }
        }
            if ($this->request->is('post')) {
                $postData = $this->request->getData();
                    
                
            if (($option == "edit") && !empty($getData)) {
                $postData['id'] = $getData->id;
            }
            $newEntity = $this->News->newEntity();
            $newEntity = $this->News->patchEntity($newEntity, $postData);
           $savedata= $this->News->save($newEntity);
         
            if (($option == "edit") && !empty($getData)) {
          
                $filename = $this->Custom->uploadImageBanner($postData['image']['tmp_name'], $postData['image']['name'], 'img/uploads/','600');
                $this->News->updateAll(['image' => $filename], ['id' => $getData ->id]);
    
                $this->Flash->success(__('Information updated successfuly.'));
                return $this->redirect(['action' => 'news']);
            }
            $this->Flash->success(__('Information added successfuly.'));
            return $this->redirect(['action' => 'news']);
        }

        // if ($this->request->is('post')) { 
        //     $postData = $this->request->getData();
        //     $newsArr['countries_id'] = $postData['countries_id'];
        //     $newsArr['categories_id'] = $postData['categories_id'];
        //     $newsArr['topic'] = $postData['topic'];
        //     $newsArr['short_description'] = $postData['short_description'];
        //     $newsArr['full_description'] = $postData['full_description'];

        //    // $filename = $this->Custom->uploadImageBanner($postData['image']['tmp_name'], $postData['image']['name'], 'img/uploads/','600'); 
        //     $newEntity = $this->News->newEntity();
        //     $newEntity = $this->News->patchEntity($newEntity, $newsArr);
        //     $savedata = $this->News->save($newEntity);

        //     $this->Flash->success(__('News page has been successfuly.'));
        // }
     
        
        $this->set(compact('countryData','categoriesData','getData'));

    }
    public function newsListing($option = null, $id = null){
        $this->loadModel('News');
        $this->loadModel('Categories');
        $this->loadModel('Countries');
        $this->News->belongsTo('Categories')
        ->setForeignKey('categories_id')
        ->setJoinType('LEFT');
        $this->News->belongsTo('Countries')
        ->setForeignKey('Countries_id')
        ->setJoinType('LEFT');

       $allData = $this->News->find('all')->contain(['Categories','Countries']);
    //   pj($allData);exit;
    $getData = [];
    $new_data = [];
   

    $this->set(compact('allData', 'getData'));
    }
    public function categories($option = null, $id = null){
        $this->loadModel('Categories');
    

        // if ($this->request->is('post')) { 
        //     $postData = $this->request->getData();
        //     $catArr['cat_name'] = $postData['cat_name'];   
        //     $newEntity = $this->Categories->newEntity();
        //     $newEntity = $this->Categories->patchEntity($newEntity, $catArr);
        //     $savedata = $this->Categories->save($newEntity);

        //     $this->Flash->success(__('Categories page has been successfuly.'));
        // }
        $getData = [];
        $new_data = [];
        If (!empty($option) && !empty($id)) {
            $getData = $this->Categories->find('all')->where(['id' => $id])->first();
            // pj($getData);exit;
            
            if (($option == "edit") && !empty($getData)) {
                $postData['id'] = $getData->id;
                $getData= $this->Categories->find('all')->where(['id'=>$id])->first();
                //pj($getData);exit;
            }
            if ($option == "active") {
                $this->Categories->updateAll(['status' => 1], ['id' => $id]);
                $this->Flash->success(__('Data has been Activated.'));
                return $this->redirect(['action' => 'categories_list']);
            }
            if ($option == "deactive") {
                $this->Categories->updateAll(['status' => 2], ['id' => $id]);
                $this->Flash->success(__('Data has been deactivated.'));
                return $this->redirect(['action' => 'categories_list']);
            }
            if ($option == "delete") {
                $this->Categories->deleteAll(['id' => $id]);  
                $this->Flash->success(__('Data deleted successfuly.'));
                return $this->redirect(['action' => 'categories_list']);
            }
        }
            if ($this->request->is('post')) {
                $postData = $this->request->getData();
            
                
            if (($option == "edit") && !empty($getData)) {
                $postData['id'] = $getData->id;
            }
            $newEntity = $this->Categories->newEntity();
            $newEntity = $this->Categories->patchEntity($newEntity, $postData);
           $savedata= $this->Categories->save($newEntity);
         
         $this->Flash->success(__('Information updated successfuly.'));
         return $this->redirect(['action' => 'Categories']);
       
        }
        
        $this->set(compact( 'getData'));

    }
 
 public function categoriesList($option = null, $id = null){
    $this->loadModel('Categories');
    $allData = $this->Categories->find('all');
        
        
    $getData = [];
    $new_data = [];

    $this->set(compact('allData', 'getData'));

 }
 public function countries(){
        $this->loadModel('Countries');
       // $allData = $this->Countries->find('all')->where(['id'=>$id]);
        
       
        $getData = [];
        $new_data = [];
        $this->set(compact('allData', 'getData'));
}
public function schoolRegistration($option = null, $id = null) {
    $this->loadModel('Schools');
    $allData = $this->Schools->find('all');
    $getData = [];
    $new_data = [];

    if (!empty($option) && !empty($id)) {
        $getData = $this->Schools->find('all')->where(['id' => $id])->first();
        if ($option == "delete") {
            $this->Schools->deleteAll(['id' => $id]);
            $this->Flash->success(__('Data deleted successfully.'));
            return $this->redirect(['action' => 'membership']);
        }
        if ($option == "active") {
            $this->Schools->updateAll(['is_active' => 1], ['id' => $id]);
            $this->Flash->success(__('Data has been Activated.'));
            return $this->redirect(['action' => 'membership']);
        }
        if ($option == "deactive") {
            $this->Schools->updateAll(['is_active' => 2], ['id' => $id]);
            $this->Flash->success(__('Data has been deactivated.'));
            return $this->redirect(['action' => 'membership']);
        }
    }

    if ($this->request->is('post')) {
        $postData = $this->request->getData();

        if (($option == 'edit') && !empty($getData)) {
            $postData['id'] = $getData->id;
        }

        $newEntity = $this->Schools->newEntity();
        $newEntity = $this->Schools->patchEntity($newEntity, $postData);

        if ($this->Schools->save($newEntity)) {
            // Prepare email after saving
            $schoolName = $postData['school_name'];
            $schoolBranch = $postData['branch_name'];
            $schoolAddress = $postData['address'];
            $Date = date("F d, Y");
            $emailMessage = $this->Settings->find('all')->where(['name' => 'CONTACT_US'])->first();
            $fromMail = $this->Settings->find('all')->where(['name' => 'FROM_EMAIL'])->first();
            $from = $fromMail->value;
            $subject = $emailMessage->display;
            $link = HTTP_ROOT . 'cyfrif.com';
            $to = $postData['email']; // Assuming you have 'email' in the form data
            $message = $this->Custom->formatSchoolRegistration($emailMessage->value, $schoolName, $schoolBranch, $schoolAddress, $Date, $link, $subject);

            // Send email
            $this->sendEmailSMTP($to, 'sonupanda17@gmail.com', $subject, $message);

            if (($option == 'edit') && !empty($getData)) {
                $this->Flash->success(__('Information updated successfully.'));
                return $this->redirect(['action' => 'schoolRegistration']);
            }

            $this->Flash->success(__('Information added successfully.'));
            return $this->redirect(['action' => 'schoolRegistration']);
        }
    }

    $this->set(compact('allData', 'getData'));
}

// Function to format the email with the image, school name, and branch
private function formatSchoolEmail($schoolName, $schoolBranch) {
    $imagePath = HTTP_ROOT . 'img/logo.png'; // Replace with your image path
    return '<!DOCTYPE html>
<html>
<head>
    <title>School Registration</title>
</head>
<body>
    <table width="750" style="font-family:Arial, Helvetica, sans-serif;" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td style="text-align:center;">
                    <h1>Welcome to Cyfrif Education Academy</h1>
                    <p>Thank you for registering your school.</p>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    <img src="' . $imagePath . '" alt="Campaign Image" style="max-width:100%; height:auto;">
                </td>
            </tr>
           
        </tbody>
    </table>
</body>
</html>';
}

// Function to send email via SMTP
private function sendEmailSMTP($to, $from, $subject, $message) {
    $email = new Email();
    $email->setTransport('smtpp') // Set your email transport configuration
        ->setFrom([$from => 'Cyfrif Education Academy'])
        ->setTo($to)
        ->setEmailFormat('html')
        ->setSubject($subject)
        ->send($message);
}

public function schoolListing($option = null, $id = null){
    $this->loadModel('Schools');

   $allData = $this->Schools->find('all');
   $getData = [];
   $new_data = [];

   If (!empty($option) && !empty($id)) {
       $getData = $this->Schools->find('all')->where(['id' => $id])->first();
       if ($option == "delete") {
           $this->Schools->deleteAll(['id' => $id]);
           $this->Flash->success(__('Data deleted successfuly.'));
           return $this->redirect(['action' => 'schoolListing']);
       }
       if ($option == "active") {
           $this->Schools->updateAll(['is_active' => 1], ['id' => $id]);
           $this->Flash->success(__('Data has been Activated.'));
           return $this->redirect(['action' => 'schoolRegistration']);
       }
       if ($option == "deactive") {
           $this->Schools->updateAll(['is_active' => 2], ['id' => $id]);
           $this->Flash->success(__('Data has been deactivated.'));
           return $this->redirect(['action' => 'schoolRegistration']);
       }
   }
$this->set(compact('allData', 'getData'));
}
public function offlineListing($option = null, $id = null){
    $this->loadModel('Registrations');

   $allData = $this->Registrations->find('all');
   $getData = [];
   $new_data = [];

   If (!empty($option) && !empty($id)) {
       $getData = $this->Registrations->find('all')->where(['id' => $id])->first();
       if ($option == "delete") {
           $this->Registrations->deleteAll(['id' => $id]);
           $this->Flash->success(__('Data deleted successfuly.'));
           return $this->redirect(['action' => 'schoolListing']);
       }
       if ($option == "active") {
           $this->Registrations->updateAll(['is_active' => 1], ['id' => $id]);
           $this->Flash->success(__('Data has been Activated.'));
           return $this->redirect(['action' => 'schoolRegistration']);
       }
       if ($option == "deactive") {
           $this->Registrations->updateAll(['is_active' => 2], ['id' => $id]);
           $this->Flash->success(__('Data has been deactivated.'));
           return $this->redirect(['action' => 'schoolRegistration']);
       }
   }
$this->set(compact('allData', 'getData'));
}
public function onlineListing($option = null, $id = null){
    $this->loadModel('Registrations');

   $allData = $this->Registrations->find('all');
   $getData = [];
   $new_data = [];

   If (!empty($option) && !empty($id)) {
       $getData = $this->Registrations->find('all')->where(['id' => $id])->first();
       if ($option == "delete") {
           $this->Registrations->deleteAll(['id' => $id]);
           $this->Flash->success(__('Data deleted successfuly.'));
           return $this->redirect(['action' => 'schoolListing']);
       }
       if ($option == "active") {
           $this->Registrations->updateAll(['is_active' => 1], ['id' => $id]);
           $this->Flash->success(__('Data has been Activated.'));
           return $this->redirect(['action' => 'schoolRegistration']);
       }
       if ($option == "deactive") {
           $this->Registrations->updateAll(['is_active' => 2], ['id' => $id]);
           $this->Flash->success(__('Data has been deactivated.'));
           return $this->redirect(['action' => 'schoolRegistration']);
       }
   }
$this->set(compact('allData', 'getData'));
}
public function allStudentListing($option = null, $id = null){
    $this->loadModel('Registrations');

   $allData = $this->Registrations->find('all');
   $getData = [];
   $new_data = [];

   If (!empty($option) && !empty($id)) {
       $getData = $this->Registrations->find('all')->where(['id' => $id])->first();
       if ($option == "delete") {
           $this->Registrations->deleteAll(['id' => $id]);
           $this->Flash->success(__('Data deleted successfuly.'));
           return $this->redirect(['action' => 'schoolListing']);
       }
       if ($option == "active") {
           $this->Registrations->updateAll(['is_active' => 1], ['id' => $id]);
           $this->Flash->success(__('Data has been Activated.'));
           return $this->redirect(['action' => 'schoolRegistration']);
       }
       if ($option == "deactive") {
           $this->Registrations->updateAll(['is_active' => 2], ['id' => $id]);
           $this->Flash->success(__('Data has been deactivated.'));
           return $this->redirect(['action' => 'schoolRegistration']);
       }
   }
$this->set(compact('allData', 'getData'));
}
public function addStudent($option = null, $id = null) {
    $this->loadModel('Registrations');
    $allData = $this->Registrations->find('all');
    
    

    $getData = [];
    $new_data = [];

    If (!empty($option) && !empty($id)) {
        $getData = $this->Membership->find('all')->where(['id' => $id])->first();
        if ($option == "delete") {
            $this->Membership->deleteAll(['id' => $id]);
            $this->Flash->success(__('Data deleted successfuly.'));
            return $this->redirect(['action' => 'membership']);
        }
        if ($option == "active") {
            $this->Membership->updateAll(['is_active' => 1], ['id' => $id]);
            $this->Flash->success(__('Data has been Activated.'));
            return $this->redirect(['action' => 'membership']);
        }
        if ($option == "deactive") {
            $this->Membership->updateAll(['is_active' => 2], ['id' => $id]);
            $this->Flash->success(__('Data has been deactivated.'));
            return $this->redirect(['action' => 'addStudent']);
        }
    }





    if ($this->request->is('post')) {
        $postData = $this->request->getData();

        if (($option == 'edit') && !empty($getData)) {
            $postData['id'] = $getData->id;
        }
        $newEntity = $this->Registrations->newEntity();
        $newEntity = $this->Registrations->patchEntity($newEntity, $postData);
        $this->Registrations->save($newEntity);
        if (($option == 'edit') && !empty($getData)) {
            $this->Flash->success(__('Information updated successfuly.'));
            return $this->redirect(['action' => 'addStudent']);
        }
        $this->Flash->success(__('Information added successfuly.'));
        return $this->redirect(['action' => 'addStudent']);
    }

    $this->set(compact('allData', 'getData'));
}
public function excelUpload($option = null, $id = null)
    {
        // Load Registrations model to interact with the database
        $this->loadModel('Registrations');

        if ($this->request->is('post')) {
            $data = $this->getRequest()->getData();
        pj($data);
            if (!empty($data['file']['name'])) {
                $fileName = $data['file']['name'];
                $fileTmpName = $data['file']['tmp_name'];
                $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        
                $allowedType = ['xlsx', 'xls'];
                if (!in_array($fileExtension, $allowedType)) {
                    $this->Flash->error(__('Invalid File. Only Excel files are allowed.'));
                } else {
                    try {
                        // Load the Excel file
                        $spreadsheet = IOFactory::load($fileTmpName);
                        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        
                        if (count($sheetData) > 1) {
                            $connection = ConnectionManager::get('default');
                            $flag = true;
        
                            foreach ($sheetData as $row) {
                                if ($flag) {
                                    $flag = false; // Skip the header row
                                    continue;
                                }
        
                                $name = $row[0];
                                $email = $row[1];
                                $phone = $row[2];
        
                                $connection->insert('Registrations', [
                                    'school_name' => $name,
                                    'email' => $email,
                                    'contact_no' => $phone,
                                    'create_dt' => date('Y-m-d'),
                                ]);
                            }
                            $this->Flash->success(__('Excel Data Imported into the Database.'));
                        } else {
                            $this->Flash->error(__('The Excel file is empty or has no valid data.'));
                        }
                    } catch (Exception $e) {
                        $this->Flash->error(__('Error processing the Excel file: ') . $e->getMessage());
                    }
                }
            } else {
                $this->Flash->error(__('Please choose a file to upload.'));
            }
        }
    }
}

