<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->orderBy('created_at', 'desc')->get();
        return view('articles.articles', compact('articles'));
    }


    public function show($id)
    {
        // $article = Article::with('user')->where('id', $id)->firstOrFail();

        $article = Article::with([
            'comments' => function ($query) {
                $query->with('user');
            }
        ])->findOrFail($id);

        // dd($article);
        // ddd($article);
        return view('articles.show', compact('article'));
    }
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $user = User::find(1);
        $request['user_id'] = $user->id;

        $this->validate($request, [
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id',
        ]);
        // dd($request->all());
    }


}