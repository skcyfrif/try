<script src="<?= HTTP_ROOT; ?>js/ck/ckeditor/ckeditor.js"></script>

  
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Paypal User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Paypal Usrer</li>
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
                        <h3 class="card-title">Listing Payment </h3>                        
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>                                   
                                    <th>Sl. no.</th>
                                    <th>User_id</th>
                                    <th>Amount</th>
                                    <th>Created</th>
                                    <th>Transaction</th>
                                    <th>Points</th>
                                    <th>Payment Status</th>
                                    <th>Refund</th>
                                    
                                </tr>
                            </thead>
                            <tbody id="list">
                                <?php
                                foreach ($allData as $key => $data) { 
                                    ?>
                                    <tr  id="arrayorder_<?php echo $data->id; ?>" class="message_box ui-sortable-handle">

                                        <td valign="middle"><?= $key + 1; ?></td>
                                        <td valign="middle"><?= $data->user_id; ?></td>
                                        <td valign="middle"><?= $data->amount; ?></td>
                                        <td valign="middle"><?= $data->created; ?></td>
                                        <td valign="middle"><?= $data->transaction; ?></td>
                                        <td valign="middle"><?php if($data->amount == 5) {
                                            echo "500"; ?>
                                            <?php } else if($data->amount == 7){
                                                echo "1000";?>
                                           <?php } else if($data->amount == 10){
                                            echo "3000";?>
                                           <?php } else{
                                            echo "No points"; ?>
    <?php } ?> </td>
                                        <td valign="middle">                            
                                            <?php if ($data->payment_status == 0) {
                                                  echo "Pending"; ?>

                                                <a href="<?= HTTP_ROOT . 'appadmins/paypal/id/' . $data->id ; ?>"></a>
                                        
                                            <?php } else if ($data->payment_status == 1) { 
                                                echo "Paid";?>
                                                <a href="<?= HTTP_ROOT . 'appadmins/paypal/id/' . $data->id; ?>"></a>
                                                <?php } else {
                                                    echo "Refunded"; ?>
                                                    <a href="<?= HTTP_ROOT . 'appadmins/paypal/id/' . $data->id; ?>"></a>
    <?php } ?></td>
                                        <td valign="middle"><a onclick="return alert('Refund status');"  href="<?= HTTP_ROOT . 'appadmins/paypal/refund/' . $data->id; ?>" class="btn btn-primary" title="Refund">Refund</a></td>
                                                       
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


