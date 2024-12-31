<section class="all-inq-body">
      <div class="inq-form-body">
        <!-- <form method="post" id="register" name="registerform"> -->
      <?= $this->Form->create('index', [ "name"=>"registerform", "id" => "register",'method' => 'post','type'=>"file"]); ?> 
            <div class="inq-client-details">
               <div class="inq-details-group">
                  <label>Udyog Name</label>
                  <input type="text" placeholder="Name" name="udyog_name" id="udyog_name" class="form-control" required>
                  <span class="udy_name" id="udy_name"></span>
               </div>
               <div class="inq-details-group">
                  <label>Udyogi Name</label>
                  <input type="text" placeholder="Name" name="udyogi_name" id="udyogi_name" class="form-control" required>
                  <span class="udi_name" id="udi_name"></span>
               </div>
               <div class="inq-details-group">
                  <label>Contact Number</label>
                  <input type="text" placeholder="Number" name="contact_no" id="contact_no" class="form-control" required>
                  <span class="tel_no" id="tel_no"></span>
               </div>
               <div class="inq-details-group">
                  <label>Address</label>
                  <input type="text" placeholder="Address" name="address" id="address" class="form-control" required>
                  <span class="add_name" id="add_name"></span>
               </div>
               
            </div>
            <h1>My Family </h1>
            
               <input type="text" placeholder="Name" class="input name" id="fname" name="fname[]" value="">
               <span class="fam_name" id="fam_name"></span>
               <input type="text" placeholder="Age" class="input age" id="fage" name="fage[]" value="">
               <span class="fam_age" id="fam_age"></span>
               <input type="text" placeholder="Gender" class="input gender" id="fgender" name="fgender[]" value="">
               <span class="fam_gender" id="fam_gender"></span>
               <input type="text" placeholder="Relation" class="input rel" id="frelation" name="frelation[]" value="">
               <span class="fam_rel" id="fam_rel"></span>


            <button type="button" class="add_field">Add More</button>
            
            <!-- <button type="submit" class="submit_btn">Submit</button> -->
          

            <div class="form-group">
               <label for="insurancetype">Insurance covered</label>
               <select class="form-control" name="insurance" id="insurance">
                  <option value="">-Select type-</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                  
               </select>
               <span class="insurance_select" id="insurance_select"></span>
            </div>
            <div class="form-group">
            <input type="file" id="logo"  class="form-control" name="logo" required>
            </div>
            <input type="submit" name="submit" id="submit"  class="sub-bbt" value="Submit" >
           
           
            <?= $this->Form->end(); ?>

    
      </div>
   </section>
   <!--ALL INQUERY FORM-->
   <!--SCRIPTS-->
   <script src="assets/jquery/jquery.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/js/script.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

   <script>
      $(document).ready(function () {
         // $('#example').DataTable();
      });  
      // $(function(){
      //    $("form[name='registerform']").validate({
      //       rules: {
      //          udyog_name:"required",
      //          udyogi_name:"required",
      //          contact:"required",
      //          address:"required",
      //          "fname[]":"required",
      //          "fage[]":"required",
      //          "fgender[]":"required",
      //          "frelation[]":"required",
      //          insurance:"required",
      //          udyog_name: {
      //             required: true               
                  
      //          },
      //          udyogi_name:{
      //             required: true
      //          },
      //          contact_no: {
      //             required: true
      //          },
      //          address: {
      //             required: true
      //          },
      //          fname:{
      //             required: true
      //          },
      //          fage: {
      //             required: true
      //          },
      //          fgender:{
      //             required: true
      //          },
      //          frelation: {
      //             required: true
      //          },
      //          insurance:{
      //             required: true
      //          }
      //       },
      //       messages: {
      //          udyog_name: "Udyog name is required.",
                     
               
      //          udyogi_name:"udyogi name required.",
      //          contact_no: 
      //             "Contact no. is required.",
            
      //          address: 
      //             "Address is required.",
               
      //          "fname[]":
      //             "Name is required.",
               
      //          "fage[]": 
      //             "Age is required.",
               
      //          "fgender[]": 
      //             "Gender is required.",
               
      //          "frelation[]": 
      //             "Relationship is required.",
               
      //          insurance: 
      //             "Insurance is required."
               
      //       },
      //       submitHandler: function (form){
      //          form.submit();
      //       }
      //    });
      // });
   
 
//    function validate(){
//    var udyog_name = $('#udyog_name').val();
//    var udyogi_name = $('#udyogi_name').val();
//    var contact_no = $('#contact_no').val();
//    var address = $('#address').val();
//    var insurance = $('#insurance').val();
//    var phone_no = /^\d{10}$/;
//    var regex = /^[a-zA-Z]+$/;
//    var address_regex = /^[0-9a-zA-Z]+$/;
//    var fname = $('.name').val();
//    var fage = $('.age').val();
//    var fgender = $('.gender').val();
//    var frelation = $('.rel').val();
//    var filename = $('#filename').val();
//    var form_data = new FormData();
//    form_data.append("filename",filename);
//    $('#udy_name').text('');
//    $('#udi_name').text('');
//    $('#udi_name').text('');
//    $('#udi_name').text('');
//    $('#fam_name').text('');
//    $('#fam_age').text('');
//    $('#fam_gender').text('');
//    $('#fam_rel').text('');
//    $('#insurance_select').text('');


