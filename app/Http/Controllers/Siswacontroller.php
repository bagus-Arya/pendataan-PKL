<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SiswaPkl;
use App\Filepdf;
use Carbon\Carbon;
use DateTime;
use Response;
use \PDF;

class Siswacontroller extends Controller
{
  //Yang belum dibuat
  //Perhitungan jumlah lama KP
  //Dropzone dan Status Konfirmasi
  // method index() untuk menampilkan data ke halaman utama
  public function index()
 {
   // mengambil data dari table siswas
	$siswapkl['egov'] = DB::table('siswas')->where('bidang', '=', 'Bidang E-Goverment')->get();
  $siswapkl['pkp'] = DB::table('siswas')->where('bidang', '=', 'Bidang Pengelolaan Komunikasi Publik')->get();
  $siswapkl['pip'] = DB::table('siswas')->where('bidang', '=', 'Bidang Pengelolaan Informasi Publik')->get();
  $siswapkl['santik'] = DB::table('siswas')->where('bidang', '=', 'Bidang Persandian dan Statistik')->get();
  $siswapkl['tik'] = DB::table('siswas')->where('bidang', '=', 'Bidang Teknologi Informasi dan Komunikasi')->get();
  $siswapkl['umum'] = DB::table('siswas')->where('bidang', '=', 'Bidang Umum, Sekretariat dan Keuangan')->get();
  $siswapkl['waiting'] = DB::table('siswas')->where('status', '=', '0')->get();
  $siswapkl['approve'] = DB::table('siswas')->where('status', '=', '1')->get();
    // mengirim data pegawai ke view index
  return view('index',['siswapkl' => $siswapkl]);
 }
 public function toForm(){
   return view('form-components');
 }

 public function toAdd(Request $request){

   $this->validate($request,[
     'nama' => 'required',
     'asal' => 'required',
     'nim' => 'required',
     'nosurat' => 'required',
     'prodi' => 'required',
     'hp' => 'required',
     'jeniskelamin' => 'required',
     'awalpkl' => 'required',
     'akhirpkl' => 'required',
     'bidang' => 'required',
   ]);
   $siswapkl = SiswaPkl::all()->count();
   if ($siswapkl >= 100) {
     // return back();
     return back()->with(['info'=>'Maaf Kuota Penuh, Mohon Tunggu Informasi Selanjutnya']);
   }else{
     $sdate = $request->awalpkl;
     $fdate = $request->akhirpkl;
     $dates = DateTime::createFromFormat('d/m/Y', $sdate);
     $dates->format('d-m-Y');
     $datef = DateTime::createFromFormat('d/m/Y', $fdate);
     $datef->format('d-m-Y');

     // $from = Carbon::createFromFormat('Y-m-d H:s:i', $sdate);
     // $to = Carbon::createFromFormat('Y-m-d H:s:i', $fdate);
     //echo $date->format('Y-m-d');\
     // $interval = $datetime1->diff($datetime2);
     // $days = $interval->format('%a');

     $file = $request->file('file')->getClientOriginalName();
     $destination = base_path() . '/public/datapdf';
     $request->file('file')->move($destination,$file);
     $fpath="/public/datapdf/$file";

     SiswaPkl::create([
       'nim'=>$request->nim,
       'nosurat'=>$request->nosurat,
       'nama'=>$request->nama,
       'asal_sekolah'=>$request->asal,
       'prodi'=>$request->prodi,
       'hp'=>$request->hp,
       'jeniskelamin'=>$request->jeniskelamin,
       'bidang'=>$request->bidang,
       'awalpkl'=>$dates,
       'akhirpkl'=>$datef,
     ]);
     Filepdf::create([
        'nosurat' => $request->nosurat,
        'nama' => $request->nama_file,
        'fsurat' => $file,
      ]);

    // return back();
    return back()->with(['info'=>'Data Berhasil Disimpan']);

  }

 }
 public function toEgov(Request $request){
   // mencari data Bidang E-Gov dengan method where
   $egov = DB::table('siswas')->where('bidang', '=', 'Bidang E-Goverment')->get();
   // mengirim data siswa ke view data-table-egov
   return view('data-table-egov',['siswas'=>$egov]);
 }
 public function toPip(){
   $siswapkl = DB::table('siswas')->where('bidang', '=', 'Bidang Pengelolaan Informasi Publik')->get();
   // mengirim data siswa ke view data-table-pip
   return view('data-table-pip',['siswas' => $siswapkl]);
 }
 public function toPkp(){
   $siswapkl = DB::table('siswas')->where('bidang', '=', 'Bidang Pengelolaan Komunikasi Publik')->get();
   // mengirim data siswa ke view data-table-pkp
   return view('data-table-pkp',['siswas' => $siswapkl]);
 }
 public function toSantik(){
   $siswapkl = DB::table('siswas')->where('bidang', '=', 'Bidang Persandian dan Statistik')->get();
   // mengirim data siswa ke view data-table-santik
   return view('data-table-santik',['siswas' => $siswapkl]);
 }
 public function toTik(){
   $siswapkl = DB::table('siswas')->where('bidang', '=', 'Bidang Teknologi Informasi dan Komunikasi')->get();
   // mengirim data siswa ke view data-table-tik
   return view('data-table-tik',['siswas' => $siswapkl]);
 }
 public function toUmum(){
   $siswapkl = DB::table('siswas')->where('bidang', '=', 'Bidang Umum, Sekretariat dan Keuangan')->get();
   // mengirim data siswa ke view data-table-tik
   return view('data-table-umum',['siswas' => $siswapkl]);
 }
 public function hapus($id)
 {
   // menghapus data
   $dtdata = SiswaPkl::find($id);
   $dtdata->delete();
   return back()->with(['hapus'=>'Data Berhasil Dihapus']);
 }

 public function todownload($fsurat)
 {
   //download single file
   $path = public_path(). "/datapdf/$fsurat";

   $header = [
     'Content-Type' => 'application/pdf',
   ];
   return Response()->download($path, $fsurat, $header);

 }
 public function toviews($fsurat)
 {
  $path = public_path(). "/datapdf/$fsurat";

  return Response::make(file_get_contents($path), 200, [
      'Content-Type' => 'application/pdf',
      'Content-Disposition' => 'inline; filename="'.$path.'"'
  ]);

 }


}
