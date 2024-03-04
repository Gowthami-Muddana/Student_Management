<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use illuminate\Http\Response;
use App\Models\Batch;
use App\Models\Course;
use illuminate\view\view;
use Illuminate\Support\Facades\Validator;


class BatchController extends Controller
{
    public function index(): view
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches', $batches);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        $courses = Course::pluck('name', 'id');
        return view('batches.create', compact('courses'));
        //  return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4|unique:batches,name',
            'start_date'=> 'required|date'
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input = $request->all();

        Batch::create($input);
        session ()->flash('success', 'created succuessfully');

        return redirect('batches');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $batches = Batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $batches = Batch::find($id);
$courses=Course::all();
        return view('batches.edit',compact('batches','courses'))->with('batches', $batches);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batches = Batch::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'Batch Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batch deleted!');
    }
}