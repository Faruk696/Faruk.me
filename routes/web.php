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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact','pagesController@contact')->name('contact');
Route::get('/about','pagesController@about')->name('about');

Route::get('/services','pagesController@services')->name('services');


Route::get('/cv', 'CvController@downloadCv')->name('cv.download');

Route::post('/contact', 'PortfolioController@saveContactForm');

