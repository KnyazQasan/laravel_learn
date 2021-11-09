<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home',[PageController::class ,'home'])->name('home');
Route::get('/about',[PageController::class ,'about'])->name('about');
Route::get('/portfolio',[PageController::class ,'portfolio'])->name('portfolio');
Route::get('/service',[PageController::class ,'service'])->name('service');
Route::get('/blog',[PageController::class ,'blog'])->name('blog');
Route::get('/contact',[PageController::class ,'contact'])->name('contact');
Route::get('/submenu/{id}',[PageController::class ,'submenu'])->name('submenu');




