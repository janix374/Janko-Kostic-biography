<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();


//route for unauthorised guests
Route::get('/','PagesController@index');
Route::get('/work','PagesController@work');
Route::get('/contact','PagesController@contact');
Route::post('/contact','PagesController@contactSend');//send email
Route::get('/portfolio','PagesController@portfolio');


//Route::get('/home', 'HomeController@index')->name('home');

//route for admin
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    //Route::get('/', 'AdminController@index')->name('admindashboard');
});



Route::resource('admin','AdminController', [
    'names' => [
        'index' => 'admindashboard',
    ]
]);

//Route::resource('jobs','JobsController');//code for learning