<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('comment/store')}}" method="POST">
        @csrf
        <input name="edition_id" type="hidden" value="{{$edition_id}}">
        <label for="">
            Comentario
            <input type="text" name="comment">
        </label>

        <select name="user" id="">

            @foreach ($users as $user)
                
                <option value="{{$user->id}}">{{$user->name}}</option>

            @endforeach
           
        </select>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>