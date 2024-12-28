<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Empleado</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-400">
    <form action="{{route('employees.store')}}" method="POST" class="bg-white w-80 mx-auto mt-8 rounded-lg p-6">
        @csrf
        
        <label for="name">Nombre</label>
        <input class="border border-gray-300 w-full px-3 py-2 mb-4 rounded-md" type="text" name="name" id="name">

        <label for="position">Cargo</label>
        <input class="border border-gray-300 w-full px-3 py-2 mb-4 rounded-md" type="text" name="position" id="position">

        <label for="salary">Salario</label>
        <input class="border border-gray-300 w-full px-3 py-2 mb-4 rounded-md" type="number" name="salary" id="salary">

        <button type="submit" class="bg-blue-400 hover:bg-blue-500 rounded-lg p-2">Agregar</button>
    </form>
</body>
</html>