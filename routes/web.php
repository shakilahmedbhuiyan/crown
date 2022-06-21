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

Route::get('/', \App\Http\Livewire\Guest\Pages\Home::class)->name('home');
Route::get('/menu', \App\Http\Livewire\Guest\Pages\Menu::class)->name('menu');


Route::group([
    'middleware'=>[ 'auth:sanctum','admin',config('jetstream.auth_session'),'verified'],
    'prefix'=> 'admin',
    'as'=>'admin.',
    ], static function () {
    Route::get('/dashboard', App\Http\Livewire\Admin\Pages\Index::class)->name('dashboard');
    Route::get('/zip_code', App\Http\Livewire\Admin\Pages\ZipCode::class)->name('zip_code');
    Route::get('/category', App\Http\Livewire\Admin\Pages\Category::class)->name('category');
});
