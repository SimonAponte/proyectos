<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Día de trabajo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-400">
    <form action="{{route('workdays.store')}}" method="POST" class="bg-white w-80 mx-auto mt-8 rounded-lg p-6">
        @csrf
        <input type="hidden" name="employee_id" value="{{$id}}">

        <label for="date">Fecha</label>
        <input class="border border-gray-300 w-full px-3 py-2 mb-4 rounded-md" type="date" name="date" id="name">

        <label for="worked_hours">Horas trabajadas</label>
        <input class="border border-gray-300 w-full px-3 py-2 mb-4 rounded-md" type="number" min="0" step="0.01" name="worked_hours" id="worked_hours">
        
        <button class="bg-blue-400 hover:bg-blue-500 rounded-lg p-2" type="submit">Añadir</button>
    </form>
</body>
</html>