<script src="<?= HTTP_ROOT; ?>js/ck/ckeditor/ckeditor.js"></script>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>School Registration</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">School Registration</li>
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
                        <h3 class="card-title">Add/Edit Registration </h3>                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?= $this->Form->create('', ['type' => 'post']); ?>                      
                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="site_url" class=" form-control-label">Title</label>
                            </div>
                            <div class="col-6 col-md-9">
                                <input type="text" id="site_url"  class="form-control" name="title" required value="<?php
                                if (!empty($getData)) {
                                    echo $getData->title;
                                }
                                ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="no_year" class=" form-control-label">Year</label>
                            </div>
                            <div class="col-6 col-md-9">
                                <select id="no_year"  class="form-control"  name="no_year" required>
                                    <?php foreach (range(1, 10) as $cntr) { ?>
                                        <option value="<?= $cntr; ?>" <?php if (!empty($getData) && ($getData->price == $cntr)) {
                                        echo "selected";
                                    } ?>><?= $cntr; ?> Year</option>
<?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="price" class=" form-control-label">Price</label>
                            </div>
                            <div class="col-6 col-md-9">
                                <input type="number" id="price"  class="form-control" step="0.50" name="price" required value="<?php
                                if (!empty($getData)) {
                                    echo $getData->price;
                                }
                                ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="description" class=" form-control-label">Description</label>
                            </div>
                            <div class="col-6 col-md-9">
                                <textarea id="description"  class="form-control" name="description" required rows="5"><?php
                                    if (!empty($getData)) {
                                        echo $getData->description;
                                    }
                                    ?></textarea>
                            </div>
                        </div>

                        <script type="text/javascript">
                            CKEDITOR.replace('description');
                        </script>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="<?= HTTP_ROOT; ?>appadmins/membership" class="btn btn-danger">Cancel</a>
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

