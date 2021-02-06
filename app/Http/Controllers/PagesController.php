<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, App;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function home(Request $request){
        return view('pages.home');
    }

    public function contact(Request $request){
        $message = array(
            'contactName'    => $request->input('contactName'),
            'contactEmail'   => $request->input('contactEmail'),
            'contactSubject' => $request->input('contactSubject'),
            'contactMessage' => $request->input('contactMessage'),
        );

        Mail::to(env('MAIL_TO_ADDRESS1'))
        ->send(new ContactMail($message));

        return 'OK';
    }
}
