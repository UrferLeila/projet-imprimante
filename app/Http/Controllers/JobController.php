<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('home', compact('jobs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'path' => 'required|max:200',
            'name_state' => 'required|exists:state,name',
            'stl_filename' => 'required|max:100',
            // 'stl_filename'=> ,
            // 'gcode_filename'=> ,
            // 'filament'=> ,
            // 'duration'=> ,
            // 'create_at'=> ,
            // 'slice_at'=> ,
            // 'print_at'=> ,
            // 'finish_at'=> ,
            // 'id_printer'=> ,

            'id_slicer_profile' => 'required|exists:slicer_profiles,id',
            // 'id_user'=> ,
        ]);

        Job::create([
            'name' => $validated['name'],
            'path' => $validated['path'],
            'name_state' => $validated['name_state'],
            'stl_filename' => $validated['stl_filename'],
            'id_slicer_profile' => $validated['id_slicer_profile'],
            'id_user' => Auth::id(), 
            'create_at' => now(), 
        ]);

        return redirect()->route('jobs.index')->with('success', 'Job created successfully!');
    }
}