//   if ( !udyog_name.match(regex)|| udyog_name.length == 0) {
//               $('#udy_name').text("* For your name please use alphabet *"); 
//               $("#udyog_name").focus();
//               return false;
//   }
//    else if (!(udyogi_name.length >= 6 && udyogi_name.length <= 12)||!udyogi_name.match(regex) || udyogi_name.length == 0)  {
//       $('#udi_name').text("* Please enter between 6 and 14 characters and alphabet *");
   
//       $("#udyogi_name").focus();
//        return false;
//    }
//    else if (!contact_no.match(phone_no)) {
//       $('#tel_no').text("* For contact no must be 10 digits *");
//       $("#contact_no").focus();
//        return false;
//    }
//    else if (!address.match(address_regex) || address.length == 0) {
//       $('#add_name').text("* For Address please use numbers and letters *");
//       $("#address").focus();
//        return false;
//    }
//    else if( !fname.match(regex)|| fname.length == 0) {
//                $('#fam_name').text("* For your name please use alphabet *"); 
//                $("#fname").focus();
//                return false;
//    }
//    else if(!(fage > 1 && fage < 100)){
//       $('#fam_age').text("Please provide age");
//       $("#fage").focus();
//        return false;
//    } else if(fgender == ""){
//       $('#fam_gender').text("Please provide your gender");
//       $("#fgender").focus();
//        return false;
//    }else if(frelation == ""){
//       $('#fam_rel').text("Please fill your relationship");
//       $("#frelation").focus();
//        return false;
//    }
//    else if (insurance == "") {
//       $('#insurance_select').text("* Please fill up the insurace field *");
//       $("#insurance").focus();
//        return false;
//    }

//    else {
      // console.log(new FormData($(this)[0]));
      // var postData = $('#register').serializeArray();
      // postData.append("file", logo.files[0]);console.log(postData);
//       $.ajax({
//             type: "POST",
//             url: $('#register').attr("action"),
//             dataType: '',
//             data: form_data,
//             contentType: false,
//             processData: false,
//             success:function(data, textStatus, jqXHR) {
//                $("#simple-msg").html('<p>Thanks for your request - we will be in touch soon!</p>');
//             },
//             error: function(jqXHR, textStatus, errorThrown) {
//                $("#simple-msg").html('<p>Message failed to send. Please try again!</p>');
//             }
//       });
        
//       alert("Form Submitted Successfuly!");
//   return true;
  //}
  //}

</script>
<script>

      $(document).on('click', '.add_field', function () {
         $('<input type="text" placeholder="Name" class="input name" id="fname" name="fname[]" value=""> <input type="text" placeholder="Age"  id="fage"class="input age" name="fage[]" value=""> <input type="text" placeholder="Gender" class="input gender" id="fgender" name="fgender[]" value=""> <input type="text" placeholder="Relation" class="input rel" id="frelation" name="frelation[]" value=""> ').insertAfter('.input:last');
       
      });
      </script>


  

   <style>
      .all-inq-body .inq-form-body {
         margin: 40px auto 50px auto;
         padding: 30px;
         max-width: 750px;
         background: #fff;
         border-radius: 10px;
         box-shadow: 0 0 5px rgb(0 0 0 / 18%);
      }

      .inq-client-details .inq-details-group {
         margin: 0 10px 10px 0;
         padding: 0;
         width: 48%;
         float: left;
      }

      form {
         padding: 20px;
      }

      input {
         width: 22%;
         background: #f7f7f7;
         border: #d0c8c8 solid 1px;
         padding: 7px;
         border-radius: 5px;
         margin: 10px 15px 20px 0;
         font-size: 15px;
      }

      button.add_field {
         background: #f7f7f7;
         padding: 7px;
         border: #d9d3d4 solid 1px;
         border-radius: 5px;
         float: right;
         margin-top: 30px;
         margin-right: 30px;
      }
      button.submit_btn {
        background: #000;
        font-size: 14px;
        color: #fff;
         padding: 10px 30px;
         border: #d9d3d4 solid 1px;
         border-radius: 5px;
         float: right;
         margin-top: 30px;
         margin-right: 30px;
      }

      .all-inq-body h1 {
         margin: 0;
         margin-right: 20px;
         padding: 18px 0;
         font-size: 20px;
         font-weight: 600;
         color: #303032;
      }

      .form-group .form-control {
         width: 48%;
      }

      .form-group {
         margin: 0 20px;
      }

      .inq-details-group label {
         font-weight: 500;
      }
   </style>
