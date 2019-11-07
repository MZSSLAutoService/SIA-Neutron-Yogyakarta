<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = 'sia_event';
	protected $fillable = ['id', 'name', 'desc', 'tgl', 'jam', 'loc', 'lat', 'long']; 
	public $primarykey='id';
}
