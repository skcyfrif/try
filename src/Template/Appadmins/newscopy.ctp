<script src="<?= HTTP_ROOT; ?>js/ck/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function () {
      
      });
      </script>
<style>
      .all-inq-body .inq-form-body {
         margin: 20px 20px 30px 20px;
         padding: 30px;
         max-width: 100%;
         background: #fff;
         border-radius: 10px;
         box-shadow: 0 0 5px rgb(0 0 0 / 18%);
      }
      .details .details-group {
        padding: 20px;
      }
      .form-box{
    padding: 10px;
    width:100%;
    
    }
    .clear {
      clear: both;
    }
    .form-box-2 {
    padding: 10px;
    float: left;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    width: 30%;
}
.form-box-2 input[type="checkbox"] {
    margin-right: 10px;
}
      .form-box textarea{
        width:100%;
        float: left;
      }
      label{
      width: 100%;
      float: left;
      color: #000;
      font-size: 15px;
      margin-bottom: 10px;
    }
    .form-box input[type="submit"]{

      float: left;
      padding: 5px 15px;
      margin: 10px 10px;
      color: white;
      background: black;
      border: none;
      cursor: pointer;

    }
    /* <section class="all-inq-body">
      <div class="inq-form-body"> */

      
      </style>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>News </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">News</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                  
                <?= $this->Form->create('news', [ "name"=>"newsform", "id" => "news",'method' => 'post','type'=>"file"]); ?>
                    
                <div class="details">
               <div class="details-group">
                  <label>Select Country </label>
                  <select class="form-control" name="countries_id" id="country">
                    <option value="">--Select--</option>
                  <?php foreach($countryData as $key=> $data) { ?>        
                    <option value="<?php echo $data['id']; ?>"<?php if (!empty($getData) && ($getData->countries_id == $data['id'])){
                     echo "selected";  } ?>><?php echo $data['country_name']; ?></option>
                 <?php }?>
                
             </select>
         </div>
            <div class="form-box">
            <label name="categories_id">Select Category</label>
            <?php foreach($categoriesData as $key=> $cdata) { ?>
               <div class="form-box-2">
               <input type="checkbox" id="categories_id" name="categories_id" value="<?php echo $cdata['id'] ;?>" <?php echo(!empty($getData) && $getData->categories_id == $cdata['id'])?'checked':''; ?>>
                <label ><?php echo $cdata['cat_name']; ?> </label>
                  </div>
                  <?php } ?>
              
    </div>
    <div class="clear"></div>
    <div class="form-box">  
                <label> Topic </label>
                <input type="text" id="topic" name="topic"value="<?php if(!empty($getData)) {
                                    echo $getData->topic;
                                } ?>">
    </div>
    <div class="form-box">  
                <label> Short Description </label>
                <textarea name="short_description" id="short_description" value="<?php if(!empty($getData)) {
                                    echo $getData->short_description;
                                } ?>"></textarea>
    </div>
    <div class="form-box">
                <label> Full Description </label>
                <textarea name="full_description" id="full_description" value="<?php if(!empty($getData)) {
                                    echo $getData->full_description;
                                } ?>"></textarea>
    </div>
    <div class="form-box">
    <label> Image </label>
        <input type="file" name="image">
    </div>
    <div class="form-box">
    <?php if(!empty($getData->id)){?>
            <input type="submit" name="update" id="update"  class="sub-bbt" value="update" >
           <?php }else { ?>
            <input type="submit" name="submit" id="submit"  class="sub-bbt" value="submit" >
            <?php } ?>
</div>
           </div>

</div>
    
    <?= $this->Form->end(); ?>
                  
       </div>
    </div>
  </div>
</div>
 </section>
</div>
