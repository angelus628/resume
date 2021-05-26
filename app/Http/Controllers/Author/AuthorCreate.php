<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthorCreate extends Controller
{

    public function __invoke(): View
    {
        return view('author.create');
    }
}
