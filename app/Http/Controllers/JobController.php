<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index(){
        //    $jobs = Job::with('employer')->get();
        $jobs = Job::with('employer')->paginate(5);
        //    $jobs = Job::with('employer')->simplePaginate(5);
        //    $jobs = Job::with('employer')->cursorPaginate(5); // faster
        return view('jobs.index',[
            'jobs' => $jobs
        ]);
    }
    public function create(){
        return view('jobs.create');
    }
    public function show(Job $job){
        return view('jobs.show',['job' => $job]);
    }
    public function store(){
        request()->validate([
            'title' => ['required', 'min:3' , 'max:25'],
            'salary' => 'required',
        ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);
        return redirect('/jobs');
    }
    public function edit(Job $job){
        return view('jobs.edit',['job' => $job]);
    }
    public function update(Job $job){
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
    public function destroy(Job $job){
        $job->delete();
        return redirect('/jobs');
    }
}
