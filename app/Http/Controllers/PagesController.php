<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Mail;

class PagesController extends Controller
{
    public function index(){

        //shuffle hobbies
        $sorted_array = array('h_basketball' => 'basketball','h_book'=>'book','h_football'=>'football','h_plane'=>'travel','h_popcorn'=>'movies','h_search'=>'internet searching','h_swimming'=>'swimming','h_waterpolo'=>'waterpolo','h_webdesign'=>'webdesign');
        $hobbies = array();
        $keys = array_keys($sorted_array);
        shuffle($keys);
        foreach ($keys as $key)
        {
            $hobbies[$key] = $sorted_array[$key];
        }

        return view('pages.about')->with('hobbies',$hobbies);
    }



    public function work(){
        $jobs = DB::table('jobs')->orderBy('id', 'desc')->get();
        return view('pages.work')->with('jobs',$jobs);
    }



    public function contact(){
        return view('pages.contact');
    }


    public function contactSend(Request $request){

        //validation
        $this->validate($request,[
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);


        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact-message', $data, function ($message) use ($data){
            $message->from($data['email']);
            $message->to('janko.kostic@yahoo.com');
            $message->Subject($data{'subject'});

        });

        return redirect()->back()->with('flush_message', 'Thank you for contact me!');
        //dd($request->all());
    }



}
