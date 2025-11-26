<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function edit()
    {
        //
        $edit = User::findOrFail(2);
        return view('frontend.profile', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data=User::findOrFail($id);

        $filename = $data->profile_picture;

        $request->validate([
            'fullname' => 'required|string',
            'username'=> 'required|string',
            'introduction'=> 'required|string',
            'description'=> 'required|string',
            'email'=> 'required|email',
            'profile_picture'=> 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'github'=> 'required|string',
            'linkedin'=> 'required|string',
        ]);

        if ($request->hasFile('profile_picture')) {
            if ($data->profile_picture && Storage::disk('public')->exists($data->profile_picture)) {
                Storage::disk('public')->delete($data->profile_picture);
            }
            $filename = $request->file('profile_picture')->store('uploads/profile', 'public');
        }

        $data->update([
            'fullname' => $request->fullname,
            'username'=> $request->username,
            'introduction'=> $request->introduction,
            'description'=> $request->description,
            'email'=> $request->email,
            'profile_picture'=> $filename,
            'github'=> $request->github,
            'linkedin'=> $request->linkedin,
        ]);

        return redirect()->route('profile.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
