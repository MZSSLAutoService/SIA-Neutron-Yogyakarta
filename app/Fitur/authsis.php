<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class authsis extends Model
{
    protected $table = 'sia_siswa';
	protected $fillable = ['id', 'password', 'name', 'ttl', 'agama', 'asal_sekolah', 'jenis_kelamin'];
	public $primarykey='id';
}
