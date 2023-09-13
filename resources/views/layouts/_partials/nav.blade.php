<nav>
    <ul class="boton">
        <li><a href=" {{ route('index') }} ">INICIO</a> </li>
        <li><a href="{{ route('notices') }}">NOTICIAS</a> </li>
        <li><a href="{{ route('reviews') }}">RESEÑAS</a> </li>
        <li><a href="{{ route('guides') }}">GUIAS</a> </li>
        <form action="{{ route('search') }}" method="GET">
            @csrf
            <input name="query" type="search">
            <input id="buscar_boton" type="submit" value="Buscar">
        </form>
    </ul>
</nav>
