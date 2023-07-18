@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>{{ $comic -> title }}</h1>
        <img width = 500px;  src="{{ $comic -> thumb }}" alt="">
        <h3>Price: {{ $comic -> price }}</h3>
    </div>

@endsection