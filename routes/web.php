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
    $nome = "Elton";
    $idade = 24;
    $arr = [1, 2, 3, 4, 5, 6];
    return view(
        'welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'arr' => $arr
        ]
    );
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/produtos/{id}', function ($id) {
    return view('product', ['id' => $id]);
});
