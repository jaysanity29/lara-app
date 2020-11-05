
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Research Management</title>

    <link rel="stylesheet" href="{{ asset('../assets/vendors/core/core.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">

  <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.png') }}" />

</head>
<body>
    <div id="app" class="main-wrapper">
       @if(session()->has('message'))
        <flash></flash>
      @endif
    <div class="horizontal-menu">
      <nav class="navbar top-navbar" style="background-color: #3b2e5a">
        <div class="container">
          <div class="navbar-content" >
            <a href="#" class="navbar-brand">
              <span style="color:white;">Research Personnel</span>
            </a>

            <ul class="navbar-nav">
              <li class="nav-item dropdown nav-profile">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  @if (Auth::user()->photo == 'default.png')
                  <avatar  username="{{Auth::user()->name}}" src="" :size="40"  :size="100"
  :rounded="true"></avatar>
                  @else
                    <avatar  src="../assets/images/faces/face3.jpg" username="{{Auth::user()->name}}" src="" :size="40"  :size="100"
  :rounded="true"></avatar>
                  @endif
                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                  <div class="dropdown-header d-flex flex-column align-items-center">
                    <div class="figure mb-3">
                      @if (Auth::user()->photo == 'default.png')
                  <avatar  username="{{Auth::user()->name}}" src="" :size="40"  :size="100"
  :rounded="true"></avatar>
                  @else
                    <avatar  src="../assets/images/faces/face3.jpg" username="{{Auth::user()->name}}" src="" :size="40"  :size="100"
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
                        <router-link :to="{ name: 'rp-dashboard' }" class="nav-link">

                           <i class="link-icon" data-feather="user"></i>
                          <span>Profile</span>
                        </router-link>
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
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-left d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle" style="color:white">
            <!--   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>   -->
               <i class="link-icon" data-feather="menu"></i>
            </button>
          </div>
        </div>
      </nav>
     <personnel-navbar />


            </div>
 <div class="page-wrapper">
         <vue-page-transition name="fade-in-left">
                <router-view>
    <a-back-top />
                  <router-view/>
            </vue-page-transition>
     </div>
    </div>
    </div>


</body>
  <script src="{{ asset('/js/app.js')}}" ></script>
  <script src="{{ asset('../assets/vendors/core/core.js') }}"></script>
  <script src="{{ asset('../assets/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('../assets/js/template.js') }}"></script>

</html>
