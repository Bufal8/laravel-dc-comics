<!-- Comando extends che replica il file chiamato -->

@extends('layouts.main-layout')

<!-- Creo la sezione contento che nel main layout avevo richiamato tra il tag header e il footer -->

@section('content')

<div class="text-center">
    
    <h1>TOPCOMICS</h1>
    <ul>
        <!-- Tramite il ciclo foreach stampo in pagina i titoli dei fumetti -->
        @foreach ($comics as $comic)
            <li>
                <!-- Per poter cliccare su ogni elemento della lista linko una rotta che contenga l'id dell'elemento -->
                <a href="{{ route('show', $comic -> id)}}">
                <!-- Creo la rotta show nel web.php -->
                    {{ $comic -> title }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

@endsection