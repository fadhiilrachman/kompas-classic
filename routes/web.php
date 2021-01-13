<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/create-new', [App\Http\Controllers\HomeController::class, 'create'])->name('article.create');
Route::get('/', [App\Http\Controllers\ArticlesController::class, 'index'])->name('index');
Route::get('/article/{article_id}', [App\Http\Controllers\ArticlesController::class, 'viewArticle'])->name('article.view');