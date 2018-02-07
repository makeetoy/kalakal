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
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input name="username" type="text" required>
            <label for="username" class="center-align">Username</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s11">
            <i class="prefix"></i>
            <input name="password" type="password" required>
            <label for="password">Password</label>
          </div>
        </div>
        <input type="submit" class="btn" name="login_admin" value="Login">
          
        </form>
      </div>
    </div>
  </div>
