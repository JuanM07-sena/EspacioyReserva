@extends('layout')
@section('content')
<h1>Nuevo Espacio</h1>
<form action="{{ route('espacios.store') }}" method="POST">
    @csrf
@include('espacios.form')
<button class="btn btn-primary">Guardar</button>
<a href="{{ route('espacios.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection