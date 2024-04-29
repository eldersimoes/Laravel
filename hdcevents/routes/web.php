<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Pedro";
    $idade = "29";
    $profissao = "Programador";
    $arr = [11,21,31,41,51];
    $nomes = ["Matheus","Maria","Joao","Saulo"];

    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade, 
        'profissao' => $profissao,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
