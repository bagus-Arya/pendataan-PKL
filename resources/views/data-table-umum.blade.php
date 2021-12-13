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
                          <h2>Mahasiswa PKL Bidang UMUM</h2>
                      </div>
                      <div class="table-responsive">
                          <table id="data-table-basic" class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Nomor Identitas Mahasiswa</th>
                                      <th>Nama</th>
                                      <th>Status</th>
                                      <th>Awal PKL</th>
                                      <th>Akhir PKL</th>
                                      <th>Sisa Waktu PKL</th>
                                  </tr>
                              </thead>
                              <?php
                                use Carbon\Carbon;

                                $now  = Carbon::now();

                                foreach ($siswas as $sisa) {
                                  $awal = \Carbon\Carbon::parse($sisa->awalpkl);
                                  $akhir = \Carbon\Carbon::parse($sisa->akhirpkl);
                                }
                               ?>
                              @foreach($siswas as $s)
                              <tbody>
                                <tr>
                                  <td>{{ $s->nim }}</td>
                                  <td>{{ $s->nama }}</td>
                                    @if ($s->status=='1')
                                      <td><span style="color: green;">Telah Dikonfirmasi Sedang PKL, Silahkan ke Bagian Umum</span></td>
                                    @elseif ($s->status=='2')
                                      <td><span style="color: green;">Selesai PKL</span></td>
                                    @else
                                      <td><span style="color: blue;">Menunggu Konfirmasi</span></td>
                                    @endif
                                  <td>{{ $s->awalpkl }}</td>
                                  <td>{{ $s->akhirpkl }}</td>
                                  <!-- <td>{{ $akhir->diffInDays($s->awalpkl, false) }} hari</td> -->
                                  <td>{{ $now->diffInDays($s->akhirpkl, false) }} hari</td>
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
