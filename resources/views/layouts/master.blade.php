
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
 
    <!-- end plugin css for this page -->
    <!-- inject:css -->
   <!--  <link rel="stylesheet" href="{{ asset('../assets/fonts/feather-font/css/iconfont.css') }}">
    -->
    <!-- endinject -->
  <!-- Layout styles -->  
    <link rel="stylesheet" href="{{ asset('../assets/css/demo_1/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.png') }}" />

  </style>
</head>
<body>
  
    <div id="app" class="main-wrapper">        
        <side-bar></side-bar>
        <header></header>
        <div class="page-wrapper">
            <nav class="navbar" style="background-color: #0f3057">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>

                <div class="navbar-content" >     

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown nav-profile">                                
                        <a-dropdown>
                        <a class="ant-dropdown-link" aria-haspopup="true" aria-expanded="false">
                          
                          <avatar username="{{Auth::user()->name}}" src="" :size="45"  :size="100"
  :rounded="true"
  color="#fff"></avatar>
                        </a>
                        <a-menu slot="overlay" style="width: 120px">

                        
                          <a-menu-item>
                              {{ Auth::user()->name }}    
                          </a-menu-item>

                          <a-menu-item key="0">
                            
                            <router-link to="/admin/profile">
                             My Profile
                            </router-link>
                            
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
            <!-- router-view -->
            <vue-page-transition name="fade-in-right">
                <router-view/>
            </vue-page-transition>   
            </div>

        </div>
        
    </div>
</body>
    <script src="{{ asset('../assets/vendors/core/core.js') }}"></script>
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="{{ asset('../assets/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('../assets/js/template.js') }}"></script>

</html>    
