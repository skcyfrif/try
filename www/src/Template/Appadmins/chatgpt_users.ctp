<script src="<?= HTTP_ROOT; ?>js/ck/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Esl App User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ESL App Usrer</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
     
    
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listing User </h3>                        
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>                                   
                                    <th>Sl. no.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Password</th>
                                    <th>Points Left</th>
                                    <th>Popup</th>
                                </tr>
                            </thead>
                            <tbody id="list">
                                <?php
                                foreach ($allData as $key => $data) { 
                                    ?>
                                    <tr  id="arrayorder_<?php echo $data->id; ?>" class="message_box ui-sortable-handle">

                                        <td valign="middle"><?= $key + 1; ?></td>
                                        <td valign="middle"><?= $data->name; ?></td>
                                        <td valign="middle"><?= $data->email; ?></td>
                                        <td valign="middle"><?= $data->phone; ?></td>
                                        <td valign="middle"></td>
                                        <td valign="middle"><?= $data->points_left; ?></td>
                                        <td valign="middle">  <a href="<?= HTTP_ROOT . 'appadmins/paypal/id/' . $data->id; ?>" class="btn btn-primary" title="Payment">Payment</a>                        
                                        </td>
                                        
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


