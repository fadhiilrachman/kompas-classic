<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class AuthorController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $articles = Article::where(['author_id' => \Auth::id()])->orderby('created_at', 'desc')->get();
        return view('author.articles', compact('articles'));
    }

    public function createForm() {
        return view('author.create-new');
    }

    public function create(Request $request) {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        Article::create([
            'author_id' => \Auth::id(),
            'category' => $request->category,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('author.home')->with('status', 'Artikel berhasil diterbitkan.');
    }

    public function editForm($article_id) {
        $article = Article::where(['article_id' => $article_id, 'author_id' => \Auth::id()])->first();
        return view('author.edit', compact('article'));
    }

    public function edit(Request $request) {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        Article::where(['article_id' => $request->article_id, 'author_id' => \Auth::id()])->update([
            'category' => $request->category,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('author.home')->with('status', 'Artikel berhasil diubah.');
    }

    public function delete($article_id) {
        Article::find($article_id)->delete();
        return redirect()->route('author.home')->with('status', 'Artikel berhasil dihapus.');
    }

}
