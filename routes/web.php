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
use App\Http\Controllers\EventCotroller;

Route::get('/', [EventCotroller::class, 'index']);
Route::get('/events/create', [EventCotroller::class, 'create'])->middleware('auth');
Route::get('/events/contato', [EventCotroller::class, 'contato']);
Route::get('/events/{id}', [EventCotroller::class, 'show']);
Route::post('/events', [EventCotroller::class, 'store']);
Route::delete('/events/{id}', [EventCotroller::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventCotroller::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventCotroller::class, 'update'])->middleware('auth');

Route::get('/dashboard', [EventCotroller::class, 'dashboard'])->middleware('auth');
Route::post('/events/join/{id}', [EventCotroller::class, 'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventCotroller::class, 'leaveEvent'])->middleware('auth');
