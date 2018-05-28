<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleEditRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(15);

        return view('article.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();

        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->content = $request->input('content');
        $article->cover = null;
        $article->slug = str_slug($request->input('title'), '-');

        $article->save();

        return redirect()->route('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleEditRequest $request, Article $article)
    {
        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->content = $request->input('content');

        if ($request->file('cover')) {
            $article->cover = $request->file('cover')
                ->store('articles');
        }

        $article->save();

        return redirect()->route('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function getList()
    {
        $data = Article::orderBy('created_at', 'desc')->paginate();

        return view('front.article.index', ['articles' => $data]);
    }

    public function getBySlug($slug)
    {
        $data = Article::where('slug', '=', $slug)->first();

        return view('front.article.once', ['article' => $data]);
    }
}
