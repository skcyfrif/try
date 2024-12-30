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
use Cake\Auth\DefaultPasswordHasher;
use Cake\Http\Exception\NotFoundException;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use App\Controller\Component\CustomComponent;

/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash');

        $this->loadComponent('Custom');

        $this->loadModel('Users');
        $this->loadModel('UserDetails');
        $this->loadModel('Settings');
        $this->loadModel('Optionals');
        $this->loadModel('UserMembership');

        $this->viewBuilder()->setLayout('users');

        if (!empty($this->Auth->user('type')) && !in_array($this->Auth->user('type'), [3, 4])) {
            $this->Flash->warning(__('Can\'t allow to access. Contact with admin.'));
            return $this->redirect(HTTP_ROOT . 'admin-login');
        }

        $token_key = !empty($this->getRequest()->getSession()->read('Auth.User.login_token')) ? $this->getRequest()->getSession()->read('Auth.User.login_token') : '';

        $memb_status = 0;
        if (!empty($this->getRequest()->getSession()->read('Auth.User.id'))) {
            $all_data = $this->UserMembership->find('all')->where(['user_id' => $this->getRequest()->getSession()->read('Auth.User.id'), 'status' => 1])->order(['id' => 'DESC'])->first();
            if (!empty($all_data)) {
                if (date('Y-m-d', strtotime($all_data->end_date)) >= date('Y-m-d')) {
                    $memb_status = 1;
                }
            }
        }
        $this->set(compact('token_key', 'memb_status'));
    }

    public function beforeFilter(Event $event) {
        $this->Auth->allow(['login','getprice',"foodorders",'tableorder','tabledetail', 'ajaxLogin', 'forgotPassword', 'recoverPassword', 'register', 'validTokenCheck', 'activateAccount', 'index', 'easydialogs', 'easydialogsDailylife', 'easydialogsDailylife2', 'easydialogsDailylife3', 'easydialogsSchoollife', 'easydialogsTransportation', 'easydialogsEntertainment', 'easydialogsDating', 'easydialogsRestaurant', 'easydialogsSports', 'easydialogsSafety', 'easydialogsTravel', 'easydialogsJobs', 'easydialogsFood', 'easydialogsShopping', 'easydialogsHousing', 'easydialogsVote', 'easydialogsHealth', 'kidsenglish', 'kidsenglish2', 'kidsenglish3', 'begin1', 'begin2', 'begin3', 'begin4', 'begin5', 'begin6', 'supereasy', 'easyread', 'robot', 'eslread', 'people', 'essays', 'writing']);
    }

    public function validTokenCheck($key) {
        $token_key = $key;
        $user_data = $this->Users->find('all')->where(['login_token' => $token_key])->first();
        if (empty($user_data)) {
            echo json_encode(['token_key' => '', 'memb_status' => 0]);
            exit();
        }

        $memb_status = 0;
        if (!empty($user_data->id)) {
            $all_data = $this->UserMembership->find('all')->where(['user_id' => $user_data->id, 'status' => 1])->order(['id' => 'DESC'])->first();
            if (!empty($all_data)) {
                if (date('Y-m-d', strtotime($all_data->end_date)) >= date('Y-m-d')) {
                    $memb_status = 1;
                }
            }
        }
        echo json_encode(['token_key' => $token_key, 'memb_status' => $memb_status]);
        exit();
        //api url : https://eslfast.com/demo/valid-token/ddc568928e12bfb2b04a86952af7d81b65
    }

    public function membershipPlans() {
        $this->loadModel('Membership');
        $allData = $this->Membership->find('all')->where(['is_active' => 1])->order(['price' => 'ASC']);
        $this->set(compact('allData'));
    }

    public function dashboard() {
        $user_id = $this->getRequest()->getSession()->read('Auth.User.id');
        $all_data = $this->UserMembership->find('all')->where(['user_id' => $user_id, 'status' => 1])->order(['id' => 'DESC']);
        $this->set(compact('all_data'));
    }

    public function success($key) {
        
    }

    public function cancelled($key) {
        
    }

    public function account() { //uploadImageBanner
        $this->loadModel('Countries');
        $this->loadModel('States');
        $this->loadModel('Cities');
        $this->loadComponent('Custom');
        $user_id = $this->getRequest()->getSession()->read('Auth.User.id');
        $user_details = $this->UserDetails->find('all')->where(['user_id' => $user_id])->first();
        $datacoun = $user_details->country;
        $datastate = $user_details->state;

        $countryListings = $this->Countries->find('list', ['keyField' => 'id', 'valueField' => 'name'])->where(['Countries.is_active' => 1])->order(['Countries.name']);

        $stateLists = $this->States->find('list', ['keyField' => 'id', 'valueField' => 'name'])->where(['country_id' => $datacoun]);
        $cityListsx = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'name'])->where(['state_id' => $datastate]);

        $path = WWW_ROOT . 'files' . DS . 'user_image';
        $folder = new Folder($path);
        if (is_null($folder->path)) {
            $folder->create($path);
            new Folder($path, true, 0755);
        }

        if ($this->request->is('post')) {
            $postData = $this->request->getData();

            $postData['user_id'] = $user_id;

            if (!empty($user_details)) {
                $postData['id'] = $user_details->id;
            }

            if (!empty($postData['file']['name'])) {
                if (!empty($user_details->photo)) {
                    @unlink($user_details->path . $user_details->photo);
                }
                $file_temp = $postData['file']['tmp_name'];
                $folderPath = 'files/user_image/';
                $ext = pathinfo($postData['file']['name'], PATHINFO_EXTENSION);
                if (!in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $this->Flash->warning(__('Unsupported file format. jpg|jpeg|png|gif allowed '));
                    return $this->redirect($this->referer());
                }
                $fileNewName = time() . '_' . rand(1111, 9999) . '.' . $ext;
                move_uploaded_file($file_temp, $folderPath . $fileNewName);
                $postData['path'] = $folderPath;
                $postData['photo'] = $fileNewName;
            }


            $newRow = $this->UserDetails->newEntity();
            $newRow = $this->UserDetails->patchEntity($newRow, $postData);
            if ($this->UserDetails->save($newRow)) {
                $this->Users->updateAll(['name' => $postData['first_name']], ['id' => $user_id]);
                $this->getRequest()->getSession()->write('Auth.User.name', $postData['first_name']);
                $this->Flash->success(__('Profile Updated.'));
                return $this->redirect($this->referer());
            } else {
                $this->Flash->warning(__('Try again. Some error found'));
                return $this->redirect($this->referer());
            }
        }
        $this->set(compact('user_details', 'countryListings', 'stateLists', 'cityListsx'));
    }

    public function passwordUpdate() {
        $this->request->allowMethod(['post']);

        $user_id = $this->getRequest()->getSession()->read('Auth.User.id');
        if ($this->request->is('post')) {
            $postData = $this->request->getData();
            if (empty($postData['password']) || empty($postData['confirm_password'])) {
                $this->Flash->warning(__('Password and confirmation password is requird.'));
                return $this->redirect($this->referer());
            }

            $hasher = new DefaultPasswordHasher();
            $password = $hasher->hash($postData['password']);
            $this->Users->updateAll(['password' => $password], ['id' => $user_id]);
            $this->Flash->success(__('Password updated.'));
            return $this->redirect($this->referer());
        }
    }

    public function register() {
        if ($this->request->is('post')) {
            $postData = $this->request->getData();
            $usersD = $usersArr = [];

            if (!empty($postData['email'])) {
                $chk = $this->Users->find('all')->where(['email' => $postData['email']])->count();
                if ($chk > 0) {
                    $this->Flash->error(__('Email address already in use, Try any other!!'));
                    return $this->redirect(HTTP_ROOT . 'signup');
                }
            }

            $password = $postData['password'];
            $hasher = new DefaultPasswordHasher();

            $usersArr['name'] = $postData['first_name'];
            $usersArr['email'] = $postData['email'];
            $usersArr['password'] = $hasher->hash($password);
            $usersArr['unq_id'] = $this->Custom->getUniqNumber();
            $usersArr['type'] = 4;
            $usersArr['is_active'] = 2;
            $usersArr['created_dt'] = date('Y-m-d h:i:s');
            $usersArr['last_login_ip'] = $this->Custom->get_ip_address();
            $usersArr['last_login_date'] = date('Y-m-d h:i:s');
            $usersArr['token'] = $this->Custom->getUniqNumber();
            $usersArr['login_token'] = $this->Custom->getUniqNumber();
            $usersArr['lastmodify_dt'] = date('Y-m-d h:i:s');
            $newData = $this->Users->newEntity();
            $newData = $this->Users->patchEntity($newData, $usersArr);
            if ($this->Users->save($newData)) {
                $last_id = $newData->id;
                $usersD['user_id'] = $last_id;
                $chk = $this->UserDetails->find('all')->where(['UserDetails.user_id' => $last_id])->first();
                if (!empty($chk)) {
                    $usersD['id'] = $chk->id;
                }
                $usersD['first_name'] = $postData['first_name'];
                $usersD['last_name'] = $postData['last_name'];
                $newRow = $this->UserDetails->newEntity();
                $newRow = $this->UserDetails->patchEntity($newRow, $usersD);
                $this->UserDetails->save($newRow);
                $emailMessage = $this->Settings->find('all')->where(['name' => 'REGISTRATION'])->first();
                $fromMail = $this->Settings->find('all')->where(['name' => 'FROM_EMAIL'])->first();
                $to = $postData['email'];
                $from = $fromMail->value;
                $subject = $emailMessage->display;
                $unq_id = $usersArr['unq_id'];
                $link = HTTP_ROOT . 'activate-account/' . $unq_id;
                $message = $this->Custom->formatRegister($emailMessage->value, $postData['first_name'], $postData['email'], $link);
                $this->Custom->sendEmailSMTP($to, $from, $subject, $message);

                $this->Flash->success(__('Your account has been created.'));
                return $this->redirect(HTTP_ROOT . 'signup');
            }
            $this->Flash->error(__('Please, try again.'));
            return $this->redirect(HTTP_ROOT . 'signup');
        }
    }

    public function activateAccount($unq_id) {
        if ($this->getRequest()->getSession()->read('Auth.User.id') != '') {
            return $this->redirect(HTTP_ROOT);
        }
        $chk_account = $this->Users->find('all')->where(['unq_id' => $unq_id])->count();
        if ($chk_account > 0) {
            $chk_status = $this->Users->find('all')->where(['unq_id' => $unq_id])->first();
            if ($chk_status->is_active == 1) {
                $this->Flash->error(__('Account already activated.'));
                return $this->redirect(HTTP_ROOT);
            } else {
                $this->Users->updateAll(['is_active' => 1], ['unq_id' => $unq_id]);
                $this->Flash->success(__('Your account activated.'));
                return $this->redirect(HTTP_ROOT . '?type=login');
            }
        } else {
            $this->Flash->error(__('Account not found.'));
            return $this->redirect(HTTP_ROOT);
        }
    }

    public function login() {
        return $this->redirect(HTTP_ROOT);
        if ($this->getRequest()->getSession()->read('Auth.User.id') != '') {
            return $this->redirect(['controller' => 'Appadmins', 'action' => 'index']);
        }
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $user = $this->Auth->identify();
            //pj( $user);exit;

            if (!empty($user) && !in_array($user['type'], [3, 4])) {
                $this->Flash->warning(__('Can\'t access. Contact with admin.'));
                return $this->redirect(HTTP_ROOT . '?type=login');
            }
            if (!empty($user)) {

                $this->Auth->setUser($user);
                $this->Flash->success(__('Welcome ' . $this->Auth->user('name')));
                $redirectUrl = $this->request->getQuery('redirect');
                $this->Users->updateAll(['last_login_date' => date('Y-m-d H:i:s'), 'last_login_ip' => $this->Custom->get_ip_address()], ['id' => $this->Auth->user('id')]);
                if (!empty($redirectUrl)) {
                    return $this->redirect($redirectUrl);
                }
                return $this->redirect(HTTP_ROOT);
            } else {
                $this->Flash->warning(__('Email or password is incorrect'));
            }
        }
    }

    public function ajaxLogin() {
        $this->request->allowMethod(['post']);
        if ($this->getRequest()->getSession()->read('Auth.User.id') != '') {
            echo json_encode(['status' => 'error', 'msg' => 'Already logged in', 'url' => HTTP_ROOT]);
            exit;
        }
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $user = $this->Auth->identify();
//            pj($user);
//            exit;
            if (!empty($user) && !in_array($user['type'], [3, 4])) {
                $this->Flash->warning(__(''));
                echo json_encode(['status' => 'error', 'msg' => 'Can\'t access. Contact with admin.', 'url' => '']);
                exit;
            }
            if (!empty($user)) {

                $this->Auth->setUser($user);
                $this->Flash->success(__('Welcome ' . $this->Auth->user('name')));
                $redirectUrl = !empty($data['redirect']) ? $data['redirect'] : '';
                $login_token = $this->Custom->getUniqNumber() . rand(111, 999);

                $this->Users->updateAll(['last_login_date' => date('Y-m-d H:i:s'), 'last_login_ip' => $this->Custom->get_ip_address(), 'login_token' => $login_token], ['id' => $this->Auth->user('id')]);
                $this->getRequest()->getSession()->write('Auth.User.login_token', $login_token);

                if (!empty($redirectUrl)) {
                    echo json_encode(['status' => 'successs', 'msg' => 'Login success.', 'url' => HTTP_ROOT . $redirectUrl]);
                    exit;
                }
                echo json_encode(['status' => 'successs', 'msg' => 'Login success.', 'url' => HTTP_ROOT]);
                exit;
            } else {
                echo json_encode(['status' => 'error', 'msg' => 'Email or password is incorrect', 'url' => '']);
                exit;
            }
        }

        exit;
    }

    public function logout() {
        $this->Flash->success(__('Successfully logout.'));
        $type = $this->Auth->user('type');
        if ($this->Auth->logout()) {
            return $this->redirect(HTTP_ROOT);
        }
    }

    public function recoverPassword($toke = null) {
        if ($this->getRequest()->getSession()->read('Auth.User.id') != '') {
            return $this->redirect(['controller' => 'Appadmins', 'action' => 'index']);
        }


        if (empty($toke)) {
            $this->Flash->error(__('ERROR. Try again...'));
            return $this->redirect(HTTP_ROOT);
        }
        $user_data = $this->Users->find('all')->where(['token' => $toke])->first();
        if (empty($user_data)) {
            $this->Flash->error(__('ERROR. Try again...'));
            return $this->redirect(HTTP_ROOT);
        }
        if ($this->request->is('post')) {
            $postData = $this->request->getData();
            if (!empty($postData['password'])) {
                $hasher = new DefaultPasswordHasher();
                $password = $hasher->hash($postData['password']);
                $this->Users->updateAll(['password' => $password, 'token' => ''], ['id' => $user_data->id]);
            }
            $this->Flash->success(__('Password changed successfuly.'));
            return $this->redirect(HTTP_ROOT . '?type=login');
        }
    }
    
    public function registerpages() {
       
    }

    public function index() {
        if ($this->request->is('post')) {
            $this->loadModel('RegisterPages');
            $this->loadModel('Familys');
            $this->loadComponent('Custom');
          
            $postData = $this->request->getData();
            $usersArr['udyog_name'] = $postData['udyog_name'];
            $usersArr['udyogi_name'] = $postData['udyogi_name'];
            $usersArr['contact_no'] = $postData['contact_no'];
            $usersArr['address'] = $postData['address'];
            $usersArr['insurance'] = $postData['insurance'];                   
                 
            //pj($postData);  
            $filename = $this->Custom->uploadImageBanner($postData['logo']['tmp_name'], $postData['logo']['name'], 'img/uploads/','600');
                
            $newEntity = $this->RegisterPages->newEntity();
            $newEntity = $this->RegisterPages->patchEntity($newEntity, $usersArr);
            $savedata = $this->RegisterPages->save($newEntity);            
            
            $i = 0;
            foreach( $postData['fname'] as $data){
                //echo $i;
                //pj($postData['fname'][$i]);
                $familyData['user_id'] = $savedata ->id;
                $familyData['fname'] = $postData['fname'][$i];
                $familyData['fage'] = $postData['fage'][$i];
                $familyData['fgender'] = $postData['fgender'][$i];
                $familyData['frelation'] = $postData['frelation'][$i];
                //pj($familyData);
                $newEntityq = $this->Familys->newEntity();
                $newEntityq = $this->Familys->patchEntity($newEntityq, $familyData);
                $this->Familys->save($newEntityq);
                $i++;
            }

            $this->RegisterPages->updateAll(['logo' => $filename], ['id' => $savedata ->id]);        
                
            $this->Flash->success(__('Registerpage has been successfuly.'));
        }

    }


    public function easydialogs() {
        
    }

    public function easydialogsDailylife() {
        
    }

    public function easydialogsDailylife2() {
        
    }

    public function easydialogsDailylife3() {
        
    }

    public function easydialogsSchoollife() {
        
    }

    public function easydialogsTransportation() {
        
    }

    public function easydialogsEntertainment() {
        
    }

    public function easydialogsDating() {
        
    }

    public function easydialogsRestaurant() {
        
    }

    public function easydialogsSports() {
        
    }

    public function easydialogsSafety() {
        
    }

    public function easydialogsTravel() {
        
    }

    public function easydialogsJobs() {
        
    }

    public function easydialogsFood() {
        
    }

    public function easydialogsShopping() {
        
    }

    public function easydialogsHousing() {
        
    }

    public function easydialogsVote() {
        
    }

    public function easydialogsHealth() {
        
    }

    public function kidsenglish() {
        
    }

    public function kidsenglish2() {
        
    }

    public function kidsenglish3() {
        
    }

    public function begin1() {
        
    }

    public function begin2() {
        
    }

    public function begin3() {
        
    }

    public function begin4() {
        
    }

    public function begin5() {
        
    }

    public function begin6() {
        
    }

    public function supereasy() {
        
    }

    public function easyread() {
        
    }

    public function robot() {
        
    }

    public function eslread() {
        
    }

    public function people() {
        
    }

    public function essays() {
        
    }

    public function writing() {
        
    }
    public function foodorders(){
        $this->loadModel('foodlist');
        $food = $this->foodlist->find('all')->toArray();
        $this->set(compact("food"));
        $this->loadModel('tableorders');
        if($this->request->is('post')){
            $postData = $this->request->getData();
            $userArr1 = [];
            $user = [];
            $this->set('test',$postData);
            
            for($i = 0; $i < count($postData['fid']); $i++)
            {
                $id = $postData['fid'][$i];
                $no = $postData['quantity'][$i];
                $cdt = $postData['time'][$i];
                $dprice = $this->foodlist->find()->select(['price'])->where(['id'=>$id])->first()->price;
                $etotal = $no * $dprice;
                $user = $postData['inuser'];
                $userArr1[] =[
                    'name' => $user,
                    'table_no' => $postData['tno'],

                    'unique_id' => $id,
                    'item_name' => $this->foodlist->find()->select(['name'])->where(['id'=>$id])->first()->name,
                    'no_item' => $no,
                    'price'=> $dprice,
                    'total_amount' => $etotal,
                    'paid_amount' => $postData['gtotal'],

                    'booking_time' => $cdt
                ];
            }
            
            $user = $this->tableorders->newEntities($userArr1);

            // $user = $this->tableorder->patchEntities($user,$userArr);
            if($this->tableorders->saveMany($user)){
                $this->Flash->success(__('Order Booking successful.'));
                // return $this->redirect(['action' => 'foodorders']);

            }else {
                $this->Flash->error(__('Registration failed. Please try again.'));
            } 

    }
        
    }
  

    public function getprice($id){
        $this->viewBuilder()->setLayout('');
        $this->loadModel('foodlist');
        $data =$this->foodlist->find('all')->where(['id'=>$id])->first();
        $price = $data['price'];
        echo $price;
        exit;
    }
    public function tableorder(){
        $this->loadModel('tableorders');
        if($this->request->is('post')){
        $postData = $this->request->getData();

        // $data = $this->tableorders->find('all')->where(['table_no'=> $postData['user']])->toArray();
        $data = $this->tableorders->find('all')->toArray();

        if(!$data){
            $this->Flash->error(__('Please take a new order'));
            return $this->redirect(['action'=>'foodorders']);
        }
        $this->set('items',$data);
        // $this->viewBuilder()->setTemplate('foodorders');
         }

    }

    public function tabledetail(){
        $this->loadModel('tableorders');
        if($this->request->is('post')){
            $postData = $this->request->getData();
    
            // $data = $this->tableorders->find('all')->where(['table_no'=> $postData['user']])->toArray();
            $data = $this->tableorders->find('all')->where(['table_no'=>$postData['table_no']])->toArray();
            
            if(!$data){
                $this->Flash->error(__('Please take a new order'));
                return $this->redirect(['action'=>'foodorders']);
            }
            $this->set('items',$data);
        
        }
    }
    

   

}
