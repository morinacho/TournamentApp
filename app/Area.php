<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $area =  "areas";
    protected $fillable = ['name'];

    public function judges()
    {
    	return $this->hasMany('App\Judge');
    }
    public function categories()
    {
    	return $this->hasMany('App\Category');
    }

}
