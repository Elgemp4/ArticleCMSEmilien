<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\ModifyArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articles.list', ['articles' => Article::paginate(25)]);
    }

    public function create() {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateArticleRequest $request)
    {
        $article = Article::create($request->validated());
        return redirect()->route('article.list');
        // return redirect()->route("article.show", ["article" => $article->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view("articles.view", ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModifyArticleRequest $request, Article $article)
    {
        $article->update($request->validated());
        return redirect()->route('article.list');
    }

    public function edit(Article $article){
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        return redirect()->route('article.list')->with(['success' => "L'article $article->title a bien été supprimé !"]);
    }
}
