@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-12 ">
            <a href="/admin" class="btn btn-info m-3">Go Back</a>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-sm-12 text-center">
            <h2 >
                Input work experience
            </h2>
        </div>

        <div class="col-md-8">
            {!! Form::open(['action' => 'AdminController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('companyname', 'Company')}}
                {{Form::text('companyname','', ['class'=>'form-control','placeholder'=>'company'])}}
            </div>
            <div class="form-group">
                {{Form::label('Date', 'Date')}}
                {{Form::text('jobdate','', ['class'=>'form-control','placeholder'=>'Date'])}}
            </div>
            <div class="form-group">
                {{Form::label('Official site', 'Official site')}}
                {{Form::text('officialsite','', ['class'=>'form-control','placeholder'=>'Official site'])}}
            </div>
            <div class="form-group">
                {{Form::label('jobposition', 'Job position')}}
                {{Form::text('jobposition','', ['class'=>'form-control','placeholder'=>'Job position'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description','', ['class'=>'form-control','placeholder'=>'Description'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit',['class'=>'btn, btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>


@endsection