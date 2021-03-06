  <title>Kalakal | Register </title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet" />

  <!-- Plugin CSS -->
  <link href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet" />
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
                <a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>login">Login</a>
              </li>
          </div>
        </div>
      </nav>
    </header>

    <!-- login Form -->
    <form action="<?php echo base_url();?>Register_controller/registerValidation" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Kalakal Register Account</h1>

      <!--  Name Textfield -->
      <div class="form-group">
        <label for="inputName" class="sr-only">Name</label>
        <input type="name" name="name" id="inputName" class="form-control"
             placeholder="Name" required autofocus>
             <?php
               echo "<p class='text-danger'>".$this->session->flashdata("nameerror")."<p>";
              ?>
      </div>

      <!--  Address Textfield -->
      <div class="form-group">
        <label for="inputAddress" class="sr-only">Address</label>
        <input type="address" name="address" id="inputAddress" class="form-control"
             placeholder="Address" required autofocus>
      </div>
      <!--  Email Textfield -->
      <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control"
               placeholder="Email address" required autofocus>
               <?php
                 echo "<p class='text-danger'>".$this->session->flashdata("emailerror")."<p>";
                ?>
      </div>

      <!--  Email Textfield -->
      <div class="form-group">
        <label for="inputContactNumber" class="sr-only">Contact Number</label>
        <input type="contact" name="contact" id="inputContactNumber"
               class="form-control" placeholder="Contact Number" required autofocus>
      </div>

      <!--  Username Textfield -->
      <div class="form-group">
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="username" name="username" id="inputUsername" class="form-control"
               placeholder="Username" required autofocus>
               <?php
                 echo "<p class='text-danger'>".$this->session->flashdata("usernameerror")."<p>";
                ?>
      </div>

      <!--  Password Textfield -->
      <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" name="password" id="inputPassword" class="form-control"
               placeholder="Password" required>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="text" name="confirm_password" id="inputconfirmPassword" class="form-control"
               placeholder="Confirm Password" required>
               <?php
                 echo "<p class='text-danger'>".$this->session->flashdata("passerror")."<p>";
                ?>
      </div>

      <label class="mt-2" for="selectUser">Register as:</label>
      <select class="form-control mb-3" id="selectUser" name="usertype">
        <option value="customer">Customer</option>
        <option value="vendor">Vendor</option>
        <option value="manufacturer">Manufacturer</option>
      </select>

      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Register">
    </form>
