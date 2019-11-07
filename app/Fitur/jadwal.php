<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table = 'sia_jadwal';
	protected $fillable = ['id', 'kelas', 'mapel', 'from', 'to', 'ruang']; 
	public $primarykey='id';
}
