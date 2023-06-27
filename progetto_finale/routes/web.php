<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{article}/show', [ArticleController::class , 'show'])->name('articles.show');
Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
