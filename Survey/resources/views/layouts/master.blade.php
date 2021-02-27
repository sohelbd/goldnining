<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Servey</title>
  <!-- Favicon -->
  <link href='https://www.soengsouy.com/favico.ico' rel='icon' type='image/x-icon'/>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  
  <style type="text/css" media="screen">
    .navbar-top{
      height: 50px !important;
    }
    .bg-dark{
      background-color: #B49108 !important;
    }
    .avbar-nav{
      padding-left: 900px !important;
    }
  </style>
</head>

<body>
  <!-- Sidenav -->

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    
    <!-- Header -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
 <!--  <a class="navbar-brand" href="#">Logo</a>
 -->
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">File</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/home')}}">Development</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Stopping
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/survey_stopping')}}">Survey Stopping</a>

      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Monthly
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/stock_pile')}}">Stock Pile</a>
        <a class="dropdown-item" href="{{url('/mine_actual')}}">Mine Actual</a>
        <a class="dropdown-item" href="{{url('/mill_actual')}}">Mill Actual</a>       
        <a class="dropdown-item" href="{{url('/firm_mill_actual')}}">Firm Mill Actual</a>       
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Budget
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/millbudget')}}">Mill Budget</a>
        <a class="dropdown-item" href="{{url('/minebudget')}}">Mine Budget</a>
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        System
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/period')}}">Period</a>
        <a class="dropdown-item" href="{{url('/heading')}}">Heading</a>
        <a class="dropdown-item" href="{{url('/user_management')}}">User Management</a>
        <a class="dropdown-item" href="{{url('/peg')}}">Peg</a>
        <a class="dropdown-item" href="{{url('/structure')}}">Structure</a>
        <a class="dropdown-item" href="{{url('/system')}}">Shaft</a>
        <a class="dropdown-item" href="{{url('/minemeth')}}">MineMeth</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/report')}}">Reports</a>
    </li>
  </ul>
  <ul class="navbar-nav align-items  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Bhaskaran Chetty</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
               <!--  <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a> -->
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
</nav>
    <!-- Header -->
    @yield('content')
  <!-- Footer -->
    <footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6">
       <!--  <div class="copyright text-center  text-lg-left  text-muted">
        &copy; 2021 <a href="https://www.soengsouy.com" class="font-weight-bold ml-1" target="_blank">Soeng Souy</a>
        </div> -->
      </div>
      
      </div>
    </div>
    </footer>
    </div>
    
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>