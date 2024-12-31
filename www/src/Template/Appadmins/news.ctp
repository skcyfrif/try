<script src="<?= HTTP_ROOT; ?>js/ck/ckeditor/ckeditor.js"></script>
<style>
 

    </style>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>News</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">News Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">
                   
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?= $this->Form->create('news', [ "name"=>"newsform", "id" => "news",'method' => 'post','type'=>"file"]); ?>                      
                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="site_url" class=" form-control-label">Select Country</label>
                            </div>
                            <div class="col-6 col-md-9">
                            <select class="form-control" name="countries_id" id="country">
                    <option value="">--Select--</option>
                  <?php foreach($countryData as $key=> $data) { ?>        
                    <option value="<?php echo $data['id']; ?>"<?php if (!empty($getData) && ($getData->countries_id == $data['id'])){
                     echo "selected";  } ?>><?php echo $data['country_name']; ?></option>
                 <?php }?>
                
             </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="categories" class=" form-control-label">Select Categories</label>
                            </div>
                            <div class="col-6 col-md-9">
                            <?php
                            foreach($categoriesData as $key=> $cdata) { ?>
              
               <input type="checkbox" id="categories_id" name="categories_id" value="<?php echo $cdata['id'] ;?>" <?php echo(!empty($getData) && $getData->categories_id == $cdata['id'])?'checked':''; ?>>
                <label ><?php echo $cdata['cat_name']; ?> </label>
                  <?php } ?>
                
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="topic" class=" form-control-label">Topic</label>
                            </div>
                            <div class="col-6 col-md-9">
                                <input type="text" id="topic"  class="form-control"  name="topic" required value="<?php
                                if (!empty($getData)) {
                                    echo $getData->topic;
                                }
                                ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="description" class=" form-control-label"> Full Description</label>
                            </div>
                            <div class="col-6 col-md-9">
                                <textarea id="description"  class="form-control" name=" full_description" required rows="5"><?php
                                    if (!empty($getData)) {
                                        echo $getData->full_description;
                                    }
                                    ?></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="description" class=" form-control-label"> Short Description</label>
                            </div>
                            <div class="col-6 col-md-9">
                                <textarea id="description"  class="form-control" name="short_description" required rows="5"><?php
                                    if (!empty($getData)) {
                                        echo $getData->short_description;
                                    }
                                    ?></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                        <div class="col-12 col-md-3">
                                <label for="image" class=" form-control-label">Image</label>
                            </div>
                            <div class="col-6 col-md-9">
                            <?php if(isset($getData->image) && $getData->image != ''){?> 
                     <img src="<?= HTTP_ROOT .'webroot/img/uploads/' . $getData->image ?>">
                     <?php }else { ?>
                        <input type="file" id="image"  class="form-control" name="image" required>
                        <?php } ?>
                            </div>
                        </div>

                        <script type="text/javascript">
                            CKEDITOR.replace('description');
                        </script>
                            <?php if(!empty($getData->id)){?>
        <button type="submit" class="btn btn-success" name="submit" >Update</button>
        <?php }else { ?>
          <button type="submit" class="btn btn-success" name="submit" >Submit</button>
          <?php } ?>

                        
<?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script>
    $('#banner_form').validate({
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });

    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>

