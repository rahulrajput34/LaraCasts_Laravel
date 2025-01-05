<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


Route::view('/', 'home');
Route::view('/contact', 'contact');


Route::resource('jobs', JobController::class);


// auth

// To take the user to the registration form when he clicks on the register link.
Route::get('/register', [RegisterController::class, 'create']);

// When the form is submitted the store method will be called to validate the form and create the user.
Route::post('/register', [RegisterController::class, 'store']);


// To take the user to the login form when he clicks on the login link.
Route::get('/login', [SessionController::class, 'create']);

// When the form is submitted the store method will be called to validate the form and log the user in.
Route::post('/login', [SessionController::class, 'store']);