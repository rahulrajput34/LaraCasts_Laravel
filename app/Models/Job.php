<?php


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