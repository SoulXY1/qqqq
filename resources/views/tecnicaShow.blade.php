<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Técnica</title>
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="container mt-5">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-item nav-link" href="/botella">Vinos y Licores OscarDDDD</a>
            <a class="nav-item nav-link" href="/botella/create">Agregar botella</a>
            <a class="nav-item nav-link active" href="/tecnica">Ver Técnicas</a>
            <a class="nav-item nav-link" href="/tecnica/create">Agregar Técnica</a>
        </nav>
    </div>

    <div class="container mt-3">
        <h1 class="header">{{$tecnica->tecnica}}</h1>

        <div>
            <div class="col s6">
                <a href="/tecnica/{{$tecnica->id}}/edit" class="btn btn-primary btn-block mt-3" style="width:100px;">Editar información</a>
            </div>
            <div>
                <form method="POST" action="/tecnica/{{$tecnica->id}}" id="formulario">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary btn-block mt-3" style="width:100px;">Eliminar técnica</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>