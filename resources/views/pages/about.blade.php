@extends('layouts.appgues')
@section('content')
    <div class="row mt-3 mb-5 addfont">
        <div class="col-sm-12 text-center red"><h1>Janko Kostic</h1></div>
    </div>

    <div class="row mt-3 mb-5">
        <div class="col-sm-12 text-center "><img class="img-fluid rounded-circle jkshadow " src="{{asset("storage/images/jk.jpg")}}" alt="pics" title=""></div>
    </div>

    <div class="row mt-3 mb-5 ">
        <div class="col-sm-12">
            <p class="bluebackgound">Hi, I'm Janko. </p>
            <p class="bio">I'm currently working as a Document Controller. Document Controller with experience of four years in the field of Oil & Gas, mining and smelting industry. Besides the work I do, I'm learning programming. </p>
            <p class="bio">A few years ago I started learning to code, focusing on front-end development. This web site is not just a personal presentation but also my training ground.
                This site has been redesigned several times, and I have always created it from scratch (you can se code on Github).
                After hours and hours of googling, reading and watching tutorials, I have gained knowledge in programming that helps me a lot at work.</p>
            <p class="bio"> I love solving problems and I like working in a team.</p>
        </div>
    </div>


    <div class="row mt-3 mb-5">
        <div class="col-sm-12">
            <h4 class="font-italic red addfont">Education </h4>
            <p class="bluebackgound">Graduated from the University of Belgrade, Faculty of Transport and Traffic Engineering. </p>
        </div>
    </div>


    <div class="row mt-3 mb-5">
        <div class="col-sm-12">
            <h4 class="font-italic addfont red">Skills </h4>
            <p class="bluebackgound">
                Programming & Markup Languages : PHP, JavaScript, HTML, XML, CSS/SASS, SQL, VB<br/>
                Frameworks: Laravel, jQuery, Bootstrap, Skeleton, Angular(basic)<br/>
                Databases : MySQL <br/>
                Software tools : MS Excel, MS Word, Autocad, Naviswork, Adobe Photoshop, MS Project
            </p>
            <p class="bluebackgound">Languages Serbian (Native), English (Proficient), German (Basic).</p>
        </div>
    </div>


    <div class="row mt-3 mb-5">
        <div class="col-sm-12 ">
            <h4 class="font-italic addfont red">Hobbies and interests </h4>
        </div>
        <div class="col-sm-12">
            <div class="row text-center mb-4 mt-2">

            @foreach($hobbies as $hobby => $value )
                    <div class="col-1 hobypics hvr-float-shadow"><img src="{{asset("storage/images/$hobby.png")}}" alt="hobby" title="{{$value}}"></div>
            @endforeach
            </div>
        </div>
        <div class="col-sm-12 bio">
            <p class="font-italic">Other : Non-smoker and Driving license B category</p>
        </div>
    </div>


@endsection