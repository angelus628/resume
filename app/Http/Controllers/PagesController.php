<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, App;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function home(Request $request, $locale = 'en'){
        App::setLocale($locale);
        return view('pages.home');
    }
}
