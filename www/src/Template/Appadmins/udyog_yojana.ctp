<script src="<?= HTTP_ROOT; ?>js/ck/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

      $(document).on('click', '.add_field', function () {
         $('<input type="text" placeholder="Name" class="input name" id="fname" name="fname[]" value=""> <input type="text" placeholder="Age"  id="fage"class="input age" name="fage[]" value=""> <input type="text" placeholder="Gender" class="input gender" id="fgender" name="fgender[]" value=""> <input type="text" placeholder="Relation" class="input rel" id="frelation" name="frelation[]" value=""> ').insertAfter('.input:last');
       
      });
      </script>
       <script>
      $(document).ready(function () {
         // $('#example').DataTable();
      });
      </script>
       <style>
      .all-inq-body .inq-form-body {
         margin: 30px auto 50px auto;
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
  
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Udyog Yojana </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm- right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Udyog Yojana </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="all-inq-body">
      <div class="inq-form-body">
        <!-- <form method="post" id="register" name="registerform"> -->
      <?= $this->Form->create('udyo_yojana', [ "name"=>"registerform", "id" => "register",'method' => 'post','type'=>"file"]); ?> 
            <div class="inq-client-details">
               <div class="inq-details-group">
                  <label>Udyog Name</label>
                  <input type="text" placeholder="Name" name="udyog_name" id="udyog_name" class="form-control" required value="<?php 
                  if(!empty($getData)) {
                     echo $getData->udyog_name;
                     } ?>">
                  <span class="udy_name" id="udy_name"></span>
               </div>
               <div class="inq-details-group">
                  <label>Udyogi Name</label>
                  <input type="text" placeholder="Name" name="udyogi_name" id="udyogi_name" class="form-control" required value="<?php if(!empty($getData)) {
                                    echo $getData->udyogi_name;
                                } ?>">
                  <span class="udi_name" id="udi_name"></span>
               </div>
               <div class="inq-details-group">
                  <label>Contact Number</label>
                  <input type="text" placeholder="Number" name="contact_no" id="contact_no" class="form-control" required value="<?php if(!empty($getData)) {
                                    echo $getData->contact_no;
                                } ?>">
                  <span class="tel_no" id="tel_no"></span>
               </div>
               <div class="inq-details-group">
                  <label>Address</label>
                  <input type="text" placeholder="Address" name="address" id="address" class="form-control" required value="<?php if(!empty($getData)) {
                                    echo $getData->address;
                                } ?>">
                  <span class="add_name" id="add_name"></span>
               </div>
               
            </div>
            <h1>My Family </h1>
            <?php if(!empty($getData->familys)) { 
            foreach($getData->familys as $key => $data){ ?>
               <input type="text" placeholder="Name" class="input name" id="fname" name="fname[]" value="<?php if(!empty($data)){
                            echo $data->fname;
                } ?>">
               <span class="fam_name" id="fam_name"></span>
               <input type="text" placeholder="Age" class="input age" id="fage" name="fage[]" value="<?php if(!empty($data)){
                     echo $data->fage;
                } ?>">
               <span class="fam_age" id="fam_age"></span>
               <input type="text" placeholder="Gender" class="input gender" id="fgender" name="fgender[]" value="<?php if(!empty($data)){
                                    echo $data->fgender;
               }?>">
               <span class="fam_gender" id="fam_gender"></span>
               <input type="text" placeholder="Relation" class="input rel" id="frelation" name="frelation[]" value="<?php if(!empty($data)){
                            echo $data->frelation;
               }?>">
               <span class="fam_rel" id="fam_rel"></span>
