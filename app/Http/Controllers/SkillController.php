<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Skills::all();
        return view('skills', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_form()
    {
        //
        return view('skills.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'skill_name'=>'required|string|max:255',
            'skill_level'=>'required|in:beginner,intermediate,expert',
            'skill_category'=>'required|in:programming,cloud computing,cybersecurity,networking,hardware,machine learning/AI,data mining,database management',
        ]);

        Skills::create([
            'skill_name'=>$request->skill_name,
            'skill_category'=>$request->skill_category,
            'skill_level'=>$request->skill_level,
        ]);

        return redirect('/skills')->with(['message'=>"success on adding new skill"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $edit=Skills::findOrFail($id);
        return view('skills.view', compact('edit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $edit=Skills::findOrFail($id);
        return view('skills.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data=Skills::findOrFail($id);
        // dd($id);
        $validation=$request->validate(
            [
                'skill_name'=>'required|string',
                'skill_category'=>'required|in:programming,cloud computing,cybersecurity,networking,hardware,machine learning/AI,data mining,database management',
                'skill_level'=>'required|in:beginner,intermediate,expert',
            ]
        );

        $data->update([
            'skill_name'=>$request->skill_name,
            'skill_category'=>$request->skill_category,
            'skill_level'=>$request->skill_level,
        ]);

        return redirect()->route('skills')->with('message', 'Skills info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // dd($id);
        $skill=Skills::findOrFail($id);

        $skill->delete();

        return response()->json(['status' => 'success', 'message' => 'Skill deleted successfully']);
    }
}
