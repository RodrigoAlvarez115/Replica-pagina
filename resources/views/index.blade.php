@extends('layouts.layout')
@section('title', 'Pagina principal')
@section('content')
@include('layouts._partials.aside')
    <article id="container" class="noticia_principal">
        @forelse ($publications as $publication)
            <a href="{{ route('show', $publication->id) }}">
                <img class="imagen_caratula" src="{{ $publication->image }}" alt="">
                <h2> {{ $publication->title }} </h2>
                <p class="parrafo_index"> {{ $publication->subtitle }} </p>
            </a>
        @empty
            <h1>no hay publicaciones.</h1>
        @endforelse
    </article>
    @include('layouts._partials.footer')
@endsection
