@extends('layout')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
<h1>Espacios</h1>
<a href="{{ route('espacios.create') }}" class="btn" style="background-color:#0a1a3a; color:white;">Nuevo Espacio</a>
</div>


<table class="table table-bordered">
<thead>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Tipo</th>
    <th>Capacidad</th>
    <th>Ubicacion</th>
    <th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach($espacios as $e)
<tr>
<td>{{ $e->id }}</td>
<td>{{ $e->nombre }}</td>
<td>{{ $e->tipo }}</td>
<td>{{ $e->capacidad }}</td>
<td>{{ $e->ubicacion }}</td>
<td>
<a href="{{ route('espacios.edit',$e) }}" class="btn btn-sm btn-secondary">Editar</a>
<form action="{{ route('espacios.destroy',$e) }}" method="POST" style="display:inline-block;">
@csrf @method('DELETE')
<button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>


{{ $espacios->links() }}
@endsection