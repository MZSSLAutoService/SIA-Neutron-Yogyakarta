<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    protected $table = 'sia_absensi';
	protected $fillable = ['id', 'tgl', 'date', 'time']; 
	public $primarykey='id';
}
