<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});





// if I pass the file name over here It will display the ui of that
// if I pass the string over there it will display the what ever inside the string
// if I pass the array over there it will display the array as a json
// Route::get('/contact', function () {
//     return ['name' => 'Raj', 'age' => 22];
// });


Route::get('/about', function () {
    return view('about');
});
