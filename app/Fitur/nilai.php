<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table = 'sia_nilai';
	protected $fillable = ['id', 'tgl', 'kemampuan', 'jenis_tes', 'bidang', 'nilai_tpa', 'nilai_umum']; 
	public $primarykey='id';
}