@extends('layouts.layout')
@section('title', 'Pagina principal')
@section('content')
@include('layouts._partials.aside')
    <article id="container" class="noticia_principal">
        @forelse ($notices as $notice)
            <a href="{{ route('show', $notice->id) }}">
                <img class="imagen_caratula" src="{{ $notice->image }}" alt="">
                <h2> {{ $notice->title }} </h2>
                <p class="parrafo_index"> {{ $notice->subtitle }} </p>
            </a>
        @empty
            <h1>no hay publicaciones.</h1>
        @endforelse
    </article>
    @include('layouts._partials.footer')
@endsection