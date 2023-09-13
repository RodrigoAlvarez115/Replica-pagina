@extends('layouts.layout')
@section('title', 'Pagina principal')
@section('content')
@include('layouts._partials.aside')
    <article id="container" class="noticia_principal">
        @forelse ($results as $result)
            <a href="{{ route('show', $result->id) }}">
                <img class="imagen_caratula" src="{{ $result->image }}" alt="">
                <h2> {{ $result->title }} </h2>
                <p class="parrafo_index"> {{ $result->subtitle }} </p>
            </a>
        @empty
            <h1>No hay coincidencias.</h1>
        @endforelse
    </article>
    @include('layouts._partials.footer')
@endsection