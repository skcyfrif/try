<script src="<?= HTTP_ROOT; ?>js/ck/ckeditor/ckeditor.js"></script>

  
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Family Group</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Family Details</li>
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
                        <h3 class="card-title">Listing Family </h3>                        
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>                                   
                                    <th>Sl. no.</th>
                                    <th>User_id</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Relation</th>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody id="list">
                                <?php
                                foreach ($allData as $key => $data) { 
                                    ?>
                                    <tr  id="arrayorder_<?php echo $data->id; ?>" class="message_box ui-sortable-handle">

                                        <td valign="middle"><?= $key + 1; ?></td>
                                        <td valign="middle"><?= $data->user_id; ?></td>
                                        <td valign="middle"><?= $data->fname; ?></td>
                                        <td valign="middle"><?= $data->fage; ?></td>
                                        <td valign="middle"><?= $data->fgender; ?></td>
                                        <td valign="middle"><?= $data->frelation; ?></td>
                      
                                      
                                        
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


