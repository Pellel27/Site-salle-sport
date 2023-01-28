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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/cours', function () {
    return view('cours');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mentions-legales', function () {
    return view('mentions-legales');
});

Route::get('/tarifs', function () {
    return view('tarifs');
});

