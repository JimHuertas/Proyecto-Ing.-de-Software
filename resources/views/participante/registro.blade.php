<h1>
    Registro
</h1>

<form action="{{ route('participante.store') }}" method="POST">
@csrf
<strong>DNI_persona:</strong>
<input type="text" name="dni">
<strong>nombre:</strong>
<input type="text" name="nombre">
<strong>email:</strong>
<input type="text" name="email">
<strong>password:</strong>
<input type="text" name="password">
<strong>universidad:</strong>
<input type="text" name="universidad">
<strong>grado:</strong>
<input type="text" name="grado">
<button type="submit">Submit</button>
</form>