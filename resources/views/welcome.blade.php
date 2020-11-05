<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Research Management System</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
         <link href="/landing-page/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600%7COpen+Sans:400%7CVarela+Round" rel="stylesheet">
    <link href="/landing-page/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/fonts/feather-font/css/iconfont.css') }}">
<style>
</style>
    </head>
    <body data-spy="scroll">
        <div id="app">
        <div class="wrapper">
            <div class="container">
            <nav class="navbar navbar-expand-md navbar-light nav-white bg-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="javascript:;">CCERMS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Research Archive</a>
                            </li>
                            @auth
                            <li class="nav-item dropdown show">
                                <a class="nav-link js-scroll-trigger" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Welcome, {{ Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="profileDropdown">

    <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                           <i class="link-icon" data-feather="log-out"></i>
                          <span>Log Out</span>
                        </a>
  </div>                    </li>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
         <div id="main" class="main">
            <div class="cta-big">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-7">
                            <div class="cta-big-inner wow fadeInRight">

                                <h1>A Multi-platform Research Management System for College of Computing Education</h1>
                                <p></p>
                                <a href="{{ route('login')}}" class="btn btn-action btn-white">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
                <!-- Client Section -->
                <div id="services" class="lbl-services">
                    <div class="container">
                        <div class="row justify-center">
                            <div class="col-md-8">
                                <div class="service-intro text-center">
                                    <h1 class="wow fadeInDown">List of researches in the archive</h1>

                                </div>
                            </div>
                        </div>
                        <div class="row">



                        </div>
                    </div>
                </div>
               </div>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>University of Mindanao</h2>
                                <p> The College of Computing Education maintains its reputation as one of the best computer schools in the region through its PACUCOA Level III accredited programs as well as being a certified Center of Development. The college is composed of highly qualified faculty members who are skilled and equipped with the updated skills in different fields of computer studies.

The Computer Science and Information Technology program of the college is granted Center of Development (COD) status by CHED. It has forged collaborations with Apple, Google, Microsoft and IBM.</p>

                                <ul class="footer-sub">
                                    <li>&copy; 2020. All Rights Reserved.</li>


                                    <li><a href="https://umindanao.edu.ph/ppta/pptas">Privacy Policy (Student) </a></li>
                                    <li><a href="https://umindanao.edu.ph/ppta/pptae">Privacy Policy (Employee) </a></li>

                                </ul>
                            </div>
                            <div class="col-md-6 text-right d-none d-md-block">
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/groups/UMCCE"><img src="/landing-page/assets/icons/facebook.png" width="35" alt="Social"></a></li>
                                    <li><a href="#"><img src="/landing-page/assets/icons/twitter.png" width="35" alt="Social"></a></li>
                                    <li><a href="#"><img src="/landing-page/assets/icons/youtube.png" width="35" alt="Social"></a></li>
                                    <li><a href="#"><img src="/landing-page/assets/icons/instagram.png" width="35" alt="Social"></a></li>
                                </ul>

                                <a class="f-mail" href="tel:180032472349">Call: 1800 3247 2349</a>
                                <br>
                                <a class="f-mail" href="mailto:cce@umindanao.edu.ph">cce@umindanao.edu.ph</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Scroll To Top -->
                <a id="back-top" class="back-to-top js-scroll-trigger" href="#main">
                    <i class="ion-android-navigate"></i>
                </a>
                <!-- Scroll To Top Ends-->
            </div> <!-- Main -->
        </div>
        </div>
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="/landing-page/assets/js/jquery-2.1.1.js"></script>
        <script src="/landing-page/assets/js/popper.min.js"></script>
        <script src="/landing-page/assets/js/bootstrap.min.js"></script>
        <script src="/landing-page/assets/js/custom.js"></script>
    </div>
    </body>

</html>
