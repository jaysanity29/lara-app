
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Research Management</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('../assets/vendors/core/core.css') }}">
    <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('../assets/vendors/fullcalendar/fullcalendar.min.css') }}">

    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('../assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->
  <!-- Layout styles -->  
    <link rel="stylesheet" href="{{ asset('../assets/css/demo_1/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.png') }}" />
</head>
<body>
    <div id="app" class="main-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <student-sidebar></student-sidebar>

        <!-- partial -->
    
        <div class="page-wrapper">
                    
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
               <div class="navbar-content">
                
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('../assets/images/faces/face1.jpg') }}" alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="{{ asset('../assets/images/faces/face1.jpg') }}" alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{ Auth::user()->name }}</p>
                                        <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i data-feather="edit"></i>
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a  class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                                    </ul>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown nav-profile">
                                       
                        <a-dropdown>
                        <a class="ant-dropdown-link" aria-haspopup="true" aria-expanded="false">
                          
                          <avatar username="{{Auth::user()->name}}" size="40"></avatar>
                        </a>
                        <a-menu slot="overlay" style="width: 120px">
                          <a-menu-item key="0">
                            Profile
                          </a-menu-item>
                          <a-menu-item key="1">
                             <a  class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>

                                            </a>


                          </a-menu-item>
                        </a-menu>
                      </a-dropdown>

                  </li>

                    </ul>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                </div>
            </nav>
            <!-- partial -->
            <!-- router-view -->
                 <router-view></router-view>           
            </div>

        </div>

    </div>
  <script src="{{ asset('/js/app.js')}}"></script>
  <script src="{{ asset('../assets/vendors/core/core.js') }}"></script>
  <script src="{{ asset('../assets/vendors/chartjs/Chart.min.js') }}"></script>
 
  <script src="{{ asset('../assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('../assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('../assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('../assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
  <script src="{{ asset('../assets/vendors/fullcalendar/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('../assets/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('../assets/js/template.js') }}"></script>
  <script src="{{ asset('../assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('../assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('../assets/js/fullcalendar.js') }}"></script>
 

</body>
 
</html>    
