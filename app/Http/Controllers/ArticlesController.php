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
        $user = User::find(11);
        $request['user_id'] = $user->id;

        $this->validate($request, [
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id',
        ]);
        // $art = Article::create($request->all());
        Article::create($request->all());
        return redirect('/articles')->with(['success_message' => 'L\'article a été crée !']);
    }
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // dd($article, $request->all());
        $article->update($request->all());
        return view('articles.articles');
    }

    public function delete(Article $article)
    {
        $article->delete();
        return view('articles.articles');
    }

}