<title>Kalakal | Web Administrator </title>
<link href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <!-- Header -->
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo base_url()?>" class="brand-logo">Kalakal.ph</a>
    </div>
  </nav>

  <div class="container" style="padding: 50px 100px 100px 100px;">
    <div class="center col s12 z-depth-4 card-panel">
      <div class="row">
        <form class="login-form" action="index.html" method="post">
          <h3 class="header s12 light">Web Adminstrator Login</h3>

          <div class="row margin">
            <div class="input-field col s11">
              <i class="mdi-social-person-outline prefix"></i>
              <input id="username" type="text">
              <label for="username" class="center-align">Username</label>
            </div>
          </div>

          <div class="row margin">
            <div class="input-field col s11">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="password" type="password">
              <label for="password">Password</label>
            </div>
          </div>

          <div class="row">
            <div class=" input-field col s10">
              <a href="#" class=" right btn waves-effect waves-light col s10">Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
