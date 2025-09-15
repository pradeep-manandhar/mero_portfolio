<?php

namespace App\Http\Controllers;
use App\Models\Programmer;
use App\Models\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Course::with('programmers')->get();
        return view('courses.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $programmer=Programmer::all();
        return view('courses.create',compact('programmer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'title'=>'required|string',
                'programmer_id' => 'required|exists:programmers,id'
            ]
        );

        $data=Course::create(
            [
                'title'=>$request->title,
            ]
        );

        $data->programmers()->sync(
            $request->programmer_id,
        );

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $view=Course::with('programmers')->find($id);

        if(!$view){
            abort(404,'Course not found');
        }
        return view('courses.view',compact('view'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
