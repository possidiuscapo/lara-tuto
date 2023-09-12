<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $article = Article::with('user')->orderBy('created_at','desc')->get();
        return view('layouts.articles', compact('articles'));
    }

    public function show($id){
        $article = Article::with('user')->where('id', $id)->firstOrFail();
        //dd($article)
        //ddd($article)
        return view('article.show', compact('article'));
    }
}