<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Competitor;
use App\Instructor;

class CompetitorController extends Controller
{
	public function index()
    {

    }

    public function view($id)
    {
        $competitors = Competitor::where('instructor_id', $id)->get();
        return view('register.competitor.view')->with('competitors', $competitors);
    }

    public function create()
    {
        return view('register.competitor.create');
    }

    public function store(Request $request)
    {
        $competitor = new Competitor($request->all());
        $competitor->save();
        Flash::success('Competitor '. $competitor->name .' se ha registrado correctamente');
        return view('register.competitor.create');
    }

    public function show($id)
    {
    	
    }

    public function edit($id)
    {
    	
    }

    public function update(Request $request, $id)
    {
    	
    }

    public function destroy($id)
    {
    	
    }
}
