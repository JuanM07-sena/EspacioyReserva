@extends('layout')

@section('content')
<h1>Editar Espacio</h1>

<form action="{{ route('espacios.update', $espacio) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input 
            type="text" 
            name="nombre" 
            value="{{ old('nombre', $espacio->nombre) }}" 
            class="form-control" 
            required 
            maxlength="255"
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input 
            type="text" 
            name="tipo" 
            value="{{ old('tipo', $espacio->tipo) }}" 
            class="form-control" 
            required 
            maxlength="255"
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Capacidad</label>
        <input 
            type="number" 
            name="capacidad"
            value="{{ old('capacidad', $espacio->capacidad) }}" 
            class="form-control"
            min="1"
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Ubicación</label>
        <input 
            type="text"  
            name="ubicacion" 
            value="{{ old('ubicacion', $espacio->ubicacion) }}" 
            class="form-control" 
            required 
            maxlength="255"
        >
    </div>

 
    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('espacios.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
