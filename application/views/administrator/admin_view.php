  <title>Kalakal | Web Administrator </title>
  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet">

</head>

<body class="text-center">

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo base_url()?>">Kalakal.ph</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </header>

   <form class="form-signin">
     <img class="mb-4" src="<?php echo base_url('assets/img/favicon.png')?>" alt="" width="72" height="72">
     <h1 class="h3 mb-3 font-weight-normal">Web Administrator Login</h1>
     <label for="inputEmail" class="sr-only">Email address</label>
     <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
     <label for="inputPassword" class="sr-only">Password</label>
     <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
     <div class="checkbox mb-3">
       <label>
         <input type="checkbox" value="remember-me"> Remember me
       </label>
     </div>
     <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
   </form>
