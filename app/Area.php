<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $area =  "areas";
    protected $fillable = ['name', 'judge_id',
    	'category_id', 'competitor_id'
    ];

}
