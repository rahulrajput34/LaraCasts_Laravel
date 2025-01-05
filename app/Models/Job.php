<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;



class Job extends Model
{   
    use HasFactory, Notifiable;

    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
        'employer_id'
    ];

    
    // Here we are defining the one-to-many relationship between the jobs and employers
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }


    // Here we are defining the many-to-many relationship between the jobs and tags
    public function tags()
    {
        // Here its gonna take by default foreign key named job_id because its a Job model
        // So we need to pass the job_listing_id as the foreign key manually over here
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
    
}