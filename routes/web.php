<?php

use App\Http\Controllers;
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

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', Controllers\Home::class)->name('home');
Route::get('/home-without-name', Controllers\Home::class);
Route::get('/home-using-closure', static function () {
    return view('home');
});

Route::name('grouped.')->group(static function () {
    Route::get('home-in-routegroup', Controllers\Home::class)->name('home');
});

Route::name('todo.')->prefix('todo')->group(static function () {
    Route::view('create', 'todo.create')->name('create');
    Route::post('create', Controllers\Todo\Create::class);

    Route::delete('{id}/delete', Controllers\Todo\Delete::class)->name('delete');
    Route::post('{id}/mark-as-finished', Controllers\Todo\MarkAsFinished::class)->name('mark-as-finished');
    Route::post('{id}/mark-as-unfinished', Controllers\Todo\MarkAsUnfinished::class)->name('mark-as-unfinished');
});
