<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content="A P2P Wholesale E-Commerce Platform">
  <meta name="keywords" content="ECommerce">
  <meta name="author" content="Kalakal">
  <link rel="icon" type="image" href="<?php echo base_url('assets/img/favicon.png')?>" />

  <!-- Material Design Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/creative.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/404.css'); ?>" rel="stylesheet">

  <title>Kalakal | 404 Page not found</title>
</head>
<body>
  <div class="mb-4 container">
    <div class="row">
      <div class="col-md-12">
        <div class="error-template">
          <h1>Oops!</h1>
          <h2>404 Not Found</h2>
          <div class="error-details">
            Sorry, an error has occured, Requested page not found!
          </div>
          <div class="error-actions">
            <a href="<?php echo base_url()?>" class="btn btn-primary btn-lg">Take Me Home </a>
            <a href="javascript:history.go(-1)" class="btn btn-default btn-lg">Go back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url('assets/js/jquery.easing.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/scrollreveal.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js');?>"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url('assets/js/creative.min.js');?>"></script>

</html>
