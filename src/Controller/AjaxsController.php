<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\Email;

/**
 * Appadmin Controller
 *
 *
 * @method \App\Model\Entity\Appadmin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AjaxsController extends AppController {

    public function initialize() {
        parent::initialize();

        $this->viewBuilder()->setLayout('ajax');
        $this->loadComponent('Custom');
    }

//    public function beforeFilter(Event $event) {
//        //$this->Auth->allow(['socialLinkSort']);
//    }

    public function socialLinkSort() {
        $this->loadModel('socialMediaLinks');
        $array = $this->request->getData('arrayorder');
        $count = 1;
        foreach ($array as $idval) {
            $this->socialMediaLinks->updateAll(['sort_order' => $count], ['id' => $idval]);
            $count++;
        }
        echo "Sorting updated successfully.";
        exit;
    }

    public function contactMessageDetails() {
        $this->loadModel('ContactUs');
        $data = $this->request->getData();
        $this->ContactUs->query()->update()->set(['view' => 1])->where(['unq_id' => $data['unq_id']])->execute();
        $allContactMsg = $this->ContactUs->find('all')->where(['unq_id' => $data['unq_id']])->select(['name', 'email', 'subject', 'message', 'ip_address', 'created_on'])->first();
        print $allContactMsg;
        exit;
    }

    public function emailValidCheck() {
        $this->loadModel('Subscribers');
        $array = $this->request->getData();
        $count = $this->Subscribers->find('all')->where(['email_id' => $array['email_id']])->count();
        if ($count >= 1) {
            echo json_encode(false);
            exit;
        }
        echo json_encode(true);
        exit;
    }

    public function checkEmail() {
        $this->loadModel('Users');
        $this->request->allowMethod(['post']);
        $postData = $this->request->getData();
        $getData = $this->Users->find('all')->where(['email' => $postData['email']])->count();
        if ($getData >= 1) {
            echo json_encode(['status' => 'success']);
            exit;
        }
        echo json_encode(['status' => 'error']);
        exit;
    }

    public function forgotPassword() {
        $this->loadModel('Users');
        $this->loadModel('Settings');
        $this->request->allowMethod(['post']);
        $postData = $this->request->getData();

        $user_data = $this->Users->find('all')->where(['email' => $postData['email']])->first();
        $form_mail = $this->Settings->find('all')->where(['name' => 'FROM_EMAIL'])->first();
        $forgot_password_mail_body = $this->Settings->find('all')->where(['name' => 'EMAIL_FORGOT_PASS'])->first();

        $name = $user_data->name;
        $email = $user_data->email;
        $token = $this->Custom->getUniqNumber();
        $link = HTTP_ROOT . 'admin-recover-password/' . $token;
        $subject = 'Password reset request';
        $message = $this->Custom->formatForgetPassword($forgot_password_mail_body->value, $name, $email, $link);
        // $this->Custom->sendEmail($email, $form_mail->value, $subject, $message);
        $this->Custom->sendEmailSMTP($email, $form_mail->value, $subject, $message);

        $this->Users->updateAll(['token' => $token], ['id' => $user_data->id]);

        $this->Flash->success(__('Please check your email and reset your password.'));
        return $this->redirect($this->referer());

        exit;
    }

    public function forgotUserPassword() {
        $this->loadModel('Users');
        $this->loadModel('Settings');
        $this->request->allowMethod(['post']);
        $postData = $this->request->getData();

        $user_data = $this->Users->find('all')->where(['email' => $postData['email']])->first();
        $form_mail = $this->Settings->find('all')->where(['name' => 'FROM_EMAIL'])->first();
        $forgot_password_mail_body = $this->Settings->find('all')->where(['name' => 'EMAIL_FORGOT_PASS'])->first();

        $name = $user_data->name;
        $email = $user_data->email;
        $token = $this->Custom->getUniqNumber();
        $link = HTTP_ROOT . 'recover-password/' . $token;
        $subject = 'Password reset request';
        $message = $this->Custom->formatForgetPassword($forgot_password_mail_body->value, $name, $email, $link);
        // $this->Custom->sendEmail($email, $form_mail->value, $subject, $message);
        $this->Custom->sendEmailSMTP($email, $form_mail->value, $subject, $message);

        $this->Users->updateAll(['token' => $token], ['id' => $user_data->id]);

        $this->Flash->success(__('Please check your email and reset your password.'));
        return $this->redirect($this->referer());

        exit;
    }

    public function emailExitOrNot() {
        $this->loadModel('Users');
        $this->viewBuilder()->setLayout('ajax');
        $data = $this->getRequest()->getData();
        $email = $data['email'];
        $query = $this->Users->find('all')->where(['email' => $email]);
        $count = $query->count();
        if ($count > 0) {
            echo(json_encode(false));
            exit;
        } else {
            echo(json_encode(true));
            exit;
        }
        exit;
        /* $('#userRegister').validate({            
          rules: {
          email: {
          required: true,
          email: true,
          remote: {
          url: "<?= HTTP_ROOT; ?>ajaxs/emailExitOrNot",
          beforeSend: function (xhr) { // Handle csrf errors
          xhr.setRequestHeader('X-CSRF-Token',<?= json_encode($this->request->getParam('_csrfToken')); ?>);
          },
          type: "post",
          data: {
          email: function() {
          return $("#reg_usr_email").val();
          }
          },
          dataType: 'json',
          },
          }
          },
          messages: {
          email: {
          required: "Please enter your email",
          email: "Please enter a valid email address",
          remote: "Email Already in use"
          }
          }
          }); */
    }

    public function websiteOrder() {
        $this->loadModel('OtherSites');
        $array = $_REQUEST['arrayorder'];
        $count = 1;
        foreach ($array as $idval) {
            //echo $idval.' - '. $count."<br>";
            $this->OtherSites->updateAll(['sort_order' => $count], ['id' => $idval]);
            $count++;
        }
        echo "sorted";
        exit;
    }

    public function ajaxCheckEmail() {
        $this->loadModel('Users');
        $data = $this->getRequest()->getData();
        $email = $data['email'];
        $query = $this->Users->find('all')->where(['email' => $email]);
        $count = $query->count();
        if ($count > 0) {
            echo(json_encode(false));
            exit;
        } else {
            echo(json_encode(true));
            exit;
        }
        exit;
    }
    
    public function getState() {
        $this->request->allowMethod(['post']);
        $this->loadModel('States');
        if ($this->request->is('post')) {

            $data = $this->request->getData();

            $stateLists = $this->States->find('list', ['keyField' => 'id', 'valueField' => 'name'])->where(['States.country_id' => $data['countryId']]);
            $this->set(compact('stateLists'));
        }
    }

    public function getCity() {
        $this->request->allowMethod(['post']);
        $this->loadModel('Cities');
        if ($this->request->is('post')) {

            $data = $this->request->getData();

            $cityLists = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'name'])->where(['Cities.state_id' => $data['stateId']]);
            $this->set(compact('cityLists'));
        }
    }

}
