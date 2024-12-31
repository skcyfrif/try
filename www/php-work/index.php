<!DOCTYPE html>
<html lang="en">
<head>
  <title>Check Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    *{
      margin: 0px;
      padding: 0px;
    }
    .container{
      width: 400px;
      margin: 50px auto;

    }
    .box{
      width: 100%;
      box-sizing: border-box;
      border: 1px solid #000;
      padding: 20px;
      float: left;
    }
    .form-box{
      width: 100%;
      float: left;
      margin-bottom: 20px;
    }
    label{
      width: 100%;
      float: left;
      color: #000;
      font-size: 20px;
      margin-bottom: 10px;
    }
    input[type="text"]{
      width: 100%;
      float: left;
      height: 40px;
      padding: 5px 10px;
      border: 1px solid #000;
    }
    input[type="button"]{
      float: right;
      padding: 5px 15px;
      margin: 10px 10px;
      color: white;
      background: black;
      border: none;
      cursor: pointer;

    }
    span{
      left: 12px;
      top: 40px;
      padding: 30px;
    }

  </style>
  
</head>
<body>
  

<div class="container">
  
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Check Email</button>
  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Email Check Here</h4>
        </div>
        <div class="modal-body">
        <div class="box">
    <form method="post">
    <div class="form-box">
      <label>Email Id</label>
      <input type="text" name="email" id="email" placeholder="Email">
      <span id="alert"></span>
      <input type="button" name="submit" value="Check" id="submit">
    
    </div>
    </form>
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!--                
                  <ul class="pagination">
                      <li class="paginate_button page-item previous disabled" id="example2_previous">
                     
                        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                      </li>
                      <li class="paginate_button page-item <?= $this->Paginator->hasPrev() ? '' : 'previous disabled' ?>" id="example2_previous">
                      <?php if ($this->Paginator->hasPrev()): ?>
        <a href="<?= $this->Paginator->prevUrl() ?>" aria-controls="example2" tabindex="0" class="page-link"><?= __('Previous') ?></a>
    <?php else: ?>
        <span class="page-link"><?= __('Previous') ?></span>
    <?php endif; ?>
</li>
                      <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                    </li>
                    <li class="paginate_button page-item ">
                      <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                    </li>
                    <li class="paginate_button page-item ">
                      <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                    </li>
                    <li class="paginate_button page-item ">
                      <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                    </li>
                    <li class="paginate_button page-item ">
                      <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                    </li>
                    <li class="paginate_button page-item ">
                      <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                    </li>
                   
                    <li class="paginate_button page-item <?= $this->Paginator->hasNext() ? '' : 'next disabled' ?>" id="example2_next">
    <?php if ($this->Paginator->hasNext()): ?>
        <a href="<?= $this->Paginator->nextUrl() ?>" aria-controls="example2" tabindex="0" class="page-link"><?= __('Next') ?></a>
    <?php else: ?>
        <span class="page-link"><?= __('Next') ?></span>
    <?php endif; ?>

</li>
    </ul> -->
                     <!-- <li class="paginate_button page-item next" id="example2_next">
                      <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                    </li> -->

                    
                          <!-- <option value="" <?php if (!empty($getData) && ($getData->building == 'Building-1')){
                     echo "selected";  } ?>>Building-1</option>                      
                     <option value="Building-2"<?php if (!empty($getData) && ($getData->building == 'Building-2')){
                      echo "selected";  } ?>>Building-2</option> 



                             <option value="1st floor" <?php if (!empty($getData) && ($getData->floor == '1st floor')){
                     echo "selected";  } ?>>1st floor</option>                      
                     <option value="2nd floor"<?php if (!empty($getData) && ($getData->floor == '2nd floor')){
                      echo "selected";  } ?>>2nd floor</option> 


                    <?php foreach ($this->Paginator->numbers() as $page): ?>
        <li class="paginate_button page-item <?= $page['active'] ? 'active' : '' ?>">
            <?php if ($page['url']): ?>
                <a href="<?= $page['url'] ?>" aria-controls="example2" data-dt-idx="<?= $page['page'] ?>" tabindex="0" class="page-link"><?= $page['text'] ?></a>
            <?php else: ?>
                <span class="page-link"><?= $page['text'] ?></span>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</div>
<script type="text/javascript">
    $(document).ready(function () {

         $('#submit').click(function(){
        var email = $('#email').val();
      if(email == ""){ 
          $('#alert').html('blank field');
         }else{
        
      $.ajax({
        method:"POST",
        url : "ajax.php",
        data:{email:email},
        success: function(data){
          $('#alert').html(data);       
        }
        
      });   

        }
       
    });
});
$("#register").validate({
         rules: {
            udyog_name: {
               required: true,
               regex: /^([a-z])([A-Z])$/,
               udyog_name: true
            },
            udyogi_name:{
               required: true,
            },
            contact_no: {
               required: true,
            },
            address: {
               required: true,
            },
            fname:{
               required: true,
            },
            fage: {
               required: true,
            },
            fgender:{
               required: true,
            },
            frelation: {
               required: true,
            },
            insurance:{
               required: true,
            },
         },
         messages: {
            udyog_name:{
                  required:"Udyog name is required.",
            },
            udyogi_name:{
               required: "Udyogi name is required.",
            }, 
            contact_no: {
               required: "Contact no. is required.",
            },
            address: {
               required:"Address is required.",
            },
            fname:{
               required:"Name is required.",
            },
            fage: {
               required:"Age is required.",
            },
            fgender: {
               required:"Gender is required.",
            },
            frelation: {
               required:"Relationship is required.",
            },
            insurance: {
               required:"Insurance is required.",
            },

         },
      });
    
</script>
   
</body>
</html>