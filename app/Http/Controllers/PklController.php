<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facade;
use App\SiswaPkl;
use App\Filepdf;
use Carbon\Carbon;
use DateTime\DateTime;
use PDF;

class PklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dtPkl()
    {
      $datapkl = SiswaPkl::all();
      return view('master-admin',['siswas' => $datapkl]);
    }
    public function dtPdfPkl()
    {
      $datapdf = Filepdf::all();
      return view('masterpdf-admin',['filepdf' => $datapdf]);
    }
    public function dates()
    {

    }

    //mencetak pdf
    public function cetak_pdf()
    {
      $siswapkl = SiswaPkl::all();

      $pdf = PDF::loadview('cetak',['siswas'=>$siswapkl]);
      return $pdf->download('rekap-pkl.pdf');
    }

    //upload file pdf
  	public function upload(Request $request){
      $mytime = Carbon\Carbon::now();
      $mytime->toDateTimeString();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($status)
    {
        // $rows = SiswaPkl::find($status);
        // $rows->status=false;
        $datasiswa = SiswaPkl::find($status);
        $datasiswa->status = 1;
        $datasiswa->save();
        return redirect('/dataPkl');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
