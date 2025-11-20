<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<head>
    <style>
 .botones{

    margin:150px;

 }
    </style>
</head>


@extends('layouts.app')

@section('content')

<div class="botones">
    @can('ver productos')
    <button class="btn btn-Success">Ver Productos</button>
    @endcan
    
    @can('crear productos')
    <button class="btn btn-Primary">Crear Productos</button>
    @endcan
    
    @can('editar productos')
    <button class="btn btn-Secondary">Editar Productos</button>
    @endcan
    
    @can('eliminar productos')
   <button class="btn btn-Danger">Eliminar productos</button>
    @endcan
    
</div>
@endsection









