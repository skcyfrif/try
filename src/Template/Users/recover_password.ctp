<section class="inner-bg login-signup-form" style="background:none;">
    <div class="container">
        <div class="row" style="float: left;width: 100%;">
            <div class="col-sm-6 offset-md-3" >
                <div class="login-form-box">
                    <h2>Reset your password!!</h2>
                    <p class="login-box-msg">You are only one step a way from your new password, reset your password now.</p>

                    <?= $this->Form->create('', ['type' => "post", 'role' => "form", 'id' => "changePasswordForm"]); ?>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="r_password">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                    </div>
                    <div class="row">
                        <div class="col-12 input-submit">
                            <button type="submit" class="btn btn-primary btn-block sub-bbt mb-4">Set password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <?= $this->Form->end(); ?>                    
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $('#changePasswordForm').validate({
        rules: {
            confirm_password: {
                required: true,
                equalTo: '#r_password',
            },
            password: {
                required: true,
                minlength: 5
            },

        },
        messages: {
            confirm_password: {
                required: "Please enter a confirm password",
                equalTo: "Your confirm password must be same as password"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            }
        },
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });

</script>
<style>
    span.error {
        color: red;
        position: absolute;
        font-size: 12px;
        bottom: -20px;
    }
    .input-group.mb-3 {
        margin-bottom: 25px !important;
    }
</style>