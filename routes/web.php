<?php

use App\Http\Livewire\Form;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Post;
use App\Http\Livewire\Shop;
use App\Http\Livewire\User;
use App\Http\Livewire\Hooks;

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
});


Route::get('post/{title?}', Post::class);
Route::get('user', User::class);
Route::get('form', Form::class);
Route::get('shop', Shop::class);
Route::get('hooks', Hooks::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
