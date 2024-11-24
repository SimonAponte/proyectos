<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('genre/create')}}">Crear Género</a>
    <table>
        <thead>
            <tr><th>Título</th><th>Descripción</th></tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr><td>{{$genre->title}}</td><td>{{$genre->description}}</td></tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>