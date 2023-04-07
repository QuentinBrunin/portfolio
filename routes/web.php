<?php

use App\Http\Controllers\Index;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Index::class, 'index']);
Route::get('/show', [Index::class, 'show']);
Route::get('/gallery', function () {
    return Inertia\Inertia::render('Gallery');
  });