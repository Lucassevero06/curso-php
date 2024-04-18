<?php

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

Route::get('/', function () {

    $nome = "Lucas";
    $idade = 18;

    $array = [1, 2, 3, 4, 5];

    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade, 
        'profissao' => "Programador",
        'array' => $array
    ]);

});

Route::get('/products', function () {

    return view('products');

});

Route::get('/contact', function () {

    return view('contact');

});
?>