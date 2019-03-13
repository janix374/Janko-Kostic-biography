@extends('layouts.app')

@section('content')
    <div class="container">

        <div>
            @if(count($jobs) > 0)
                @foreach($jobs as $job)
                    <div class="row job-all">
                        <div class="col-sm-12">
                            <p><span class="job-des">Company : </span><a href="jobs/{{$job->id}}">{{$job->companyname}}</a></p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="job-des">Position : </span>{{$job->jobposition}}</p>
                        </div>
                        <div class="col-sm-12">
                            <p><span class="job-des">Description : </span>{!! nl2br(e($job->description)) !!}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No posts found</p>
            @endif

        </div>





    </div>

@endsection
