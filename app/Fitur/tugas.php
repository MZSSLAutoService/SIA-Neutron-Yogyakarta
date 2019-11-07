<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    protected $table = 'sia_tugas';
	protected $fillable = ['id', 'name', 'desc', 'file']; 
	public $primarykey='id';
}
