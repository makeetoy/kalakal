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
      <form class="login-form" action="index.html" method="post">
        <h3 class="header s12 light">Kalakal Login</h3>

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
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>

        <div class="row" style="padding-left: 150px">
          <div class="input-field col s10">
            <a href="#" class=" btn waves-effect waves-light col s10">Login as Customer</a>
            <a href="#" class=" btn waves-effect waves-light col s10">Login as Vendor</a>
            <a href="#" class=" btn waves-effect waves-light col s10">Login as Manufacturer</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
