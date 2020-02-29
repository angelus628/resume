<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Author;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Article::all();
        $authors  = Author::all();

        return view('admin.index', [
            'articles' => $articles,
            'authors'  => $authors
        ]);
    }
}