<?php } } else { ?>
<input type="text" placeholder="Name" class="input name" id="fname" name="fname[]" value="">
               <span class="fam_name" id="fam_name"></span>
               <input type="text" placeholder="Age" class="input age" id="fage" name="fage[]" value="">
               <span class="fam_age" id="fam_age"></span>
               <input type="text" placeholder="Gender" class="input gender" id="fgender" name="fgender[]" value="">
               <span class="fam_gender" id="fam_gender"></span>
               <input type="text" placeholder="Relation" class="input rel" id="frelation" name="frelation[]" value="">
               <span class="fam_rel" id="fam_rel"></span>
               <?php } ?>
            <button type="button" class="add_field">Add More</button>
            
            <!-- <button type="submit" class="submit_btn">Submit</button> -->
          

            <div class="form-group">
               <label for="insurancetype">Insurance covered</label>
               <select class="form-control" name="insurance" id="insurance">
               <option> Select Insurance</option>
               <option value="1" <?php if (!empty($getData) && ($getData->insurance == 1)){
                     echo "selected";  } ?>>Yes</option>
             <option value="0"<?php if (!empty($getData) && ($getData->insurance == 0)){
                     echo "selected";  } ?>>No</option>
             
               </select>
               <span class="insurance_select" id="insurance_select"></span>
            </div>
            <div class="form-group"> 
                  
                    <div>
                    <?php if(isset($getData->logo) && $getData->logo != ''){?> 
                     <img src="<?= HTTP_ROOT .'webroot/img/uploads/' . $getData->logo ?>"> 
                    <a  href="<?= HTTP_ROOT .'appadmins/udyog_yojana/removeimg/' . $getData->id; ?>" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a> </div>  
                    <?php }else { ?>
                     <input type="file" id="logo"  class="form-control" name="logo" required>
                        <!-- <a href="<?= HTTP_ROOT . 'appadmins/udyog_yojana/showimg/' .$getData->id; ?>" class="btn btn-success" title="show"><i class="fa fa-check"></i></a> -->
                        <?php }?>
                    </div>
            <?php if(!empty($getData->id)){?>
            <input type="submit" name="update" id="update"  class="sub-bbt" value="update" >
           <?php }else { ?>
            <input type="submit" name="submit" id="submit"  class="sub-bbt" value="submit" >
            <?php } ?>
           
            <?= $this->Form->end(); ?>

    
      </div>
   </section>
    
    
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listing Udyog </h3>                        
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>                                   
                                    <th>Sl. no.</th>
                                    <th>Udyog Name</th>
                                    <th>Udyogi Name</th>
                                    <th>Contact No</th>
                                    <th>Address</th>
                                    <th>Insurance</th>
                                    <th>File</th>
                                    <th>Family Details</th>
                                    <th>Edit</th>
                                    <th> Delete</th>
                                
                                </tr>
                            </thead>
                            <tbody id="list">
                                <?php
                                foreach ($allData as $key => $data) { 
                                    ?>
                                    <tr  id="arrayorder_<?php echo $data->id; ?>" class="message_box ui-sortable-handle">

                                        <td valign="middle"><?= $key + 1; ?></td>
                                        <td valign="middle"><?= $data->udyog_name; ?></td>
                                        <td valign="middle"><?= $data->udyogi_name; ?></td>
                                        <td valign="middle"><?= $data->contact_no; ?></td>
                                        <td valign="middle"><?= $data->address; ?></td>
                                        <td valign="middle"><?php  if($data->insurance == 1){
                                            echo "Yes"; ?>
                                       <?php } else{
                                            echo "No"; 
                                        } ?></td>
                                        <td valign="middle"><?php if(!empty($data->logo)){ 
                                          echo $this->Html->image('/webroot/img/uploads/' . $data->logo, array('height' => '40', 'width' => '40', 'fullBase' => true, 'plugin' => false));
                                         } else{
                                          echo $this->Html->image('/webroot/img/defult.png' . $data->logo, array('height' => '40', 'width' => '40', 'fullBase' => true, 'plugin' => false));
                                         } ?></td>
                                        
                                                      <td valign="middle">
                                            <a href="<?= HTTP_ROOT . 'appadmins/familys/details/' . $data->id; ?>" class="btn btn-primary" title="Family"><i class="fa fa-user"></i></a></td>
                                            <td valign="middle"><a href="<?= HTTP_ROOT . 'appadmins/udyog_yojana/edit/' . $data->id; ?>" class="btn btn-primary" title="Edit"><i class="fa fa-edit"></i></a></td>
                                            <td valign="middle"><a onclick="return confirm('Are you sure want to delete?');" href="<?= HTTP_ROOT . 'appadmins/udyog_yojana/delete/' . $data->id; ?>" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a></td>
                                                                            
                                        
                                    </tr>
<?php } ?>
                            </tbody>
                    </table>
                </div>
            </div>
            
       </div>
 </div>
 
    
</section>
</div>


