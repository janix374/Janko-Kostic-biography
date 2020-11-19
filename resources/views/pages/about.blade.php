@extends('layouts.appgues')
@section('content')
    <div class="row mt-3 mb-5 addfont">
        <div class="col-sm-12 text-center red" id="jk"><h2>Personal bio</h2></div>
    </div>


    <div class="row mt-3 mb-5">
        <div class="col-sm-12 text-center jkdivforpics" onclick="myFunction()" ><img id="picturejk" class="img-fluid rounded-circle jkshadow hidden-item" src="{{asset("storage/images/jk.jpg")}}" alt="pics" title=""></div>
    </div>

    <div class="row mt-3 mb-5 bluebackgound">
        <div class="col-sm-12">
            <p>Hi, I'm Janko. </p>
            <p>I'm currently working as a Document Controller. Document Controller with experience of four years in the field of Oil & Gas, mining and smelting industry. Besides the work I do, I'm learning programming. </p>
            <p>A few years ago I started learning to code. This web site is not just a personal presentation but also my training ground.
                This site has been redesigned several times, and I have always created it from scratch (you can se code on Github).
                After hours and hours of googling, reading and watching tutorials, I have gained knowledge in programming that helps me a lot at work.</p>
        </div>
    </div>


    <div class="row mt-3 mb-5">
        <div class="col-sm-12">
            <h4 class="font-italic addfont ">Education </h4>
            <p class="bluebackgound">Graduated from the University of Belgrade, Faculty of Transport and Traffic Engineering. </p>
        </div>
    </div>


    <div class="row mt-3 mb-5">
        <div class="col-sm-12">
            <h4 class="font-italic addfont ">Skills </h4>
            <div class="row">

                <div class="col-sm-12">

                    <!--table for skils-->
                    <table class="table table-hover">
                        <thead class="text-center">
                        <tr>
                            <th scope="col" colspan="2" >Programming & Markup Languages </th>
                        </tr>
                        </thead >
                        <tbody>
                        <tr>
                            <td scope="row" >PHP</td>
                            <td>OOPs, WordPress, MVC frameworks, Security and password hashing, Connect to a database, Handle HTTP requests, Load/save a file.
                            <br>
                                <i> Framework : Laravel ( Middleware, Controllers, Routing, Views, Sessions, Validation, Logging).</i>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">JavaScript</td>
                            <td>Prototype, function scope, block scope, lexical scope, difference between an expression and a statement,  IIFE’s, understand how high order functions work, inheritance, polymorphism, DOM , difference between value types and reference types.
                                <br>
                                <i>Framework & library : React(understanding  functional and class-components, Props&State, Hooks, Lifecycle,), Angular (basic), jQuery.
                                </i>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">SQL</td>
                            <td>Create databases with efficient structures, Write optimized queries, views and triggers for integration with other applications.
                            <br><i>Databases : MySQL</i>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">CSS</td>
                            <td>CSS, LESS, SASS
                            <br>
                                <i>Frameworks : Bootstrap (HTML, CSS, JS) , Skeleton(Responsive CSS Boilerplate) </i>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">HTML</td>
                            <td> </td>
                        </tr>

                        </tbody>
                    </table>
                </div>



                <div class="col-sm-12 mt-5 ">

                    <!--table for skils-->
                    <table class="table table-hover">
                        <thead class="text-center">
                        <tr>
                            <th scope="col" colspan="2">Software tools </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row" >MS Excel</td>
                            <td>VBA & Macros, Conditional Formatting, Use Pivot Tables, Filters, Advanced Formulas and Function (VLOOKUP, INDEX MATCH....), Hyperlink </td>
                        </tr>
                        <tr>
                            <td scope="row">MS Word</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td scope="row">Adobe Photoshop</td>
                            <td>Using Layers,  Histogram, Healing Brush Tool, Crop. </td>
                        </tr>
                        <tr>
                            <td scope="row">Naviswork</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td scope="row">Other</td>
                            <td>Git, webpack, npm, yarn, node.js</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                <!--
                Programming & Markup Languages : PHP, JavaScript, HTML, XML, CSS/SASS, SQL<br/>
                Frameworks: Laravel, jQuery, Bootstrap, Skeleton, Angular<br/>
                Databases : MySQL <br/>
                Software tools : MS Excel, MS Word, Autocad, Naviswork, Adobe Photoshop, MS Project
                -->

            </div>
            <p class="bluebackgound">Languages Serbian (Native), English (Proficient), German (Basic).</p>
        </div>
    </div>


    <div class="row mt-3 mb-5">
        <div class="col-sm-12 ">
            <h4 class="font-italic addfont ">Hobbies and interests </h4>
        </div>
        <div class="col-sm-12">
            <div class="row text-center mb-4 mt-2">

            @foreach($hobbies as $hobby => $value )
                    <div class="col-1 hobypics hvr-float-shadow"><img src="{{asset("storage/images/$hobby.png")}}" alt="hobby" title="{{$value}}">
                        <p class="small-letters">{{$value}}</p>
                    </div>
            @endforeach
            </div>
        </div>
        <div class="col-sm-12 bluebackgound ">
            <p class="font-italic">Other : Non-smoker and Driving license B category</p>
        </div>
    </div>


@endsection