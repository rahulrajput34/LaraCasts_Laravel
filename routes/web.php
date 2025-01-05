<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});



Route::get('/jobs', function () {
    // The latest will show the latest added jobs inside the database first
    $jobs = Job::with('employer')->latest()->cursorPaginate(3);   
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


Route::post('/jobs', function () {
    // We can get every field from the form using request()->all() method
    // dd(request()->all());
    // Once we get the data we can store it in the database
   
    // First we need to 
    // Validate the request...

    // Then we can create a new job inside the database

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});



// We pass the whatsoever routes before passing /jobs/{id} route else its give error
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