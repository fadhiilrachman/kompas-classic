<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function create(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        unset($request->_token);
        Article::create($request->all());
        return redirect()->route('home')->with('status', 'Artikel berhasil diterbitkan.');
    }
}
