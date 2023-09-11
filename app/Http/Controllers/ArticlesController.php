<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = [
            ['title' => 'Title article 1', 'body' => 'Contenu de l\'article 1'],
            ['title' => 'Title article 2', 'body' => 'Contenu de l\'article 2'],
            ['title' => 'Title article 3', 'body' => 'Contenu de l\'article 3'],
        ];
        return view('layouts.articles', compact('articles'));
    }
}