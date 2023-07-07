<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;
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
Route::get('articles/{article}/show', [ArticleController::class, 'show'])->name('articles.show');
Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::get('articles/{category}', [ArticleController::class, 'categoryshow'])->name('category.show');

Route::get('userprofile/{user}', [ArticleController::class, 'userprofile'])->name('userprofile');


//*Home Revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
//*Accetta annuncio
Route::patch('/accetta/annuncio/{article}', [RevisorController::class, 'acceptArticle'])->middleware('isRevisor')->name('revisor.accept_article');
//*Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{article}', [RevisorController::class, 'rejectArticle'])->middleware('isRevisor')->name('revisor.reject_article');
//*Diventa un revisore proteggo la rotta perchè invio i dati del tizio, quindi deve per forza fare un login
Route::get('/diventa/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
//*Rendi l'utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');


//Search
Route::get('/ricerca/articolo', [ArticleController::class , 'searchArticles'])->name('articles.search');
//rotta per la vista al form che rimanda all'email
Route::get('/clicca/form', [RevisorController::class , 'formRevisor'])->name('form.revisor');
//rotta per la vista all'email
Route::get('/clicca/revisore', [RevisorController::class , 'submitRevisor'])->name('submit.revisor');
