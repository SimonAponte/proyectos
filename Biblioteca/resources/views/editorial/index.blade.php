<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('editorial/create')}}">Crear Editorial</a>
    <table>
        <thead>
            <tr><th>Nombre</th><th>Descripción</th></tr>
        </thead>
        <tbody>
            @foreach ($editorials as $editorial)
                <tr><td>{{$editorial->name}}</td><td>{{$editorial->description}}</td></tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>