<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;                                   //adiciona o model Event no controler

class EventController extends Controller
{
    public function index() {

        $events = Event::all();                          // método ORM Event::all(); retorna todos os registros 
    
        return view('welcome', ['events' => $events]);  // envia para a view / todos os registros do model Event
    }

    public function create() {                          // padrao quando usa get do formulario
        return view('events.create');
    }

}
