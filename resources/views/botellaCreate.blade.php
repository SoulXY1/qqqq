<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar botella</title>
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="container mt-5">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link" href="/botella">Vinos y Licores OscarDDDD</a>
            <a class="nav-item nav-link active"  href="/botella/create">Agregar botella</a>
            <a class="nav-item nav-link" href="/tecnica">Ver Técnicas</a>
            <a class="nav-item nav-link" href="/tecnica/create">Agregar Técnica</a>
        </nav>
    </div>

    <h1 class="container mt-3">Integrar nueva botella</h1>
    <form method="POST" action="/botella" id="formulario" class="container">
        @csrf

        <div class="form-group mt-3">
            <label for="nombre">Nombre de la botella:</label>
            <input id="nombre" type="text" name="nombre" class="form-control">

        </div>
        <div class="form-group mt-3">
            <label for="marca">Marca:</label>
            <input id="marca" type="text" name="marca" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="tipo">Tipo de licor:</label>
            <input id="tipo" type="tipo" name="tipo" class="form-control">

        </div>
        <div class="form-group mt-3">
            <label for="capacidad">Capacidad (ml):</label>
            <input id="capacidad" type="number" name="capacidad" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="precio">Precio:</label>
            <input id="precio" type="number" name="precio" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="tecnicas">Tecnica</label>
            <select id="tecnicas" name="tecnicas[]" multiple class="form-control">
                <option value="" disabled selected>Tecnicas usadas:</option>
                @foreach($tecnicas as $tecnica)
                <option value="{{ $tecnica->id }}">{{ $tecnica->tecnica}}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary" type="submit" name="action">Crear</button>
        </div>
    </form>


</body>

</html>