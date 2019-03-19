@extends('layouts.appgues')
@section('content')
    <div>
        <h2 class="text-center addfont red">
            Career History
        </h2>
        @if(count($jobs) > 0)
            @foreach($jobs as $job)
                <div class="row job-all">
                    <div class="col-md-8">
                        <div class="row ">
                            <div class="col-md-12">
                                <p><a class="red font-weight-bold"  target="_blank" href="{{$job->officialsite}}">{{$job->companyname}}</a> <br>
                                    <span class="jobdate">{{$job->jobdate}}</span>
                                </p>
                            </div>
                            <div class="col-sm-12 yellowbackgound">
                                <p>{{$job->jobposition}}<br>
                                    {!! nl2br(e($job->description)) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center  ">
                        <img src="{{asset("storage/images/$job->cover_image")}}" class="img-fluid" alt="Logo">
                    </div>
                </div>
                <hr/>
            @endforeach
        @else
            <p>No posts found</p>
        @endif
    </div>

@endsection