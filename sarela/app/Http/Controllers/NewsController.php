<?php

// app/Http/Controllers/NewsController.php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = \App\Models\News::orderBy('created_at', 'desc')->take(3)->get();

        return view('dashboard', ['news' => $news]);
    }
}

