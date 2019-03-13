@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-12 ">
            <a href="/admin/{{$job->id}}" class="btn btn-info m-3">Go Back</a>
        </div>
    </div>

    <div>
        <h2 class="text-center">
            Edit work experience
        </h2>

        {!! Form::open(['action' => ['AdminController@update', $job->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('companyname', 'Company')}}
            {{Form::text('companyname',$job->companyname, ['class'=>'form-control','placeholder'=>'company'])}}
        </div>
        <div class="form-group">
            {{Form::label('Date', 'Date')}}
            {{Form::text('jobdate',$job->jobdate, ['class'=>'form-control','placeholder'=>'date'])}}
        </div>
        <div class="form-group">
            {{Form::label('Official site', 'Official site')}}
            {{Form::text('officialsite',$job->officialsite, ['class'=>'form-control','placeholder'=>'date'])}}
        </div>
        <div class="form-group">
            {{Form::label('jobposition', 'Job position')}}
            {{Form::text('jobposition',$job->jobposition, ['class'=>'form-control','placeholder'=>'Job position'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description',$job->description, ['class'=>'form-control','placeholder'=>'description'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn, btn-primary'])}}
        {!! Form::close() !!}



    </div>




@endsection