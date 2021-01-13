<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::orderby('created_at', 'desc')->get();
        return view('articles', compact('articles'));
    }
    
    public function viewArticle($article_id) {
        $article = Article::where('article_id', $article_id)->first();
        $user = User::where('id', $article->author_id)->first();
        return view('article', compact('article', 'user'));
    }
}
