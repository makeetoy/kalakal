  <title>Kalakal | A B2B Wholesale E-Commerce Platform</title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/simple-line-icons.css'); ?>" rel="stylesheet">

  <!-- Plugin CSS -->
  <link href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Kalakal.ph</a>
      <button class="navbar-toggler navbar-toggler-right" type="button"
              data-toggle="collapse" data-target="#navbarResponsive"
              aria-controls="navbarResponsive" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url()?>register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#newsletter">Newsletter</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="<?php echo base_url()?>store">Visit Store</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>Jumpstart your Business</strong>
          </h1>
          <hr>
        </div>
        <div class="col-lg-8 mx-auto">
          <p class="text-faded mb-5">Kalakal is a B2B wholesale e-commerce
            platform for entrepreneurs looking for goods at the best price</p>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form method="post" action="<?php echo base_url();?>Login_controller/checkemail">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" name="email" placeholder="Enter your email..." required>
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-lg btn-primary">Get Started</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Features -->
  <section class="bg-primary" id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Everything you need to grow your business</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">Kalakal helps small and medium enterprises to manage their business
            <br> by making most of the process online and digital. A simple solution
            that will help your brand sell more<</p>
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">At Your Service</h2>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-shopping-bag text-primary mb-3"></i>
            <h3 class="mb-3">Setup your own virtual store</h3>
            <p class="text-muted mb-0">We help business owners to scale their business by being
                            the podium for their products and services online.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-truck text-primary mb-3"></i>
            <h3 class="mb-3">Track package deliveries</h3>
            <p class="text-muted mb-0">Keep updated with your packages thru the tracking
                            feature of the system</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-chart-line text-primary mb-3"></i>
            <h3 class="mb-3">Generate sales reports</h3>
            <p class="text-muted mb-0">View your sales automatically by the reports
                            generated by the system.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-heart text-primary mb-3"></i>
            <h3 class="mb-3">Scale your Business</h3>
            <p class="text-muted mb-0">With Kalakal, Users can now improve their
                            services in the international level</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter -->
  <section id="newsletter" class="bg-primary text-white">
    <div class="container">
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <h2 class="mb-4">Get updates thru our daily newsletter!</h2>
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input id="email" name="email" type="email" class="form-control form-control-lg" placeholder="Enter your email...">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" value="SUBMIT" class="btn btn-block btn-lg btn-secondary">Submit</button>
            </div>
          </div>
        </form>
      </div>
  </section>
