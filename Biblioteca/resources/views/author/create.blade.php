<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('author/store')}}" method="POST">
        @csrf
        <label for="">
            Nombre
            <input type="text" name="name">
        </label>

        <label for="">
            Apellido
            <input type="text" name="lastname">
        </label>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>