<?php
declare(strict_types=1);

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('static.home');
    }
}
