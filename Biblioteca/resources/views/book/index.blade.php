<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('book/create')}}">Crear Libros</a>
    <table>
        <thead>
            <tr><th>Título</th><th>Descripción</th><th>Autor</th><th>Género</th><th>Editoriales</th><th>Ediciones</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->description}}</td>

                    <td>
                        @foreach ($book->authors as $author)
                        {{$author->name}}
                        @endforeach
                    </td>

                    <td>
                        @foreach ($book->genres as $genre)
                        {{$genre->title}}
                        @endforeach
                    </td>

                    <td>
                        @foreach ($book->editorials as $editorial)
                        {{$editorial->name}}
                        @endforeach
                    </td>

                    <td>
                        @foreach ($book->editorials as $editorial)
                        {{$editorial->pivot->edition_number}} = {{$editorial->pivot->url}} 
                        @endforeach
                    </td>

                    <td>
                        <a href="{{route('book/show', $book->id)}}">Vista detallada</a>
                    </td>

                    
                </tr>
            @endforeach
            
        </tbody>
    </table>
    @foreach ($books as $book)
        
    @endforeach
    
</body>
</html>