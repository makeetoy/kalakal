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
<div class="container" style="padding: 50px 100px 100px 100px;">
  <div class="center col s12 z-depth-4 card-panel">
    <div class="row margin">
      <form class="login-form" action="index.html" method="post">
        <h3 class="header s12 light">Kalakal Register</h3>

        <div class="row">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input id="name" type="text">
            <label for="name" class="center-align">Name</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input id="address" type="text">
            <label for="address" class="center-align">Address</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input id="email_address" type="text">
            <label for="email_address" class="center-align">Email Address</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input id="mobile_number" type="text">
            <label for="mobile_number" class="center-align">Mobile Number</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input id="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input id="password" type="text">
            <label for="password">Password</label>
          </div>
        </div>

        <div class="row" style="padding-left: 150px">
          <div class="input-field col s10">
            <a href="#" class=" btn waves-effect waves-light col s10">Register as Customer</a>
            <a href="#" class=" btn waves-effect waves-light col s10">Register as Vendor</a>
            <a href="#" class=" btn waves-effect waves-light col s10">Register as Manufacturer</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
