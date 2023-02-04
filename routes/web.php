<?php


use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\Tarifscontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MentionsLegalesController;
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

Route::get('/', [AccueilController::class, 'index'])->name('Accueil');

Route::get('/accueil', [AccueilController::class, 'index'])->name('Accueil');

Route::get('/cours', [CoursController::class, 'index'])->name('Cours');

Route::get('/contact', [ContactController::class, 'index'])->name('Contact');

Route::get('/mentions-legales', [MentionsLegalesController::class, 'index'])->name('Mentions-legales');

Route::get('/tarifs', [TarifsController::class, 'index'])->name('Tarifs');

Route::get('/mentions-legales', function () {
    return view('mentions-legales');
})->name('mentions-legales');

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/cours', function () {
    return view('cours');
})->name('cours');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/tarifs', function () {
    return view('tarifs');
})->name('tarifs');
