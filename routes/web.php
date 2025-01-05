<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


Route::view('/', 'home');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });   


// If we do not want to anything above
// Route::resource('jobs', JobController::class, [
//     'except' => ['show']
// ]);

Route::resource('jobs', JobController::class);
Route::view('/contact', 'contact');
