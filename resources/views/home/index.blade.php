<h1>
    Inicio
</h1>

<h2>
    Edicion
</h2>

@foreach ($_edicion as $edicion)          
    <a href="{{ route('edicion.show',$edicion->edicion)}}">{{ $edicion->edicion }}
    {{ $edicion->nombre }}</a>
 @endforeach

    
 <h2>
     Buscar evento
 </h2>

 <!--<a href="{{ route('buscar') }}">Buscars</a>-->


 <form action="{{ route('buscar')}}" method="POST">
    <input name="tema" placeholder="Tema">
    <button type="submit">Icon</button>
 </form>

 <a href="{{ route('login') }}">Login</a>
 <a href="{{  route('participante.create') }}">Register</a>

