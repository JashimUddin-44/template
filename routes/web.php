<?php

use Illuminate\Support\Facades\Route;
//use App\Http\controllers\firstcontroller;

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
    return view('pages.welcome');
});

Route::get('/about', function () {
    return view('pages.aboutus');
});

Route::get('/contact', function () {
    return view('pages.contactus');
})->name('contact.us');

Route::get('/blog', function () {
    return view('pages.blogs');
})->name('blogs');

//Route::get('about',[firstcontroller::class,'index']);


