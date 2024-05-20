<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tecnica</title>
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="container mt-5">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link" href="/botella">Vinos y Licores OscarDDDD</a>
            <a class="nav-item nav-link"  href="/botella/create">Agregar botella</a>
            <a class="nav-item nav-link active" href="/tecnica">Ver Técnicas</a>
            <a class="nav-item nav-link" href="/tecnica/create">Agregar Técnica</a>
        </nav>
    </div>

    <h1 class="container mt-5">Editar información de la técnica</h1>
    <form method="POST" action="/tecnica/{{$tecnica->id}}" id="formulario" class="container">
        @csrf
        @method('patch')

        <div class="form-group mt-3">
            <label for="tecnica">Nombre de la técnica</label>
            <input id="tecnica" type="text" name="tecnica" class="form-control" value="{{$tecnica->tecnica}}">

        </div>

        <div class="mt-3">
            <button class="btn btn-primary" type="submit" name="action">Editar</button>
        </div>
    </form>


</body>

</html>