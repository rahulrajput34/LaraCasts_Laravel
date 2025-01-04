<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        // Creating the tags table which contains the tags which are used to categorize the jobs
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });



        // Creating the pivot table
        // Used in relational databases to establish a many-to-many relationship between two tables
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            // rewrite the default column name of the foreign key id
            // Also give the contained and onDelete method and cascade method inside it because we want to delete the tag when the job is deleted
            $table->foreignIdFor(\App\Models\Job::class, 'job_listing_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Tag::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
