<section class="login-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-form-box recj">
                    <?= $this->Form->create('', ["accept-charset" => "utf-8", "id" => "signup", 'type' => 'POST']); ?>   >

                    <h2>Sign up now</h2>
                    <span class="fa-b-icon"><i class="fa fa-pencil"></i></span>
                    <div class="all-form-input">
                        <div class="row gulrow">
                            <div class="col-sm-6">
                                <div class="input-field sign-up-inp">
                                    <input type="text" class="phon-input" name="first_name" placeholder="First Name" id="first_name" required="">   
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-field sign-up-inp">
                                    <input type="text" class="phon-input" name="last_name" placeholder="Last Name" id="last_name" required="">   
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-field sign-up-inp">
                                    <input type="email" class="phon-input" name="email" placeholder="Email" id="signup_email" required="">   
                                </div>
                            </div>                                
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-field sign-up-inp">
                                    <input type="password" class="pass-word" name="password" placeholder="Password" id="password" required="">           
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-field sign-up-inp">
                                    <input type="password" class="pass-word" name="retypepassword" placeholder="Confirm-Password" id="retypepassword" required="">           
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-submit">
                        <input type="submit" class="sub-bbt" value="Sign up!" >   
                        <p>Do you have registered before?<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter">login</a></p>
                    </div>

                    <?= $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .ads-top{
        display:none;
    }
</style>
<script>
    $('#signup').validate({
        rules: {
            first_name: {
                required: true,
                minlength: 1
            },
            last_name: {
                required: true,
                minlength: 1
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: "<?= HTTP_ROOT; ?>ajaxs/ajaxCheckEmail",
                    type: "post",
                    beforeSend: function (xhr) { // Handle csrf errors
                        xhr.setRequestHeader('X-CSRF-Token',<?= json_encode($this->request->getParam('_csrfToken')); ?>);
                    },
                    data: {
                        email: function () {
                            return $("#signup_email").val();
                        }
                    },
                    dataType: 'json',
                },
            },
            password: {
                required: true,
            },
            retypepassword: {
                required: true,
                equalTo: "#password",
            },
        },
        messages: {
            fname: {
                required: "Enter your First name",
            },
            lname: {
                required: "Enter your Last name",
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address",
                remote: "Email Already in use"
            },
        },
        errorElement: 'div',
        errorClass: 'error text-danger text-left'

    });
</script>