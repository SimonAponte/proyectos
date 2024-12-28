<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100">

    <div class="flex justify-center items-center my-5">

        <a class="bg-red-400 hover:bg-red-500 rounded-lg p-2" href="{{route('employees.create')}}">Agregar Empleado</a>

    </div>

    <div class="flex justify-center items-center ">

        <table class="rounded-lg overflow-hidden">

            <thead class="bg-blue-300">
                <tr>
                    <th class="px-6">Nombre</th>
                    <th class="px-6">Cargo</th>
                    <th class="px-6">Salario</th>
                    <th class="px-6">Acciones</th>
                </tr> 
            </thead>
            
            <tbody class="bg-blue-100 text-center">
                
                @foreach ($employees as $employee)
                <tr class="h-16">
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->position}}</td>
                    <td>{{$employee->salary}}$</td>
                    <td>
                        <form action="{{ route('employees.destroy', ['employee' => $employee->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-400 hover:bg-red-500 rounded-lg p-2">
                                Eliminar
                            </button>
                            <a class="bg-red-400 hover:bg-red-500 rounded-lg p-2" href="{{route('employees.edit', ['employee' => $employee->id])}}">Editar</a>
                            <a class="bg-red-400 hover:bg-red-500 rounded-lg p-2" href="{{route('workdays.salary', ['id' => $employee->id])}}">Calcular Salario</a>
                            <a class="bg-red-400 hover:bg-red-500 rounded-lg p-2" href="{{route('workdays.create', ['id' => $employee->id])}}">Añadir día de trabajo</a>
                        </form>
                        
                    </td>
                </tr>
                @endforeach    
                
            </tbody>
        
        </table>

    </div>
    
</body>
</html>