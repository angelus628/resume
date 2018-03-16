<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class Contact extends Controller
{
    //
    public function send_email(Request $request)
    {
        Mail::to($request->input('contactEmail'))->send(new ContactMail($request));
    }
}
