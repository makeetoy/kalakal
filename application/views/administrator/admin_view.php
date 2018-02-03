  <title>Kalakal | Web Administrator </title>
</head>

<body>
  <!-- Header -->
  <nav class="orange" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo base_url()?>" class="brand-logo">Kalakal.ph</a>
    </div>
  </nav>

  <div class="container" style="padding: 50px 100px 100px 100px;">
    <div class="center col s12 z-depth-4 card-panel">
      <div class="row">
        <form class="form" method="post" action="<?php echo base_url();?>Administrator_controller/login">
          <h3 class="header s12 light">Web Adminstrator Login</h3>

          <div class="row margin">
            <div class="input-field prefix col s11">
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
          <input type="submit" class="btn waves-effect waves-light" name="login" value="Login">
          
        </form>
      </div>
    </div>
  </div>
