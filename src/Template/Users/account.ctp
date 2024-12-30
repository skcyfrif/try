
<section class="dash-bord-page" >
    <div class="container" >
        <div class="row">
            <div class="col-sm-3">
                <?= $this->element('user/user_menu'); ?>
            </div>
            <div class="col-sm-9">
                <div class="profile-content">

                    <ul class="nav nav-tabs" role="tablist" style="width: 100%;">
                        <li class="nav-item">
                            <a class="nav-link active show " href="#profile" role="tab" data-toggle="tab">Update Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#update_password" role="tab" data-toggle="tab">Update Password</a>
                        </li>
                       
                    </ul>
                    <div class="tab-content mt-4" style="width: 100%;">
                        <div role="tabpanel" class="tab-pane fade in active show" id="profile">

                            <?= $this->Form->create('', ['class' => "form", 'id' => "account_form", 'type' => 'file']); ?>
                            <div class="row form-group">

                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" value="<?= !empty($user_details->first_name) ? $user_details->first_name : ''; ?>" >
                                </div>

                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" value="<?= !empty($user_details->last_name) ? $user_details->last_name : ''; ?>">
                                </div>
                            </div>

                            <div class=" row form-group">
                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control disabled"  id="email" placeholder="you@email.com" disabled value="<?= $this->getRequest()->getSession()->read('Auth.User.email'); ?>">
                                </div>

                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <label for="phone"><h4>Phone number</h4></label>
                                    <input type="text" class="form-control" name="phone_number" id="phone" placeholder="enter phone" value="<?= !empty($user_details->phone_number) ? $user_details->phone_number : ''; ?>">
                                </div>

                            </div>
                            <div class="row form-group">

                                <div class="col-sm-12 col-md-12">
                                    <label><h4>Profile Photo</h4></label>
                                    <input type="file" class="form-control-flile" name="file">
                                    <?php
                                    if (!empty($user_details->photo)) {
                                        echo "<img src='" . HTTP_ROOT . $user_details->path . $user_details->photo . "' alt='pic' width='150' style='margin-top:10px;'>";
                                    }
                                    ?>
                                </div>  
                            </div> 

                            <div class=" row form-group">
                                <div class="col-sm-6 col-lg-6 col-md-6 teacher-file">
                                    <label for="country"><h4>Country</h4></label>
                                    <?= $this->Form->select('country', $countryListings, ['class' => "form-control", 'label' => false, 'kl_virtual_keyboard_secure_input' => "on", 'empty' => 'Select country', 'onchange' => 'getStates(this.value)', 'required' => "required", 'style' => 'padding: 0px 0px 0px 11px;', 'value' => !empty($user_details->country) ? $user_details->country : '']); ?>  
                                </div>

                                <div class="col-sm-6 col-lg-6 col-md-6 teacher-file" id='state-id'>
                                    <label for="state"><h4>State</h4></label>
                                    <?= $this->Form->select('state', !empty($stateLists) ? $stateLists : [], ['class' => "form-control", 'label' => false, 'kl_virtual_keyboard_secure_input' => "on", 'empty' => 'Select state', 'onchange' => 'getCityDetails(this.value)', 'required' => "required", 'style' => 'padding: 0px 0px 0px 11px;', 'value' => !empty($user_details->state) ? $user_details->state : '']); ?>  
                                </div>

                            </div>
                            <div class=" row form-group">
                                <div class="col-sm-6 col-lg-6 col-md-6 teacher-file"  id='city_id'>
                                    <label for="city"><h4>City</h4></label>
                                    <?= $this->Form->select('city', !empty($cityListsx) ? $cityListsx : [], ['class' => "form-control", 'label' => false, 'kl_virtual_keyboard_secure_input' => "on", 'empty' => 'Select state', 'required' => "required", 'style' => 'padding: 0px 0px 0px 11px;', 'value' => !empty($user_details->city) ? $user_details->city : '']); ?>  

                                </div>

                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <label for="street_no"><h4>Street No</h4></label>
                                    <input type="text" class="form-control"  id="street_no" name="street_no" placeholder="Enter street no"  value="<?= !empty($user_details->street_no) ? $user_details->street_no : ''; ?>">
                                </div>
                            </div>
                            <div class=" row form-group">
                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <label for="zip_code"><h4>Zip Code</h4></label>
                                    <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Enter zip code" value="<?= !empty($user_details->zip_code) ? $user_details->zip_code : ''; ?>">
                                </div>

                            </div>


                            <div class="row form-group" >
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <!--<button class="btn btn-lg reset" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                </div>
                            </div>
                            <?= $this->Form->end(); ?>
                        </div>

                        <div role="tabpanel" class="tab-pane fade in" id="update_password">

                            <?= $this->Form->create('', ['type' => 'file', 'class' => 'form', 'id' => 'password_form', 'url' => ['action' => 'passwordUpdate']]); ?>
                            <div class="row form-group">
                                <div class="col-sm-12">
                                    <label><h4>New Password</h4></label>
                                    <input type="password" class="form-control"  placeholder="Enter new password" name="password" id="password">
                                </div>
                                <div class="col-sm-12">
                                    <label><h4>Confirm Password</h4></label>
                                    <input type="password" class="form-control"  placeholder="Enter password again" name="confirm_password" >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success mt-2">Change Password</button>
                            <?= $this->Form->end(); ?>

                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery.validator.addMethod("noSpace", function (value, element) {
        return value.indexOf(" ") < 0 && value != "";
    }, "No space please and don't leave it empty");
    $('#password_form').validate({
        rules: {
            password: {
                required: true,
                noSpace: true,
            },
            confirm_password: {
                required: true,
                noSpace: true,
                equalTo: "#password"
            },
        },
        errorElement: 'span',
        errorClass: 'error text-danger',

    });


    $('#account_form').validate({
        rules: {
            first_name: {
                required: true,
                noSpace: true,
            },
            last_name: {
                required: true,
                noSpace: true,
            },
            address: {
                required: true,
                minlength: 5,
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10
            },
            file: {
                extension: "jpg|jpeg|png|gif|JPEG|JPG|PNG|GIF"
            },

        },
        messages: {
            first_name: "Please enter First Name",
            last_name: "Please enter Last Name",
            address: "Please enter Address",
            phone_number: {
                required: "Please enter phone number",
            },
            file: {
                extension: "jpg|jpeg|png|gif only allowed"
            },
        },
        errorElement: 'span',
        errorClass: 'error text-danger',
    });

    function getStates(dataget) {
        var url = '<?php echo HTTP_ROOT ?>';

        if (dataget) {
            $.ajax({
                type: 'POST',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-CSRF-Token',<?= json_encode($this->request->getParam('_csrfToken')); ?>);
                },
                data: {countryId: dataget},
                url: url + 'ajaxs/get_state/',
                success: function (response) {
                    if (response) {
                        //alert(response);
                        $('#state-id').html(response)
                    }
                },
                dataType: 'html'
            });
        }


    }

    function getCityDetails(dataget) {
        var url = '<?php echo HTTP_ROOT ?>';
        if (dataget) {
            $.ajax({
                type: 'POST',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-CSRF-Token',<?= json_encode($this->request->getParam('_csrfToken')); ?>);
                },
                data: {stateId: dataget},
                url: url + 'ajaxs/get_city/',
                success: function (response) {
                    if (response) {
                        $('#city_id').html(response)
                    }
                },
                dataType: 'html'
            });
        }
    }

</script>