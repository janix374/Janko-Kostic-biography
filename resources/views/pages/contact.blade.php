@extends('layouts.appgues')
@section('content')
    <div class="row mt-3 mb-5 addfont">
        <div class="col-sm-12 text-center red"><h1>Contact</h1></div>
    </div>

    <div class="row">
        @if(Session::has('flush_message'))
            <p>{{Session::get('flush_message')}}</p>
        @endif

        <div class="col-sm-12">
            {!! Form::open(['action' => 'PagesController@contactSend', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group ">
                {{Form::label('email', 'Email Adress' , ['class'=>'addfont'])}}
                {{Form::text('email','', ['class'=>'form-control','placeholder'=>'email'])}}
            </div>
            <div class="form-group ">
                {{Form::label('subject', 'Subject', ['class'=>'addfont'])}}
                {{Form::text('subject','', ['class'=>'form-control','placeholder'=>'subject'])}}
            </div>
            <div class="form-group ">
                {{Form::label('message', 'Message', ['class'=>'addfont'])}}
                {{Form::textarea('message','', ['class'=>'form-control','placeholder'=>'message'])}}
            </div>

            {{Form::hidden('_method','POST')}}
            {{Form::submit('Submit',['class'=>'btn, btn-primary'])}}
            {!! Form::close() !!}
        </div>

    </div>





@endsection