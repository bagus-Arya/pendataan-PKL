<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form | Notika - Notika Admin Template</title>
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
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/summernote/summernote.css') }}">
    <!-- Range Slider CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/themesaller-forms.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/notika-custom-icon.css') }}">
    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/bootstrap-select/bootstrap-select.css') }}">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/datapicker/datepicker3.css') }}">
    <!-- Color Picker CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/color-picker/farbtastic.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/chosen/chosen.css') }}">
    <!-- notification CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/notification/notification.css') }}">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/asset/css/dropzone/dropzone.css') }}">
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
        <![endif]--><!-- Start Header Top Area -->
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
                                      <a href="{{ route('form') }}">Form</a>
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
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Form Input Data Anak PKL</h2>
										<p>Welcome to <span class="bread-ntd">Admin Dashboard</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <form class="form-element-area" action="{{ route('simpanuser') }}" enctype="multipart/form-data" method="post">
      {{ csrf_field() }}
      <div class="container">
          <div class="row">
                  @include('flashmsg')
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-element-list">
                      <div class="cmp-tb-hd bcs-hd">
                          <h2>Basic Example</h2>
                          <p>Place one add-on or button on either side of an input. You may also place one on both sides of an input. </p>
                      </div>
                      <!-- ROW Awal -->
                        <div class="row">
                          <!-- Input Full Name Start -->
                          <div class="col-lg-4 col-md-4 col-md-1 col-sm-4 col-xs-12">
                            <!-- <div class="form-group ic-cmp-int"> -->
                              <div class="nk-int-st">
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                              </div>
                                @if($errors->has('nama'))
                                  <div class="text-danger">
                                      {{ $errors->first('nama')}}
                                  </div>
                                @endif
                              <!-- </div> -->
                          </div>
                          <!-- Input Full Name End -->
                        <!-- Input Asal Sekolah/Kampus Start -->
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group">
                                  <div class="nk-int-st">
                                      <input type="text" class="form-control" name="asal" placeholder="Asal Sekolah/Kampus">
                                  </div>
                                  @if($errors->has('asal'))
                                    <div class="text-danger">
                                      {{ $errors->first('asal')}}
                                    </div>
                                  @endif
                              </div>
                            </div>
                            <!-- Input Asal Sekolah/Kampus End -->
                            <!-- Input NIM Start -->
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                  <div class="form-group">
                                      <div class="nk-int-st">
                                          <input type="text" class="form-control" name="nim" placeholder="Nomor Identitas Siswa">
                                      </div>
                                      @if($errors->has('nim'))
                                      <div class="text-danger">
                                          {{ $errors->first('nim')}}
                                      </div>
                                    @endif
                                  </div>
                              </div>
                              <!-- Input NIM end -->
                          </div>
                          <!-- ROW Akhir -->
                      <!-- ROW Awal -->
                      <div class="row">
                      <!-- Input Prodi Start -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="prodi" placeholder="Jurusan/Prodi">
                                </div>
                                @if($errors->has('prodi'))
                                <div class="text-danger">
                                    {{ $errors->first('prodi')}}
                                </div>
                              @endif
                            </div>
                        </div>
                        <!-- Input Prodi end -->
                          <!-- Input No.Hp start -->
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group">
                                  <div class="nk-int-st">
                                      <input type="text" class="form-control" name="hp" placeholder="Nomor Handphone">
                                  </div>
                                  @if($errors->has('hp'))
                                  <div class="text-danger">
                                      {{ $errors->first('hp')}}
                                  </div>
                                @endif
                              </div>
                          </div>
                          <!-- Input No.Hp end -->
                          <!-- Input Jenis Kelamin Start -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                  <select class="custom-select custom-select-sm" name="jeniskelamin">
                                     <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                     <option value="Laki-Laki">Laki-Laki</option>
                                     <option value="Perempuan">Perempuan</option>
                                  </select>
                                    @if($errors->has('jeniskelamin'))
                                    <div class="text-danger">
                                        {{ $errors->first('jeniskelamin')}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Input Jenis Kelamin end -->
                        </div>
                      <!-- ROW Akhir -->

                        <!-- Input Bidang Start -->
                        <div class="row">
                          <div class="col-lg-1 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group">
                                <select class="custom-select custom-select-sm " name="bidang">
                                   <option value="" disabled selected>Pilih Bidang</option>
                                   <option value="Bidang Umum, Sekretariat dan Keuangan">Bidang Umum, Sekretariat dan Keuangan</option>
                                   <option value="Bidang Pengelolaan Informasi Publik">Bidang Pengelolaan Informasi Publik</option>
                                   <option value="Bidang Pengelolaan Komunikasi Publik">Bidang Pengelolaan Komunikasi Publik</option>
                                   <option value="Bidang Teknologi Informasi dan Komunikasi">Bidang Teknologi Informasi dan Komunikasi</option>
                                   <option value="Bidang E-Goverment">Bidang E-Goverment</option>
                                   <option value="Bidang Persandian dan Statistik">Bidang Persandian dan Statistik</option>
                                </select>
                                @if($errors->has('bidang'))
                                <div class="text-danger">
                                    {{ $errors->first('bidang')}}
                                </div>
                                @endif
                              </div>
                          </div>
                          <!-- Input Bidang End -->
                          <!-- Datepicker area Start-->
                                <div class="datepicker-area">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="datepicker-int mg-t-30">
                                              <div class="row">
                                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                      <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                          <label>Awal Mulai PKL</label>
                                                          <div class="input-group date nk-int-st">
                                                              <span class="input-group-addon"></span>
                                                              <input type="text" name="awalpkl" class="form-control">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                      <div class="form-group nk-datapk-ctm form-elet-mg" id="data_2">
                                                          <label>Akhir PKL</label>
                                                          <div class="input-group date nk-int-st">
                                                              <span class="input-group-addon"></span>
                                                              <input type="text" name="akhirpkl" class="form-control">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- <script type="text/javascript">
                                        $(document).ready(function(){
                                          $('.date').datepicker({
                                            format:'MM/DD/YYYY',
                                            locale:'en'
                                          });
                                        });
                                      </script> -->
                                </div>
                          <!-- Datepicker area End-->
                          <!-- Upload File End-->
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-element-list">
                                    <div class="col-lg-4 col-md-8 col-sm-4 col-xs-12">
                                        <b>Kode SuratFile</b>
                                            <div class="nk-int-st">
                                                <input type="text" name="nosurat" placeholder="SuratPKL">
                                            </div>
                                            @if($errors->has('nosurat'))
                                                <div class="text-danger">
                                                  {{ $errors->first('nosurat')}}
                                                </div>
                                            @endif
                                          </div>
                                          <div class="col-lg-4 col-md-8 col-sm-4 col-xs-12">
                                            <b>Nama File</b>
                                                <div class="nk-int-st">
                                                  <input type="text" name="nama_file" placeholder="SuratPKL">
                                                </div>
                                              @if($errors->has('nama_file'))
                                                <div class="text-danger">
                                                  {{ $errors->first('nama_file')}}
                                                </div>
                                              @endif
                                          </div>
                                          <div class="col-lg-4 col-md-8 col-sm-4 col-xs-12">
                                            <input type="file" name="file" class="btn btn-success" value="Upload File">
                                          </div>
                              </div>
                          </div>
                          <!-- Upload File area End-->
                    </div>
                        <input type="submit" class="btn btn-success" value="Ajukan PKL">
                    </div>
                  </div>
                </div>
              </div>

    </form>
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
    <!-- Input Mask JS
		============================================ -->
    <script src="{{ asset('/asset/js/jasny-bootstrap.min.js') }}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('/asset/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('/asset/js/icheck/icheck-active.js') }}"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="{{ asset('/asset/js/rangle-slider/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script src="{{ asset('/asset/js/rangle-slider/jquery-ui-touch-punch.min.js') }}"></script>
    <script src="{{ asset('/asset/js/rangle-slider/rangle-active.js') }}"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="{{ asset('/asset/js/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/asset/js/datapicker/datepicker-active.js') }}"></script>
    <!-- bootstrap select JS
		============================================ -->
    <script src="{{ asset('/asset/js/bootstrap-select/bootstrap-select.js') }}"></script>
    <!--  notification JS
		============================================ -->
    <script src="{{ asset('/asset/js/notification/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('/asset/js/notification/notification-active.js') }}"></script>
    <!-- dropzone JS
    ============================================ -->
    <script src="{{ asset('/asset/js/dropzone/dropzone.js') }}"></script>
    <!--  chosen JS
		============================================ -->
    <script src="{{ asset('/asset/js/chosen/chosen.jquery.js') }}"></script>
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
