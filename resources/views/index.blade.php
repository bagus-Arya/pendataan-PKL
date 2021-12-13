@extends('master')
@section('statusArea')
<!-- Start Status area -->
      <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-3">
                    <div>
                        <h2><span class="counter">{{ $siswapkl['umum']->count() }}</span></h2>
                        <p>Total Anak PKL Bidang Umum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-3">
                    <div>
                        <h2><span class="counter">{{ $siswapkl['pip']->count() }}</span></h2>
                        <p>Total Anak PKL Bidang PIP</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-3">
                      <div>
                          <h2><span class="counter">{{ $siswapkl['pkp']->count() }}</span></h2>
                          <p>Total Anak PKL Bidang PKP</p>
                      </div>
                  </div>
            </div>
          </div>
          <div class="row top-buffer">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-3">
                    <div>
                        <h2><span class="counter">{{ $siswapkl['tik']->count() }}</span></h2>
                        <p>Total Anak PKL Bidang TIK</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-3">
                    <div>
                        <h2><span class="counter">{{ $siswapkl['egov']->count() }}</span></h2>
                        <p>Total Anak PKL Bidang E-GOV</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-3">
                    <div>
                        <h2><span class="counter">{{ $siswapkl['santik']->count() }}</span></h2>
                        <p>Total Anak PKL Bidang SANTIK</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="row top-buffer">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-3">
                    <div>
                        <h2><span class="counter">{{ $siswapkl['approve']->count() }}</span></h2>
                        <p>Sedang PKL</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-3">
                    <div>
                        <h2><span class="counter">{{ $siswapkl['waiting']->count() }}</span></h2>
                        <p>Menunggu Konfirmasi</p>
                    </div>
                </div>
            </div>
          </div>
      </div>
<!-- End Status area-->
@endsection
