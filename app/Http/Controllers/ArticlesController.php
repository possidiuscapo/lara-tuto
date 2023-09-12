<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->orderBy('created_at','desc')->get();
        return view('layouts.master', compact('articles'));
    }

    public function show($id){
        $article = Article::with('user')->with([
            'comments' => function ($query) {
                $query->with('user');
        }])->findOrFail($id);
        //dd($article)
        //ddd($article)
        return view('articles.show', compact('article'));
    }
}