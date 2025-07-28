<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewApplicationMail;
use App\Models\Application;

Route::get('/test-mail', function () {
    $application = \App\Models\Application::latest()->first();
    Mail::to('kopipenggg17@gmail.com')->send(new \App\Mail\NewApplicationNotification($application));
    return 'Email sent!';
});


Route::get('/', [JobController::class, 'index'])->name('jobs.index');

Route::resource('jobs', JobController::class)->except(['index']);

Route::get('jobs/{job}/apply', [ApplicationController::class, 'create'])->name('applications.create');
Route::post('jobs/{job}/apply', [ApplicationController::class, 'store'])->name('applications.store');

Route::get('/admin/applications', [ApplicationController::class, 'index'])->name('applications.index');
