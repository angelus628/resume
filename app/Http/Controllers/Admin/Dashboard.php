<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('admin.dashboard',
        [
            'articles' => Article::all(),
        ]);
    }
}
