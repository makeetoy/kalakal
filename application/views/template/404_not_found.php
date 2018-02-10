<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content="A P2P Wholesale E-Commerce Platform">
  <meta name="keywords" content="ECommerce">
  <meta name="author" content="Kalakal">
  <link rel="icon" type="image" href="<?php echo base_url('assets/img/favicon.png')?>" />
  <title>Kalakal.ph | 404 Page not found </title>


  <!-- CORE CSS-->

  <link href="<?php echo base_url('assets/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('assets/css/style-404.css')?>" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- Custom CSS-->
  <link href="<?php echo base_url('assets/css/page-center.css')?>" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url('assets/css/prism.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css')?>" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="orange">

  <div id="error-page">

    <div class="row">
      <div class="col s12">
        <div class="browser-window">

          <div class="top-bar">
            <div class="circles">
              <div id="close-circle" class="circle"></div>
              <div id="minimize-circle" class="circle"></div>
              <div id="maximize-circle" class="circle"></div>
            </div>
          </div>

          <div class="content">
            <div class="row">
              <div id="site-layout-example-top" class="col s12">
                <p class="flat-text-logo center white-text caption-uppercase">Sorry but we couldn’t find this page :(</p>
              </div>
              <div class="grey darken-1 col s12" style="height: inherit;">
                <div class=" row">
                  <h1 class="grey darken-1 text-long-shadow center">404</h1>
                </div>
                <div class="row">
                  <p class="center white-text col s12">It seems that this page doesn’t exist.</p>
                  <p class=" center s12"><button onclick="goBack()" class="btn orange darken-4 waves-effect waves-light">Back</button>
                  <a href="<?php echo base_url()?>" class="btn orange darken-4 waves-effect waves-light">Homepage</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.js')?>"></script>
  <!--prism-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/prism.js')?>"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js')?>"></script>

  <script type="text/javascript">
    function goBack() {
      window.history.back();
    }

  </script>
</body>
</html>
