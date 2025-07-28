<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Display all jobs on home page
    public function index()
    {
        $jobs = Job::latest()->get();
        return view('jobs.index', compact('jobs'));
    }

    // Show form to create a new job
    public function create()
    {
        return view('jobs.create');
    }

    // Store new job in DB
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'salary_range' => 'required',
        ]);

        Job::create($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job posted successfully!');
    }

    // Show single job (optional)
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    // Edit form (optional)
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    // Update job in DB
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'salary_range' => 'required',
        ]);

        $job->update($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully!');
    }

    // Delete job
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully!');
    }

    // API Endpoint: return all jobs as JSON
    public function apiIndex()
    {
        return response()->json(Job::latest()->get());
    }
}
