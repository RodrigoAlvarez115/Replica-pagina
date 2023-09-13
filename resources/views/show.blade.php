@extends('layouts.layout')
@section('title', 'Pagina principal')
@section('content')
@include('layouts._partials.aside')
    <article>
        <img id="imagen_noticia" src="{{ $publication->image }}" alt="">
        <h1 id="titulo_noticia"> {{ $publication->title }} </h1>
        <h2 id="subtitulo"> {{ $publication->subtitle }} </h2>
        <p id="parrafo"> {!! $publication->content !!} </p>
    </article>
    @include('layouts._partials.footer')
@endsection
