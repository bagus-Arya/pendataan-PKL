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
                          <h2>Mahasiswa PKL Bidang PIP</h2>
                      </div>
                      <div class="table-responsive">
                          <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Asal Sekolah</th>
                                    <th>Status</th>
                                    <th>Awal PKL</th>
                                    <th>Akhir PKL</th>
                                </tr>
                            </thead>
                            @foreach($siswas as $s)
                            <tbody>
                              <tr>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->prodi }}</td>
                                <td>{{ $s->asal_sekolah }}</td>
                                  @if ($s->status=='1')
                                    <td><span style="color: green;">Telah Dikonfirmasi, Silahkan datang ke bagian Umum</span></td>
                                  @else
                                    <td><span style="color: blue;">Menunggu Konfirmasi</span></td>
                                  @endif
                                <td>{{ $s->awalpkl }}</td>
                                <td>{{ $s->akhirpkl }}</td>
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
