<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
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
    }

    public function create() {        // padrao quando usa get do formulario
        return view('events.create');
    }

}
