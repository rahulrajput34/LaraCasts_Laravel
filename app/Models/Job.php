<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;


// here When we extend the Model class, we get access to a lot of useful methods that we can use to interact with the database.
// We do not need to create all that functionality manually. 
// we have many methods available to us, such as all(), find(), create(), update(), delete(), and more.


class Job extends Model
{   
    // This is how we can give the table name to the model
    // By giving the table over here it gonna take this table data from the database
    protected $table = 'job_listings';


    // By passing the fillable property we can tell Laravel which fields are allowed to be mass-assigned.
    protected $fillable = [
        'title',
        'salary',
    ];
    
}