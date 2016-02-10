<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = "instructors";
    protected $fillable = [
    	'name', 'email', 'phone', 'register', 'country'
    ];

    public function competitors()
    {
    	return $this->hasMany('App\Competitor');
    }
}
