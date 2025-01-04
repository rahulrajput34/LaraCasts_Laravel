<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    // Here we are defining the many-to-many relationship between the tags and jobs
    public function jobs()
    {
        // This one is also taking the  foreign key named tag_id by default
        // So we need to pass the job_listing_id as the foreign key manually over here
        return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id');
    }
}