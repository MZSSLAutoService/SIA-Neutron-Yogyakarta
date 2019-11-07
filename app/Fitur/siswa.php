<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'sia_siswa';
	protected $fillable = ['id','nis', 'name', 'ttl', 'agama', 'asal_sekolah', 'jenis_kelamin']; 
	public $primarykey='id';
}
