<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    // Questo metodo restituirà come output  la visualizzazione in pagina del contenuto della cartella 'views' il cui nome è indicato tra parentesi tonde
    public function index(){
        return view('index');
    }
}
