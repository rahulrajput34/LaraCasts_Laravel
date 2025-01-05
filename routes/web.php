<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->cursorPaginate(3);   
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


Route::post('/jobs', function () {

    // Validate the request
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);


    // Put it in the database
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});



Route::get('/jobs/create', function () {
    return view('jobs.create');
});



Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', [
        'job' => $job
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});