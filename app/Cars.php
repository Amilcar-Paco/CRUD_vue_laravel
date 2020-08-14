<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = "cars";
    public $timestamps = true;

    protected $fillable = [
		'make','model'
	];
}
