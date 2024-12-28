<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de trabajo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex justify-center items-center ">
        <table class="rounded-lg overflow-hidden">
            <thead class="bg-red-300">
                <tr>
                    <th class="px-6">Nombre</th>
                    <th class="px-6">Cargo</th>
                    <th class="px-6">Salario</th>
                    <th class="px-6">Horas Trabajadas</th>
                    <th class="px-6">Total Ganado</th>
                </tr>
            </thead>
            <tbody class="bg-red-100 text-center">
                <tr class="h-16">
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->position}}</td>
                    <td>{{$employee->salary}}$</td>
                    <td>{{$workdays}}h</td>
                    <td>{{$employee->salary * $workdays}}$</td>
                </tr>
            </tbody>
        </table>   
    </div>
    <div class="flex justify-center items-center my-5">
        
        <a class="bg-red-400 hover:bg-red-500 rounded-lg p-2" href="{{route('employees.index')}}" role="button">Volver</a>
        
    </div>
    
    
</body>
</html>