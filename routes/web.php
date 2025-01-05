<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->cursorPaginate(3);   
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


// Store
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


// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});


// Show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', [
        'job' => $job
    ]);
});


// Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', [
        'job' => $job
    ]);
});

// Update  
// We passed same uri because its request to patch which is diff from req to get and our framework will understand it
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // authorize 
    // update 
    $job = Job::findOrFail($id);  // findOrFail will throw 404 if not found so we do not need to worry about null
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    // redirect
    return redirect('/jobs/'.$job->id);
});


// Destroy
// Here as well we passed same uri because its delete req
Route::delete('/jobs/{id}', function ($id) {
    // authorize    
    // delete  
    // $job = Job::findOrFail($id);
    // $job->delete();
    // We can inline it
    Job::findOrFail($id)->delete();

    // redirect
    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});