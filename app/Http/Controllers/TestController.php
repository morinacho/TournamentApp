<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Area;
class TestController extends Controller
{
    public function view($id)
    {
    	$area = Area::find($id);
    	dd($area);
    }
}
