<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aricle;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('article.index', ['articles'=> $articles])
    }
}
