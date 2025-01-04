<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;


    // This will give the Collection of the jobs of the employer because we give the hasMany relationship  
    // We can also loop over it because the response gonna be a collection
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    
}
