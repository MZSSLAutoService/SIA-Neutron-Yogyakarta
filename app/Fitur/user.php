<?php

namespace App\Fitur;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'users';
	protected $fillable = ['id', 'name', 'email', 'username', 'password'];
	public $primarykey='id';
}
