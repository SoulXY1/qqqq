<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Técnicas</title>
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

    <div class="container mt-3">
        <h1 class="center-align">Tecnicas de Licores</h1>
        <a href="/tecnica/create" class="btn btn-primary mt-3">Agregar Tecnica</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Detalles</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tecnicas as $tecnica)
                <tr>
                    <td>{{$tecnica->id}}</td>
                    <td>{{$tecnica->tecnica}}</td>

                    <td><a href="/tecnica/{{$tecnica->id}}" class="btn btn-outline-primary">Ir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>