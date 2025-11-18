@extends('layout')

@section('content')
<h1>Nueva Reserva</h1>

<form action="{{ route('reservas.store') }}" method="POST">
  @include('reservas.form',['espacios'=>$espacios])
  <button class="btn btn-primary">Guardar</button>
  <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
