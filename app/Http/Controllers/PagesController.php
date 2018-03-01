<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, App;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    #public function home(Request $request, $locale = 'en'){
    public function home(Request $request){
        return view('pages.home');
    }

    public function contact(Request $request){
        return 'OK';
    }
}
