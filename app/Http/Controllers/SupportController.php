<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
use App\Mail\ShowMail;

class SupportController extends Controller
{

    public $msg;

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('support'); 
    }

    public function store(Request $request)
    {
        $msg = request()->validate([
            'user' => 'required',
            'email' => 'required|email',
            'content' => 'required|min:3'
        ],[
            'user.required' => __('I need your username')
        ]);

        Mail::to('admin@macnolo.tk')->send(new MessageReceived($msg));

        return new ShowMail($msg);
    }
}