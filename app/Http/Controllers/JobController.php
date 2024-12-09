<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(10);
        return view('jobs.index',[
            'jobs' => $jobs
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        return view('jobs.show',['job' => $job]);
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3' , 'max:25'],
            'salary' => 'required',
        ]);
        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);
        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );
        return redirect('/jobs');
    }
    public function edit(Job $job)
    {
        Gate::authorize('edit',$job);
        return view('jobs.edit',['job' => $job]);
    }
    public function update(Job $job)
    {
        Gate::authorize('edit',$job);
        //validate
        request()->validate([
            'title' => ['required', 'min:3' , 'max:40'],
            'salary' => 'required',
        ]);
        //update
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        //redirect
        return redirect('/jobs/'.$job->id);
    }
    public function destroy(Job $job)
    {
        Gate::authorize('edit',$job);
        $job->delete();
        return redirect('/jobs');
    }
}
