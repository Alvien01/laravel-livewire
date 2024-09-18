<?php

use App\Livewire\Home;
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
Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/about', \App\Livewire\About::class)->name('about');
Route::get('/about', \App\Livewire\About::class)->name('about');
Route::get('/contact', \App\Livewire\Contact::class)->name('contact');
// Route::get('/post', \App\Livewire\Post\Index::class)->name('post.index');
Route::get('/post', \App\Livewire\Post\Index::class)->name('post.index');
Route::get('/users{user}', \App\Livewire\Users\Show::class)->name('user.show');










