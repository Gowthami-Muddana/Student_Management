<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use illuminate\Http\Response;
use App\Models\Batch;
use App\Models\Student;


use illuminate\view\view;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments', $enrollments);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        $batches = Batch::pluck('name', 'id');
        $students = Student::pluck('name', 'id');
        $lastEnrollment = Enrollment::latest()->first(); // Get the latest enrollment
        $enrollNo = $lastEnrollment ? $lastEnrollment->enroll_no + 1 : 1;
        return view('enrollments.create', compact('batches', 'students'))->with('enroll_no', $enrollNo);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $lastEnrollment = Enrollment::latest()->first(); // Get the latest enrollment
        // $enrollNo = $lastEnrollment ? $lastEnrollment->enroll_no + 1 : 1;

        // Create the new enrollment
        $enrollment = new Enrollment();
        $enrollment->enroll_no = $request->enroll_no;
        $enrollment->batch_id = $request->batch_id;
        $enrollment->student_id = $request->student_id;
        $enrollment->join_date = $request->join_date;
        $enrollment->fee = $request->fee;
        // Add other fields as needed...

        // Save the enrollment
        $enrollment->save();

        // $input = $request->all();

        // Enrollment::create($input);

        return redirect('enrollments');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments = Enrollment::find($id);


        $enrollments = Enrollment::findOrFail($id);
        $batches = Batch::all(); // Fetch all batches
$students= Student::all();
        return view('enrollments.edit', compact('enrollments', 'batches','students'));


       // return view('enrollments.edit')->with('enrollments', $enrollments);

        // $enrollments = Enrollment::find($id);
        // return view('enrollments.edit')->with('enrollments', $enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id): RedirectResponse
    {
        $enrollments = Enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);
        return redirect('enrollments')->with('enrollments', $enrollments);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!');
    }
}