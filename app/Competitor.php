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
}
