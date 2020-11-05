<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <meta content="ie=edge" http-equiv="X-UA-Compatible">
                    <meta content="{{ csrf_token() }}" name="csrf-token">
                        <title>
                            Research Management
                        </title>
                        <script src="https://unpkg.com/feather-icons">
                        </script>
                        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js">
                        </script>
                        <link href="{{ asset('../assets/css/demo_1/style.css') }}" rel="stylesheet">
                            <link href="{{ asset('../assets/images/favicon.png') }}" rel="shortcut icon"/>
                        </link>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>

<body>
    <div class="main-wrapper" id="app">
      @if(session()->has('message'))
        <flash></flash>
      @endif
        <side-bar>
        </side-bar>
        <div class="page-wrapper">
            <nav class="navbar" style="background-color: #0278ae">
                <a class="sidebar-toggler" href="#">
                    <i data-feather="menu" style="color: white;">
                    </i>
                </a>
                <div class="navbar-content">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link to="/admin/chat">
                                <i class="link-icon" data-feather="box">
                                </i>
                            </router-link>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="profileDropdown" role="button">
                                @if (Auth::user()->photo == 'default.png')
                                <avatar :rounded="true" :size="40" src="" username="{{Auth::user()->name}}">
                                </avatar>
                                @else
                                <avatar :rounded="true" :size="40" src="" username="{{Auth::user()->name}}">
                                </avatar>
                                @endif
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                  <div class="dropdown-header d-flex flex-column align-items-center">
                    <div class="figure mb-3">
                      @if (Auth::user()->photo == 'default.png')
                  <avatar  username="{{Auth::user()->name}}" src="" :size="40"
  :rounded="true"></avatar>
                  @else
                    <avatar  src="../assets/images/faces/face3.jpg" username="{{Auth::user()->name}}" src="" :size="40"
  :rounded="true"></avatar>
                  @endif
                    </div>
                    <div class="info text-center">
                      <p class="name font-weight-bold mb-0"> {{ Auth::user()->name }}</p>
                      <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                    </div>
                  </div>
                  <div class="dropdown-body">
                    <ul class="profile-nav p-0 pt-3">
                      <li class="nav-item">
                        <router-link :to="{ name: 'admin-profile' }" class="nav-link">
                         
                           <i class="link-icon" data-feather="user"></i>     
                          <span>Profile</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="javascript:;" class="nav-link">
                         
                           <i class="link-icon" data-feather="edit"></i>     
                          <span>Edit Profile</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                           <i class="link-icon" data-feather="log-out"></i>     
                          <span>Log Out</span>
                        </a>
                      </li>
                    
                    </ul>
                  </div>
                        </li>
                    </ul>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </nav>
            <!-- router-view -->
            <vue-page-transition name="fade-in-right">
                <router-view>
                    <a-back-top>
                    </a-back-top>
                    <router-view>
                    </router-view>
                </router-view>
            </vue-page-transition>
        </div>
    </div>
</body>

<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('../assets/vendors/core/core.js') }}">
</script>
<script src="{{ asset('../assets/vendors/feather-icons/feather.min.js') }}">
</script>
-->
<script src="{{ asset('../assets/js/template.js') }}">
</script>
</html>