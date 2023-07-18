<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Mappatura della rotta '/' con il metodo 'index' contenuto nel MainController -> il passo successivo a questo sarà appunto creare il metodo nel MainController

Route::get('/', [MainController :: class, "index" ]) -> name('index');
