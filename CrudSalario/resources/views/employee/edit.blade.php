<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Agregar Empleado</title>
</head>
<body class="bg-blue-400">
    <h1>Añadir Empleado</h1>
    <form action="{{route('employees.update', ['employee' => $employee->id])}}" method="POST" class="bg-white w-80 mx-auto mt-8 rounded-lg p-6">
        @csrf
        @method("PUT")
        <label for="name">Nombre</label>
        <input class="border border-gray-300 w-full px-3 py-2 mb-4 rounded-md" type="text" name="name" id="name" value="{{$employee->name}}">

        <label for="position">Cargo</label>
        <input class="border border-gray-300 w-full px-3 py-2 mb-4 rounded-md" type="text" name="position" id="position" value="{{$employee->position}}">

        <button type="submit" class="bg-blue-400 hover:bg-blue-500 rounded-lg p-2">Modificar</button>
    </form>
</body>
</html>