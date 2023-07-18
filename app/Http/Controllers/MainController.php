<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il modello
use App\Models\Comic;

class MainController extends Controller
{

    // Questo metodo restituirà come output  la visualizzazione in pagina del contenuto della cartella 'views' il cui nome è indicato tra parentesi tonde
    public function index(){


        // Creo la variabile che si ricollega al modello e ne estrapola tutti i dati con :: all()
        $comics = Comic :: all();

        // Restituzione dei dati presi dalla chiamata al database con "compact"
        return view('index', compact("comics"));
   
    }

    // Questo metodo ha tra parentesi la variabile $id perchè è un elemento di cui la funzione ha bisogno per funzionare
    public function show($id){

        // Metodo che permette di recuperare elementi dal database -> gli passo l'id
        $comic = Comic :: findOrFail($id);

        // Restituisci la visualizzazione della rotta show e reinvia in pagina comic
        return view('show', compact("comic"));
        // Vado a creare la view di  show
    }

    public function create(){

        return view('create');
    }
    
    // Questo metodo permette di prendere l'interezza dei dati inseriti nel form di creazione e restituirli nella variabile comic reindirizzando l'utente alla rotta show tramite un redirect
    public function store(Request $request){

        $data = $request -> all();
        
        $comic = Comic :: create($data);

        return redirect() -> route('show', $comic -> id);
    }

    public function edit($id){

        $comic = Comic :: findOrFail($id);

        return view('edit', compact("comic"));
    }

    public function update(Request $request, $id){
        $data = $request -> all();
        $comic = Comic :: findOrFail($id);
        $comic -> update($data);
        return redirect() -> route('show', $comic -> id);
    }

    public function destroy($id) {

        $comic = Comic :: findOrFail($id);

        $comic -> delete();

        return redirect() -> route('index');
    }
}
