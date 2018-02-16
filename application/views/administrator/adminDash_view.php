  <title>Kalakal.ph | Dashboard</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/dashboard.css'); ?>" type="text/css" rel="stylesheet">
</head>

<body>

<header>

  
  <!-- Side Navigation Dashboard -->
  <ul id="nav-mobile" class="side-nav fixed z-depth-2" style="width: 18%">
    <!-- User Header -->
    <li class="center">
      <div class="orange darken-2 white-text" style="height: 180px; padding:10px; ">
        <div class="row">
          <img style="margin-top: 5%;" width="100px" height="100px"
          src="<?php echo base_url('assets/img/user-icon.png');?>" class="circle responsive-img" >
          <p style="margin-top: -10%;"> User Account </p>
        </div>
      </div>
    </li>

    <!-- Side Links -->
    <li id="dash_dashboard"><a class="waves-effect" href="#!"><b>Dashboard</b></a></li>
    <ul class="collapsible" data-collapsible="accordion">

      <li id="dash_users">
        <div id="dash_users_header" class="collapsible-header waves-effect"><b>Users</b></div>
        <div id="dash_users_body" class="collapsible-body">
          <ul>
            <li id="users_admin">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Admin Account</a>
            </li>
            <li id="users_supplier">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Supplier</a>
            </li>
            <li id="users_manufacturer">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Manufacturer</a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Customer</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_products">
        <div id="dash_products_header" class="collapsible-header waves-effect"><b>Products</b></div>
        <div id="dash_products_body" class="collapsible-body">
          <ul>
            <li id="products_product">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Products</a>
              <a class="waves-effect" style="text-decoration: none;" href="#!">Orders</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </ul>
  <!-- Dropdown -->
  <ul class="dropdown-content" id="user_dropdown">
    <li><a class="orange-text" href="#!">Profile</a></li>
    <li><a class="orange-text" href="#!">Change Password</a></li>
    <li><a class="orange-text" href="#!">Logout</a></li>
  </ul>

  <!-- Account Dropdown -->
  <nav class="orange" role="navigation">
    <div class="nav-wrapper">
      <a data-activates="slide-out" class="button-collapse show-on-" href="#!">
      <ul class="right hide-on-med-and-down">
        <li>
          <a class='dropdown-button' href='' data-activates='user_dropdown'>Welcome, <b>Admin Account</b></a>
        </li>

      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>

 <!-- Breadcrumb -->
  <nav>
    <div class="nav-wrapper orange darken-2">
      <a style="margin-left: 20px;" class="breadcrumb" href="#!">Admin</a>
      <a class="breadcrumb" href="#!">Dashboard</a>
      <div style="margin-right: 20px;" id="timestamp" class="right"></div>
    </div>

  </nav>
</header>

<main>
  <div id="table-datatables" style="padding: 10px;">
    <div class="col s12 m8 l9">
      <table id="data-table-simple" class="responsive-table display" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>

        <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot>

        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
          </tr>
        </tbody>

      </table>
    </div>
  </div>

<!-- Quick Action -->
  <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large pink waves-effect waves-light">
      <i class="large material-icons">add</i>
    </a>

    <ul>
      <li>
        <a class="btn-floating red"><i class="material-icons">note_add</i></a>
        <a href="" class="btn-floating fab-tip">Add a note</a>
      </li>
      <li>
        <a class="btn-floating yellow darken-1"><i class="material-icons">add_a_photo</i></a>
        <a href="" class="btn-floating fab-tip">Add a photo</a>
      </li>

      <li>
        <a class="btn-floating green"><i class="material-icons">alarm_add</i></a>
        <a href="" class="btn-floating fab-tip">Add an alarm</a>
      </li>

      <li>
        <a class="btn-floating blue"><i class="material-icons">vpn_key</i></a>
        <a href="" class="btn-floating fab-tip">Add a master password</a>
      </li>
    </ul>
  </div>
</main>
</body>
</html>
