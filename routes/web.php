<?php

use App\Http\Controllers\ComicController as ComicController;
use App\Http\Controllers\PageController;
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


Route::get('/', [PageController::class, 'index'])->name('homePage');


// Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
// Route::get('/comics/{id}/edit', [ComicController::class, 'edit'])->name('comics.edit');
// Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');
// Route::post('/comics/store', [ComicController::class, 'store'])->name('comics.store');

Route::resource('comics', ComicController::class);
