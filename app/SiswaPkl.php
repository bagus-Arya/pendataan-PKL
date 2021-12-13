<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SiswaPkl extends Authenticatable
{
    protected $table = "siswas";
    protected $fillable = ['nim','nosurat','nama','asal_sekolah','prodi','hp','jeniskelamin','bidang','status','awalpkl','akhirpkl'];
}
