<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>404 
        <?= $this->fetch('title') ?>
    </title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    .error-404 {
  margin: 0 auto;
  text-align: center;
}
.error-404 .error-code {
  bottom: 60%;
  color: #CC4646;
  font-size: 96px;
  line-height: 100px;
  font-weight: bold;
}
.error-404 .error-desc {
  font-size: 12px;
  color: #647788;
}
.error-404 .m-b-10 {
  margin-bottom: 10px!important;
}
.error-404 .m-b-20 {
  margin-bottom: 20px!important;
}
.error-404 .m-t-20 {
  margin-top: 20px!important;
}
</style>
</head>
<body>
    <div id="container">
        <div class="error-404">
    <div class="error-code m-b-10 m-t-20">404 <i class="fa fa-warning"></i></div>
    <h2 class="font-bold">Oops 404! That page can’t be found.</h2>

    <div class="error-desc">
        Sorry, but the page you are looking for was either not found or does not exist. <br/>
        Try refreshing the page or click the button below to go back to the Homepage.
        <div>
            <br/>
            <a href="javascript:history.back()" class="btn btn-danger"><span class="glyphicon glyphicon-home"></span> Go back to Homepage</a>
            
        </div>
    </div>
</div>
        
    </div>
    
    <!--<div class="container">-->
    <!--    <div id="header">-->
    <!--        <h1><?= __('Error') ?></h1>-->
    <!--    </div>-->
    <!--    <div id="content">-->
    <!--        <?= $this->Flash->render() ?>-->

    <!--        <?= $this->fetch('content') ?>-->
    <!--    </div>-->
    <!--</div>-->
    
</body>
</html>