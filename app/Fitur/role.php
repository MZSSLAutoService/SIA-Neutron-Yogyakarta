<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'sia_role';
	protected $fillable = ['id','kode', 'name']; 
	public $primarykey='id';
}
