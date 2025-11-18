@extends('layout')

@section('content')
<h1>Editar Reserva</h1>

<form action="{{ route('reservas.update', ['reserva' => $reserva]) }}" method="POST">
  @csrf
  @method('PUT')
  @include('reservas.form', ['reserva'=>$reserva])
  <button type="submit" class="btn btn-primary">Actualizar</button>
  <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
