<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index() {

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

    }
    
    public function events() {
        return view('events');
    }

    public function create() {
        return view('events.create');
    }

    public function contact() {
        return view('contact');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

}