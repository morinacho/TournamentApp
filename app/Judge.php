<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    protected $judge = "judges";
    protected $fillable = [
    	'name', 'email', 'graduation', 'register', 
    	'judge_register', 'country', 'area_id'
    ];

    public function area()
    {
    	return $this->belongsTo('App\Area');
    }
}
