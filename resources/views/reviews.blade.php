@extends('layouts.layout')
@section('title', 'Pagina principal')
@section('content')
@include('layouts._partials.aside')
    <article id="container" class="noticia_principal">
        @forelse ($reviews as $review)
            <a href="{{ route('show', $review->id) }}">
                <img class="imagen_caratula" src="{{ $review->image }}" alt="">
                <h2> {{ $review->title }} </h2>
                <p class="parrafo_index"> {{ $review->subtitle }} </p>
            </a>
        @empty
            <h1>no hay publicaciones.</h1>
        @endforelse
    </article>
    @include('layouts._partials.footer')
@endsection