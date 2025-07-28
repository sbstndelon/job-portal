<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewApplicationMail;
use Illuminate\Support\Facades\Log;

class ApplicationController extends Controller
{
    // Show the job application form
    public function create(Job $job)
    {
        return view('applications.create', compact('job'));
    }

    // Handle the submission of a job application
    public function store(Request $request, Job $job)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email',
            'phone'  => 'required',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumePath = null;

        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        // Create application record
        $application = $job->applications()->create([
            'name'   => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'resume' => $resumePath,
        ]);

        // Send email to admin
        try {
            Mail::to('kopipenggg17@gmail.com')->send(new NewApplicationMail($application));
        } catch (\Exception $e) {
            Log::error('Email failed to send: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    // Admin: list all applications
    public function index()
    {
        $applications = Application::with('job')->latest()->get();
        return view('applications.index', compact('applications'));
    }
}
