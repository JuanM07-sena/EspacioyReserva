@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1>Reservas</h1>
  <a href="{{ route('reservas.create') }}" class="btn"style="background-color:#0a1a3a; color:white;">Nueva Reserva</a>
</div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Espacio</th>
      <th>Solicitante</th>
      <th>Fecha</th>
      <th>Inicio</th>
      <th>Fin</th>
      <th>Motivo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reservas as $r)
    <tr>
      <td>{{ $r->id }}</td>
      <td>{{ $r->espacio->nombre ?? '—' }}</td>
      <td>{{ $r->solicitante }}</td>
      <td>{{ $r->fecha }}</td>
      <td>{{ $r->hora_inicio }}</td>
      <td>{{ $r->hora_fin }}</td>
      <td>{{ $r->motivo }}</td>
      <td>
        <a href="{{ route('reservas.edit', $r) }}" class="btn btn-sm btn-secondary">Editar</a>
        <form action="{{ route('reservas.destroy', $r) }}" method="POST" style="display:inline-block;">
          @csrf
          @method('DELETE')
          <button class="btn btn-sm btn-danger" onclick="return confirm('¿Deseas eliminar?')">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $reservas->links() }}
@endsection
