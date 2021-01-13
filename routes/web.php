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

Auth::routes();

Route::get('/articles', [App\Http\Controllers\AuthorController::class, 'index'])->name('author.home');
Route::get('/create-new', [App\Http\Controllers\AuthorController::class, 'createForm'])->name('author.create.form');
Route::post('/create-new', [App\Http\Controllers\AuthorController::class, 'create'])->name('article.create');
Route::get('/edit/{article_id}', [App\Http\Controllers\AuthorController::class, 'editForm'])->name('author.edit.form');
Route::post('/edit/{article_id}', [App\Http\Controllers\AuthorController::class, 'edit'])->name('article.edit');
Route::delete('/delete/{article_id}', [App\Http\Controllers\AuthorController::class, 'delete'])->name('article.delete');

Route::get('/', [App\Http\Controllers\ArticlesController::class, 'index'])->name('index');
Route::get('/article/{article_id}', [App\Http\Controllers\ArticlesController::class, 'viewArticle'])->name('article.view');