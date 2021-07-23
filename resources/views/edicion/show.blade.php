<p>
    Edicion
</p>
año:
{{  $data['edicion'] ->edicion }}
<br>
nombre:
{{  $data['edicion'] ->nombre}}
<br>
descripcion:
{{  $data['programa'] ->descripcion }}
<br>
fecha_inicio:
{{  $data['programa'] ->fecha_inicio }}
<br>
fecha_fin:
{{  $data['programa'] ->fecha_fin }}


<h2>Cronograma</h2>

@foreach($data['sesion'] as $sesion)
    <li><a>{{$sesion->enlace_meet}}</a></li>
@endforeach



