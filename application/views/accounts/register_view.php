  <title>Kalakal | Register</title>
</head>

<body>

<!-- Navigation -->
<nav class="orange" role="navigation">
<div class="nav-wrapper container">
  <a id="logo-container" href="<?php echo base_url()?>" class="brand-logo">Kalakal.ph</a>
  <ul class="right hide-on-med-and-down">
    <li><a href="<?php echo base_url()?>login">Login</a></li>
  </ul>
</nav>

<!-- Register -->
<div class="container" style="padding: 50px 50px 100px 50px;">
  <div class="center col s12 z-depth-4 card-panel">
    <div class="row margin">
      <form method="post" action="<?php echo base_url();?>Register_controller/registerValidation">
        <h3 class="header s12 light">Register</h3>

        <div class="row">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input name="name" type="text">
            <label for="name" class="center-align">Name</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input name="address" type="text">
            <label for="address" class="center-align">Address</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input name="email" type="text">
            <label for="email" class="center-align">Email Address</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input name="contact" type="text">
            <label for="contact" class="center-align">Contact Number</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input name="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input name="password" type="text">
            <label for="password">Password</label>
          </div>
        </div>

        <input type="submit" class="btn" name="create_customer" value="Register as Customer">
        <input type="submit" class="btn" name="create_vendor" value="Register as Vendor">
        <input type="submit" class="btn" name="create_manufacturer" value="Register as Manufacturer">

      </form>
    </div>
  </div>
</div>
