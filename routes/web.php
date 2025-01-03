<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


// What ever we are passing as a second argument inside the view it gonna take it as a variables
// like here the greetings is a variable name which contain the value Hello World
Route::get('/', function () {
    return view('home');
});


// Here we are passing the jobs over here.
// The data of that would be appear only inside the jobs.blade.php if we want to use it
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Full Stack Developer',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Back End Developer',
                'salary' => '$40,000'
            ],
            [
                'id' => 3,
                'title' => 'Front End Developer',
                'salary' => '$30,000'
            ]
        ]
    ]);
});


// This is the logic when we perticularly select the one note
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
         [
            'id' => 1,
             'title' => 'Full Stack Developer',
             'salary' => '$50,000'
         ],
         [
             'id' => 2,
             'title' => 'Back End Developer',
             'salary' => '$40,000'
         ],
         [
              'id' => 3,
             'title' => 'Front End Developer',
             'salary' => '$30,000'
         ]
    ];
     // Here we give the {id} so that if I will pass the 1 inside the url it would return the 1
     // if I  pass the 2 inside the url it will return the 2
     // So that here we gonna loop through this jobs and get the value of it according to its id
     // We can do it using the loop but here we are using the laravel library so we gonna proceed according to it


     // This function job get first the first element of the array then second then third
     // It works according to if the given id is the same as the id then it will take that array
    //  TODO: make sure to give the double eq only
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', [
        'job' => $job
    ]);

});


Route::get('/contact', function () {
    return view('contact');
});