<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Article;
use App\Author;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('admin.dashboard');
    }
}
