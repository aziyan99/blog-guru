<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\User;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $isByCategory = false;
        $isByTeacher = false;
        if ($request->get('cari')) {
            $cari = urlencode($request->get('cari'));
            $latest_articles = Article::with('category', 'writer')->where('title', 'LIKE', '%' . $cari . '%')
                ->orWhere('body', 'LIKE', '%' . $cari . '%')->get();
            return view('frontend.article.index', compact('latest_articles', 'isByCategory', 'isByTeacher'));
        } else {
            $latest_articles = Article::with('writer', 'category')->latest()->get();
            return view('frontend.article.index', compact('latest_articles', 'isByCategory', 'isByTeacher'));
        }
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        if (!$article) {
            abort(404);
        } else {
            $article->increment('views');
            return view('frontend.article.show', compact('article'));
        }
    }


    public function showByCategory($id)
    {
        $isByCategory = true;
        $isByTeacher = false;
        $latest_articles = ArticleCategory::with('articles')->where('id', $id)->firstOrFail();
        return view('frontend.article.index', compact('latest_articles', 'isByCategory', 'isByTeacher'));
    }

    public function showByTeacher($id)
    {
        $isByCategory = true;
        $isByTeacher = false;
        $latest_articles = User::with('articles')->where('id', $id)->firstOrFail();
        return view('frontend.article.index', compact('latest_articles', 'isByCategory', 'isByTeacher'));
    }
}
