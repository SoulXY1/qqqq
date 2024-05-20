<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear técnica</title>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="container mt-5">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link" href="/botella">Vinos y Licores OscarDDDD</a>
            <a class="nav-item nav-link" href="/botella/create">Agregar botella</a>
            <a class="nav-item nav-link" href="/tecnica">Ver Técnicas</a>
            <a class="nav-item nav-link active" href="/tecnica/create">Agregar Técnica</a>
        </nav>
    </div>

    <h1 class="container mt-5">Agregar una nueva Tecnica</h1>
    <form method="POST" action="/tecnica" id="formulario" class="container">
        @csrf

        <div class="form-group mt-3">
            <label for="tecnica">Nombre de la tecnica:</label>
            <input id="tecnica" type="text" name="tecnica" class="form-control">
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-light" type="submit" name="action">Agregar</button>
        </div>
    </form>


</body>

</html>