<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ __('Dashboard PKL - Admin') }}</title>
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
    <!-- Bootstrap CSS
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
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/notika-custom-icon.css') }}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/wave/waves.min.css') }}">
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
                                <li><a href="{{ route('datapkl') }}">Data Admin</a>
                                </li>
                                <li><a href="{{ route('datapdfpkl') }}">Data PDF</a>
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
                        <li><a href="{{ route('datapkl') }}">Data Admin</a>
                        </li>
                        <li><a href="{{ route('datapdfpkl') }}">Data PDF</a>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area end-->
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcomb-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                      <i class="notika-icon notika-windows"></i>
                    </div>
                    <div class="breadcomb-ctn">
                      <h2>Data Table PDF Master</h2>
                      <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                  <div class="breadcomb-report">
                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcomb area End-->
      <!-- Data Table area Start-->
      <div class="data-table-area">
          <div class="container">
              <div class="row">
                @include('flashmsg')
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="data-table-list">
                          <div class="basic-tb-hd">
                              <h2>Data Master PDF</h2>
                          </div>
                          <div class="table-responsive">
                              <table id="data-table-basic" class="table table-striped">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Nomor Surat</th>
                                          <th>Nama Surat</th>
                                          <th>Tanggal</th>
                                          <th>Option</th>
                                      </tr>
                                      @php
                                        $i=1;
                                      @endphp
                                  </thead>
                                  @foreach($filepdf as $f)
                                  <tbody>
                                    <tr>
                                      <td>{{ $i++ }}</td>
                                      <td>{{ $f->nosurat }}</td>
                                      <td><a href="{{ url('user/view/'.$f->fsurat ) }}">{{$f->fsurat}}</a></td>
                                      <td>{{ $f->created_at }}</td>
                                      <div class="btn-group-lg btn-group-vertical">
                                        <td><a href="{{ url('user/download/'.$f->fsurat ) }}" class="btn btn-info btn-sm btn-block">Download</a></td>
                                      </div>
                                    </tr>
                                  </tbody>
                                  @endforeach
                              </table>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Data Table area End-->
    <!-- Footer area Start-->
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
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('/asset/asset/js/owl.carousel.min.js') }}"></script>
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
    <!-- jvectormap JS
		============================================ -->
    <script src="{{ asset('/asset/js/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('/asset/js/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('/asset/js/jvectormap/jvectormap-active.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('/asset/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('/asset/js/sparkline/sparkline-active.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('/asset/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/asset/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/asset/js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('/asset/js/flot/flot-active.js') }}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('/asset/js/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('/asset/js/knob/jquery.appear.js') }}"></script>
    <script src="{{ asset('/asset/js/knob/knob-active.js') }}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{ asset('/asset/js/wave/waves.min.js') }}"></script>
    <script src="{{ asset('/asset/js/wave/wave-active.js') }}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{ asset('/asset/js/todo/jquery.todo.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('/asset/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('/asset/js/main.js') }}"></script>
</body>

</html>
