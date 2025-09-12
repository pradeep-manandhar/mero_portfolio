<?php

namespace App\Http\Controllers;

use App\Models\Programmer;
use App\Models\Course;

use Illuminate\Http\Request;

class ProgrammerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Programmer::with('courses')->get();
        return view('programmers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $course=Course::all();
        return view('programmers.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'name'=>'required|string',
                'course_id' => 'required|exists:courses,id'
            ]
        );

        $data=Programmer::create(
            [
                'name'=>$request->name,
            ]
        );

        $data->courses()->sync(
            $request->course_id,
        );

        return redirect()->route('programmers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Programmer $programmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programmer $programmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programmer $programmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programmer $programmer)
    {
        //
    }
}
