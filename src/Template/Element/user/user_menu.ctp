<?php
$paramController = $this->request->getParam('controller');
$paramAction = $this->request->getParam('action');
$userData = $this->User->userData($this->getRequest()->getSession()->read('Auth.User.id'));
//if ($this->getRequest()->getSession()->read('Auth.User.type') != 3) {
//    exit;
//}
?>

<style>
    .form-control:disabled, .form-control[readonly] {
        background-color: #e9ecef !important;
        opacity: 1;
    }
    .header-sec {
        max-width: 100% !important;
        background: #525769;
    }
    header.header-small .header-sec{
        background: #fff;
    }
</style>
<div class="profile-sidebar">
    <div class="profile-userpic">
        <?php if (!empty($userData->user_detail->photo) && !empty($userData->user_detail->path)) { ?>
            <img src="<?php echo HTTP_ROOT . $userData->user_detail->path . $userData->user_detail->photo; ?>" class="img-responsive" alt="Profile picture">
        <?php } else { ?>
            <img src="<?= HTTP_ROOT; ?>img/no-img.jpg">
        <?php } ?>
    </div>

    <div class="profile-usertitle">
        <div class="profile-usertitle-name">
            <?= $this->getRequest()->getSession()->read('Auth.User.name'); ?>
        </div>
    </div>

    <div class="profile-usermenu">
        <ul class="nav">
            <li <?php
            if ($paramAction == "dashboard") {
                echo 'class="active"';
            }
            ?>>
                <a href="<?= HTTP_ROOT . 'dashboard'; ?>">                    
                    Overview </a>
            </li>

            <li <?php
            if ($paramAction == "account") {
                echo 'class="active"';
            }
            ?>>
                <a href="<?= HTTP_ROOT . 'account'; ?>">                   
                    Account Settings </a>
            </li>

            <li >
                <a class="text-danger" href="<?= HTTP_ROOT . 'logout'; ?>">
                    <i class="zmdi zmdi-alert-circle"></i>
                    Logout</a>
            </li>
        </ul>
    </div>
    <!-- END MENU -->
</div>
