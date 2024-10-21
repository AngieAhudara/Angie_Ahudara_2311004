<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $latestArticles = Article::latest()->take(3)->get();
        return view('home', compact('latestArticles'));
    }
}