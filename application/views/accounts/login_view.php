  <title>Kalakal | Login </title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet">

  <!-- Plugin CSS -->
  <link href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet">

</head>

<body class="text-center">

    <header>
      <!-- Navigation Barr -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" >
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url()?>">Kalakal.ph</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                  data-target="#navbarResponsive" aria-controls="navbarResponsive"
                  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>register">Register</a>
              </li>
          </div>
        </div>
      </nav>
    </header>

    <!-- login  -->
    <form action="<?php echo base_url();?>Login_controller/loginValidation" method="post">
      <img class="mb-4" src="<?php echo base_url('assets/img/favicon.png')?>" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Kalakal User Login</h1>

      <?php
         if(isset($status)){
           if (!$status) {
             echo '<div class="alert alert-danger" role="alert">
                     <strong>Error!</strong> wrong email or password.
                   </div>';
           }
         }
       ?>


      <label for="inputUsername" class="sr-only">Username</label>
      <input type="username" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <label class="mt-2" for="selectUser">Login as:</label>
      <select class="form-control mb-3" id="selectUser" name="usertype">
        <option value="customer">Customer</option>
        <option value="vendor">Vendor</option>
        <option value="manufacturer">Manufacturer</option>
      </select>

      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
    </form>
