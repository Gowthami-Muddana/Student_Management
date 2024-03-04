<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use illuminate\Http\Response;
use App\Models\Course;
use Illuminate\Support\Facades\Validator;
use illuminate\view\view;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $courses = Course::all();
        return view('courses.index')->with('courses' , $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
      return view('courses.create');
     // Session ()->flash('success', 'Course Created succuessfully');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100|min:4',
            'startdate'=> 'required|date',
            'enddate'=>'required|date|after:startdate'

            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
      
        Course::create($request->all());
        session()->flash('success', 'Course Added succuessfully');

        return redirect('courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $courses = Course::find($id);
        return view('courses.show')->with('courses' , $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {

        
        $course = Course::find($id);
        return view('courses.edit')->with('courses' , $course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100|min:4',
            'startdate'=> 'required|date',
            'enddate'=>'required|date|after:startdate'
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $course = Course::find($id);
        $input = $request->all();
        $course -> update($input);
        session()->flash('success', 'updated succuessfully');

        return redirect('courses');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse

    {
        Course::destroy($id);
        session()->flash('success', 'Deleted succuessfully');

        return redirect('courses');

    }
}
