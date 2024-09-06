<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ArticleController extends Controller
{
    public function show($n): View
    {
        $numero = $n;
        return view('article', ['numero' => $numero]);
        
    }
}
