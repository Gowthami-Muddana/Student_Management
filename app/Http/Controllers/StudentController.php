<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use illuminate\Http\Response;
use App\Models\Student;
use illuminate\view\view;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        // $lastStudent = Student::latest()->first();
        // $studentid = $lastStudent ? $lastStudent->id + 1 : 1;
        return view('students.create');
      //  session ()->flash('success', 'created succuessfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100|min:4',
            'email' => 'required|email|unique:students,email',
            'mobile' => 'required|numeric|min:10|unique:students,mobile'
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Student::create($request->all());
        session()->flash('success', 'Stored successfully');
        return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $students = Student::find($id);
        return view('students.show')->with('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
        // session ()->flash('success', 'edited succuessfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100|min:4',
            'email' => 'required|email',
            'mobile' => 'required|numeric'
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        session()->flash('success', 'updated succuessfully');
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        session()->flash('success', 'deleted succuessfully');
        return redirect('students');
    }
}
