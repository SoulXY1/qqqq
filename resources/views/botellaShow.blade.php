<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info botella</title>
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
        <h1 class="header">{{$botella->nombre}}</h1>
        <h4>Marca: {{$botella->marca}}</h4>
        <h4>Capacidad: {{$botella->capacidad}}</h4>
        <h4>Precio: ${{$botella->precio}}</h4>

        @foreach ($botella->tecnicas as $tecnica)
        <h4>{{$tecnica->tecnica}}</h4>
        @endforeach
    </div>
    <div class="container d-grid gap-2">
        <a href="/botella/{{$botella->id}}/edit" class="btn btn-primary btn-block mt-3" style="width:100px;">Editar información</a>

        <form method="POST" action="/botella/{{$botella->id}}" id="formulario">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary btn-block mt-3" style="width:100px;">Eliminar Botella</button>
        </form>
    </div>
</body>

</html>