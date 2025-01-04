<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});



Route::get('/jobs', function () {
    // TODO: this is how we can get rid of the n+1 problems
    // job with the relationship name and then get
    $jobs = Job::with('employer')->cursorPaginate(3);   
    return view('jobs', [
        'jobs' => $jobs
    ]);
});



Route::get('/jobs/{id}', function ($id) {
    
    $job = Job::find($id);

    return view('job', [
        'job' => $job
    ]);

});


Route::get('/contact', function () {
    return view('contact');
});