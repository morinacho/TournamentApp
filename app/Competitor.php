<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    protected $competitor = "competitors";
    protected $fillable = [
    	'name', 'age', 'sex', 'weight', 'height', 
    	'graduation', 'country', 'register', 'instructor_id', 
    	'category_id'
    ];

    public function instructor()
    {
    	return $this->belongsTo('App\Instructor');
    }
    public function category()
    {
    	return $this->belongsTo('App\Category');
    } 
}
