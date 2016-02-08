<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    $judge = "judges";
    $fillable = [
    	'name', 'email', 'graduation', 'register', 
    	'judge_register', 'country'
    ];
}
