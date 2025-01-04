<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;


    // Here we are defining the one-to-many relationship between the employers and jobs
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    // Here we are defining the one-to-many relationship between the employers and users
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
}
