<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::with('employer')->latest()->cursorPaginate(3);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }


    public function create()
    {
        return view('jobs.create');
    }


    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }


    public function store()
    {
        // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);


        // create the job
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);
        return redirect('/jobs');
    }


    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }


    public function update(Job $job)
    {
        // authorize 

        // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // update 
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);
        // redirect
        return redirect('/jobs/' . $job->id);
    }

    
    public function destroy(Job $job)
    {
        // authorize    
        // delete  
        $job->delete();

        // redirect
        return redirect('/jobs');
    }
}
