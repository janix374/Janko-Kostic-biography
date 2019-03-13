@extends('layouts.app')

@section('content')


    <div class="row  ">
        <div class="col-sm-12 ">
            <a href="/admin" class="btn btn-info m-3">Go Back</a>
        </div>
        <div class="col-sm-12 m-3"> <a href="{{$job->id}}/edit" class="btn btn-info">EDIT</a></div>
        <div class="col-sm-12 "><p><span class="job-des">Logo: </span></p>
            <img src="{{asset("storage/images/$job->cover_image")}}" class="img-fluid" alt="Logo">
        </div>
        <div class="col-sm-12">
            <p><span class="job-des">Company : </span>{{$job->companyname}}<br>
                <span class="jobdate"> {{$job->jobdate}}</span></p>
        </div>
        <div class="col-sm-12">
            <p><span class="job-des">Position : </span>{{$job->jobposition}}</p>
        </div>
        <div class="col-sm-12">
            <p><span class="job-des">Short description: </span>{!! nl2br(e($job->description)) !!}</p>
        </div>
        <div class="col-sm-12">
            {!! Form::open(['action' => ['AdminController@destroy', $job->id], 'method'=>'POST', 'class'=>'float-left m-1']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('DELETE',['class'=>'btn, btn-danger'])}}
            {!! Form::close() !!}
        </div>



    </div>


@endsection