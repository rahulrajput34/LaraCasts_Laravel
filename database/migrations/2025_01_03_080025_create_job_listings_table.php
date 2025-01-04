<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   //TODO: to run the migration
    public function up(): void
    {
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('employer_id');
            // Create a foreign key column for the employer_id column
            $table->foreignIdFor(\App\Models\Employer::class)->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('salary');
            $table->timestamps();
        });
    }


    //TODO: to reverse the migration
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
