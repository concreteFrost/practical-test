<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $req){
        $details =[
            'name'=>$req->name,
            'email'=>$req->email,
            'message'=>$req->message
        ];

        Mail::to('ilia.m.composer@gmail.com')->send(new ContactMail($details));
    }
}
