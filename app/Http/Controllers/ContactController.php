<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\contactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function submit()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required'
        ]);
        Mail::to('boukhezar18@gmail.com')->send(new  contactUs($data));
       // dd('sent');
        return ['success'=>true];
    }
    
}