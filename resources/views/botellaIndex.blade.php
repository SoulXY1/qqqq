<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinateria Oscar Diaz</title>
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="container mt-5">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link active" href="/botella">Vinos y Licores OscarDDDD</a>
            <a class="nav-item nav-link" href="/botella/create">Agregar botella</a>
            <a class="nav-item nav-link" href="/tecnica">Ver Técnicas</a>
            <a class="nav-item nav-link" href="/tecnica/create">Agregar Técnica</a>
        </nav>
    </div>

    <div class="container mt-3">
        <h1 class="center-align">Botellas</h1>
        <a href="/botella/create" class="btn btn-primary mt-3">Agregar botellas</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Tipo</th>
                    <th>Capacida</th>
                    <th>Tecnica</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($botellas as $botella)
                <tr>
                    <td>{{$botella->id}}</td>
                    <td>{{$botella->nombre}}</td>
                    <td>{{$botella->marca}}</td>
                    <td>{{$botella->tipo}}</td>
                    <td>{{$botella->capacidad}}</td>
                    <td>
                        @foreach ($botella->tecnicas as $tecnica)
                        {{$tecnica->tecnica}}<br>
                        @endforeach
                    </td>
                    <td>${{$botella->precio}}</td>
                    <td><a href="/botella/{{$botella->id}}" class="btn btn-outline-primary">Ver mas</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>