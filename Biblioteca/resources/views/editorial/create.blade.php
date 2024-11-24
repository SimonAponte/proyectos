<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('editorial/store')}}" method="POST">
        @csrf
        <label for="">
            Nombre
            <input type="text" name="name">
        </label>

        <label for="">
            Descripción
            <input type="text" name="description">
        </label>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>