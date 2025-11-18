<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body >
<nav class="navbar navbar-expand-lg" style="background-color:#0a1a3a;" class="p-0 m-0">
  <div class="container-fluid p-0">
    <a class="navbar-brand text-white ms-3" href="#">SENA</a>

    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('espacios.index') }}">Espacios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('reservas.index') }}">Reservas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="container">
@if(session('ok'))
<div class="alert alert-success">{{ session('ok') }}</div>
@endif

@yield('content')
</div>
</body>
</html>