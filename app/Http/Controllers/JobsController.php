<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;



class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'companyname' => 'required',
            'jobposition' => 'required',
            'description' => 'required',
        ]);

        //create post
        $job = new Job;
        $job->companyname = $request->input('companyname');
        $job->jobposition = $request->input('jobposition');
        $job->description = $request->input('description');
        $job->save();

        return redirect('/jobs')->with('success', 'Job Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('jobs.show')->with('job',$job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('jobs.edit')->with('job',$job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'companyname' => 'required',
            'jobposition' => 'required',
            'description' => 'required'
        ]);

        //create post
        $job = Job::find($id);
        $job->companyname = $request->input('companyname');
        $job->jobposition = $request->input('jobposition');
        $job->description = $request->input('description');
        $job->save();

        return redirect('/jobs')->with('success', 'Job updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect('/jobs')->with('success', 'Job removed');
    }
}
