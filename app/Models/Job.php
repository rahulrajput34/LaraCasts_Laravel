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
    ];

    
    // To access the employer of the job
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    
}