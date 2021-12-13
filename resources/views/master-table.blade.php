<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/asset/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css') }}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/asset/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/asset/css/owl.transitions.css') }}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/normalize.css') }}">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/wave/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/asset/css/wave/button.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/notika-custom-icon.css') }}">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/jquery.dataTables.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('/asset/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="#"><img src="{{ asset('/asset/img/logo/logo.png') }}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li>
                                  <a href="{{ route('homes') }}">Home</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                      <li><a href="{{ route('umum') }}">Bidang Umum</a>
                                      </li>
                                      <li><a href="{{ route('pip') }}">Bidang PIP</a>
                                      </li>
                                      <li><a href="{{ route('pkp') }}">Bidang PKP</a>
                                      </li>
                                      <li><a href="{{ route('tik') }}">Bidang TIK</a>
                                      </li>
                                      <li><a href="{{ route('egov') }}">Bidang E-GOV</a>
                                      </li>
                                      <li><a href="{{ route('santik') }}">Bidang SANTIK</a>
                                      </li>
                                    </ul>
                                </li>
                                <li>
                                  <a href="/form') }}">Form</a>
                                </li>
                                <li>
                                  <!-- Admin -->
                                  <!-- Right Side Of Navbar -->
                                        <!-- Authentication Links -->
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                  <!-- Admin -->
                                </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <ul class="nav nav-tabs justify-content-center notika-menu-wrap">
                        <li><a href="{{ route('homes') }}">Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#Tables">Tables</a>
                        </li>
                        <li><a href="{{ route('form') }}">Form</a>
                        </li>
                        <li><!-- Admin -->
                        <!-- Right Side Of Navbar -->
                              <!-- Authentication Links -->
                              @guest
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <!-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> -->
                                      </li>
                                  @endif
                              @else
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }} <span class="caret"></span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                              @endguest
                        <!-- Admin -->
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{ route('umum') }}">Bidang Umum</a>
                                </li>
                                <li><a href="{{ route('pip') }}">Bidang PIP</a>
                                </li>
                                <li><a href="{{ route('pkp') }}">Bidang PKP</a>
                                </li>
                                <li><a href="{{ route('tik') }}">Bidang TIK</a>
                                </li>
                                <li><a href="{{ route('egov') }}">Bidang E-GOV</a>
                                </li>
                                <li><a href="{{ route('santik') }}">Bidang SANTIK</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area end-->
    <!-- Show Table area end-->
    @yield('ShowTable')
    <!-- Show Table area end-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{ asset('/asset/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('/asset/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('/asset/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('/asset/js/jquery-price-slider.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('/asset/js/owl.carousel.min.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('/asset/js/jquery.scrollUp.min.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('/asset/js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('/asset/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/asset/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('/asset/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('/asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('/asset/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('/asset/js/sparkline/sparkline-active.js') }}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{ asset('/asset/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/asset/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/asset/js/flot/flot-active.js') }}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('/asset/js/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('/asset/js/knob/jquery.appear.js') }}"></script>
    <script src="{{ asset('/asset/js/knob/knob-active.js') }}"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{ asset('/asset/js/chat/jquery.chat.js') }}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{ asset('/asset/js/todo/jquery.todo.js') }}"></script>
	<!--  wave JS
		============================================ -->
    <script src="{{ asset('/asset/js/wave/waves.min.js') }}"></script>
    <script src="{{ asset('/asset/js/wave/wave-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('/asset/js/plugins.js') }}"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="{{ asset('/asset/js/data-table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/asset/js/data-table/data-table-act.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('/asset/js/main.js') }}"></script>
</body>

</html>
