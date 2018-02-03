  <title>Kalakal | Login</title>
</head>

<body>

<!-- Navigation -->
<nav class="orange" role="navigation">
<div class="nav-wrapper container">
  <a id="logo-container" href="<?php echo base_url()?>" class="brand-logo">Kalakal.ph</a>
  <ul class="right hide-on-med-and-down">
    <li><a href="<?php echo base_url()?>register">Register</a></li>
  </ul>
</nav>

<!-- Login -->
<div class="container" style="padding: 50px 100px 100px 100px;">
  <div class="center col s12 z-depth-4 card-panel">
    <div class="row">
      <form action="<?php echo base_url();?>Login_controller/loginValidation" method="post">
        <h3 class="header s12 light">Login</h3>

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
            <input name="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>

        <input type="submit" class="btn" name="login_customer" value="Login as Customer">
        <input type="submit" class="btn" name="login_vendor" value="Login as Vendor">
        <input type="submit" class="btn" name="login_manufacturer" value="Login as Manufacturer">

      </form>
    </div>
  </div>
</div>
