<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->get();;
        return view('admin')->with('jobs',$jobs);
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
            'jobdate' => 'required',
            'officialsite' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('cover_image')){
            //file name with extention
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //uploade img
            $path = $request->file('cover_image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //create post
        $job = new Job;
        $job->companyname = $request->input('companyname');
        $job->jobposition = $request->input('jobposition');
        $job->description = $request->input('description');
        $job->jobdate = $request->input('jobdate');
        $job->officialsite = $request->input('officialsite');
        $job->cover_image = $fileNameToStore;
        $job->save();

        return redirect('admin')->with('success', 'Job Created');
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
            'description' => 'required',
            'jobdate' => 'required',
            'officialsite' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('cover_image')){
            //file name with extention
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //uploade img
            $path = $request->file('cover_image')->storeAs('public/images', $fileNameToStore);
        }


        //create post
        $job = Job::find($id);
        $job->companyname = $request->input('companyname');
        $job->jobposition = $request->input('jobposition');
        $job->description = $request->input('description');
        $job->jobdate = $request->input('jobdate');
        $job->officialsite = $request->input('officialsite');
        if($request->hasFile('cover_image')){
            $job->cover_image = $fileNameToStore;
        }
        $job->save();

        return redirect('/admin')->with('success', 'Job updated');
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
        return redirect('/admin')->with('success', 'Job removed');
    }
}
