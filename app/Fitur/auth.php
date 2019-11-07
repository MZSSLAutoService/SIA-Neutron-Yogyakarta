<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class auth extends Model
{
    protected $table = 'users';
	protected $fillable = ['id', 'email', 'name', 'username'];
	public $primarykey='id';
}
