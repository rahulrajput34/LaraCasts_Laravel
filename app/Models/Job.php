<?php

// Modals inside the Laravel are useful for the handling the business logic
// For example if I am building a job board, I can create a Job modal to handle the job related logic

/*

what are the rules of creating a job
Are the job is filled, in progress
How we can store the store the job and how can we remove it

*/



// This name space is from the laravel (composer.json) file
namespace App\Models;
use Illuminate\Support\Arr;


class Job
{
    public static function all()
    {
        return [
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
    }


    public static function find($id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job) {
            abort(404);
        }

        return $job;
    }
}