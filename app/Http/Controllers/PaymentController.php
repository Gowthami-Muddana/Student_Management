<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Enrollment;
use App\Models\Course;
use illuminate\view\view;


class PaymentController extends Controller
{
    public function index(): view
    {
        $payments = Payment::all();
        return view('payments.index')->with('payments', $payments);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.create', compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Payment::create($input);

        return redirect('payments')->with('flash_message', 'Payment Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $payments = Payment::find($id);
        return view('payments.show')->with('enrollments', $payments);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payments = Payment::find($id);
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.edit', compact('payments', 'enrollments'));

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payments = Payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'Payment Updated!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'Payment deleted!');
    }

}