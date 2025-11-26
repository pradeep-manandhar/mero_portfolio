<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Skills;
use App\Models\Experience;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::first(); // or Auth::user() if logged in
        $projects = Project::all();
        $skills = Skills::all();
        $experience = Experience::all();

        return view('frontend.hero', compact('user', 'projects', 'skills', 'experience'));

        // return view('frontend.homepage');
    }

    public function dashboard(){
        return view('frontend.dashboard');
    }
    public function contact(){
        return view('frontend.contact');
    }


    public function projects(){
        return view('frontend.projects');
    }

    public function skills(){
        return view('frontend.skills');
    }

    public function experiences(){
        return view('frontend.experience');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
