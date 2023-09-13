@extends('layouts.layout')
@section('title', 'Pagina principal')
@section('content')
@include('layouts._partials.aside')
    <article id="container" class="contenedor_guias">
        <h1 id="titulo_guias" >Guias GamerX</h1>
        @forelse ($guides as $guide)
            <a href="{{ route('show', $guide->id) }}">
                <img class="imagenes_guias" src="{{ $guide->image }}" alt="">
                <p class="parrafo_guias"> {{ $guide->title }} </p>
            </a>
        @empty
            <h1>no hay publicaciones.</h1>
        @endforelse
    </article>
    @include('layouts._partials.footer')
@endsection