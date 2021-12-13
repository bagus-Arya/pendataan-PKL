<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filepdf extends Model
{
  protected $table = "filepdf";
  protected $fillable = ['nosurat','nama','fsurat'];
}
