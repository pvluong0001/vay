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

Route::get('/', \App\Http\Controllers\DashboardController::class);
Route::get('/tin-tuc', [\App\Http\Controllers\ClientController::class, 'posts'])->name('posts');
Route::get('/{type}', [\App\Http\Controllers\ClientController::class, 'type'])->name('type');
Route::get('/goi-dich-vu/{category}', [\App\Http\Controllers\ClientController::class, 'category'])->name('category');
Route::get('/{slug}-{post}.html', [\App\Http\Controllers\ClientController::class, 'postDetail'])
    ->name('post.detail')
    ->where([
        'slug' => '[a-zA-Z0-9-]+',
        'post' => '[0-9]+'
    ]);
