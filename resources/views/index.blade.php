@extends('layouts.layout')
@section('title', 'Pagina principal')
@section('content')
@include('layouts._partials.aside')
    <article id="container" >
        @forelse ($publications as $publication)
        <div class="noticia_principal">
            <a href="{{ route('show', $publication->id) }}">
                    <img class="imagen_caratula" src="{{ $publication->image }}" alt="">
                    <h2> {{ $publication->title }} </h2>
                    <p class="parrafo_index"> {{ $publication->subtitle }} </p>
                </a>
                </div>
        @empty
            <h1>no hay publicaciones.</h1>
        @endforelse
    </article>
    @include('layouts._partials.footer')
@endsection
