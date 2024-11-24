<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$book->title}}</h1>

    <p>{{$book->description}}</p>

    <ul>
        @foreach ($bookEditorial as $edition)
           <li>Edición:{{$edition->edition_number}} URL:{{$edition->url}} <a href="{{route('comment/create', $edition->id)}}">Añadir Comentario</a></li> 
            <ul>
                <h2>Comentarios</h2>
                @foreach ($edition->users as $comment)
                    <li>{{($comment->pivot->comment)}}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
</body>
</html>