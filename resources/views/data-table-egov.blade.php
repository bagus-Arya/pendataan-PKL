@extends('master-table')
@section('ShowTable')
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
                  <h2>Data Table</h2>
                  <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
              <div class="breadcomb-report">
                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
              </div>
            </div>
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
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="data-table-list">
                      <div class="basic-tb-hd">
                          <h2>Mahasiswa PKL Bidang E-Gov</h2>
                      </div>
                      <div class="table-responsive">
                          <table id="data-table-basic" class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Nama</th>
                                      <th>Asal Sekolah/Kampus</th>
                                      <th>Opsi</th>
                                  </tr>
                              </thead>
                              @foreach($siswas as $s)
                              <tbody>
                                <tr>
                                  <td>{{ $s->nama }}</td>
                                  <td>{{ $s->asal_sekolah }}</td>
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
@endsection
