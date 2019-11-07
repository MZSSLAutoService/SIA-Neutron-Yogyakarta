<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class ringmat extends Model
{
    protected $table = 'sia_ringmat';
	protected $fillable = ['id', 'name', 'desc', 'file']; 
	public $primarykey='id';
}
