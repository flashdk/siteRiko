<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\CustomPost;
use App\Friend;

use App\Contact;
use App\NewsLetter;

class welcomeController extends Controller
{
    public function index(){

        $posts = CustomPost::orderBy('id', 'desc')->take(4)->get();

        return view('welcome')->with(['posts' => $posts]);
    }

    public function event() {
        return view('event');
    }

    public function about() {
        $friends = Friend::orderBy('id', 'desc')->take(6)->get();

        return view('about')->with(['friends' => $friends]);;
    }

    public function contact() {
        return view('contact');
    }

    public function sendMessage(Request $request) {    
       $validatedData = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($request->isMethod('post')){
            $data = $request->all();
            Contact::create($data);
        }          
        return redirect()->route('contact');
    }

    public function newsLetter (Request $request) {
        //dd('toto');
        $validatedData = $request->validate([
            'email' => 'required',
        ]);

        if ($request->isMethod('post')){
            $data = $request->all();
            //dd($data);
            NewsLetter::create($data);
        }          
        return redirect()->route('index');
    }
}
