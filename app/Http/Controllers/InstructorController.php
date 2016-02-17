<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Instructor;
use Laracasts\Flash\Flash;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::orderBy('name', 'ASC')->paginate(5);
    	return view('register.instructor.index')->with('instructors', $instructors);
    }

    public function create()
    {
    	return view('register.instructor.create');
    }

    public function store(Request $request)
    {
    	$instructor = new Instructor($request->all());
        $instructor->save();
        Flash::success('Instructor '. $instructor->name .' se ha registrado correctamente');
        return view('register.competitor.create')->with('id', $instructor->id);
    }

    public function show($id)
    {
    	
    }

    public function edit($id)
    {
       $instructor = Instructor::find($id);
       return view('register.instructor.edit')->with('instructor', $instructor);
    }

    public function update(Request $request, $id)
    {
        $instructor = Instructor::find($id);
        $instructor->fill($request->all());
        $instructor->save();

        Flash::warning('Instructor '. $instructor->name .' se ha modificado correctamente');
        return redirect()->route('register.instructors.index');
    	
    }

    public function destroy($id)
    {
    	
    }
}
