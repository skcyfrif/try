<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo HTTP_ROOT; ?>appadmins/dashboard" class="brand-link" style="text-align: center;">
            <img src="<?php echo HTTP_ROOT; ?>img/logo.png" alt="Logo" class="brand-image img elevation-3" style="opacity: .8;float:none !important;width: 50%;max-height: inherit;">
    <!--        <span class="brand-text font-weight-light">Classified</span>-->
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?= $this->Form->create('', ['type' => "post", 'role' => "form", 'id' => "LoginForm"]); ?>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <p class="mb-1">
                        <a href="<?= HTTP_ROOT; ?>admin-forgot-password">I forgot my password</a>
                    </p>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
            <?= $this->Form->end(); ?>



        </div>
        <!-- /.login-card-body -->
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {

        $('#LoginForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },

            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a vaild email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                }
            },
            errorElement: 'span',
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
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