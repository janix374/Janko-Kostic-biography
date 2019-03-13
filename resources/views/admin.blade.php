@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="card-body"><a href="admin/create" class="btn btn-info">Create new job position</a></div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(count($jobs) > 0)
                @foreach($jobs as $job)
                    <div class="row job-all">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><span class="job-des">Company : </span><a href="admin/{{$job->id}}">{{$job->companyname}}</a><br>
                                        <span class="jobdate"> {{$job->jobdate}}</span></p>
                                </div>
                                <div class="col-sm-12">
                                    <p><span class="job-des">Position : </span>{{$job->jobposition}}</p>
                                </div>
                                <div class="col-sm-12">
                                    <p><span class="job-des">Description : </span>{!! nl2br(e($job->description)) !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center"><img src="{{asset("storage/images/$job->cover_image")}}" class="img-fluid" alt="Logo"><br>
                        <p>Company logo</p>
                        </div>
                    
                    </div>
                    <hr/>
                @endforeach
            @else
                <p>No posts found</p>
            @endif
        </div>
    </div>


@endsection
