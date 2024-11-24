<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('book/store') }}" method="POST">
        @csrf
        <label for="title">Título del libro:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Descripción del libro:</label>
        <input type="text" name="description" id="description" required>
    
        <label for="authors">Autores:</label>
        <select name="authors[]" id="authors" multiple required>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>

        <label for="genres">Géneros:</label>
        <select name="genres[]" id="genre" multiple required>
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->title }}</option>
            @endforeach
        </select>

        <label for="editorial">Géneros:</label>
        <select name="editorial" id="editorial" required>
            @foreach ($editorials as $editorial)
                <option value="{{ $editorial->id }}">{{ $editorial->name }}</option>
            @endforeach
        </select>

        <label for="edition_number">Número de edición</label>
        <input type="text" name="edition_number" id = "edition_number" required>

        <label for="url">URL del libro</label>
        <input type="text" name="url" id = "url" required>
    
        <button type="submit">Guardar</button>
    </form>
</body>
</html>