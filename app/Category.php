<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $category = "categories";
    protected $fillable = ['name', 'area_id'];

    public function competitors()
    {
    	return $this->hasMany('App\Competitor');
    }
    public function area()
    {
    	return $this->belongsTo('App\Area');
    }
}
