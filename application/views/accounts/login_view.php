  <title>Kalakal | Login </title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet">

</head>

<body class="text-center">

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo base_url()?>">Kalakal.ph</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>register">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- login  -->
    <form action="<?php echo base_url();?>Login_controller/loginValidation" method="post">
      <img class="mb-4" src="<?php echo base_url('assets/img/favicon.png')?>" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Kalakal User Login</h1>

    <?php
      echo "<p class='text-danger'>".$this->session->flashdata("error")."<p>";
     ?>


      <label for="inputUsername" class="sr-only">Username</label>
      <input type="username" name="username" id="inputUsername" class="form-control" placeholder="Username or Email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <label class="mt-2" for="selectUser">Login as:</label>
      <select class="form-control mb-3" id="selectUser" name="usertype">
        <option value="customer">Customer</option>
        <option value="vendor">Vendor</option>
        <option value="manufacturer">Manufacturer</option>
      </select>

      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Register">
    </form>
