<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('author/create')}}">Crear Autor</a>
    <table>
        <thead>
            <tr><th>Nombre</th><th>Apellido</th></tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr><td>{{$author->name}}</td><td>{{$author->lastname}}</td></tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>