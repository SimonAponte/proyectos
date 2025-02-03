<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Inventory</title>

    @vite('resources/css/app.css')

</head>
<body class="bg-gray-200">

    <header class = " bg-blue-400 p-6 border border-red-600 flex gap-2">
        
        <a href="#" class="p-4 border border-red-600 hover:bg-white block">
            
            <p>Haz click aquí</p>

        </a>

        <a href="#" class="p-4 border border-red-600 hover:bg-white block">
            
            <p>Haz click aquí</p>

        </a>

        <a href="#" class="p-4 border border-red-600 hover:bg-white block">
            
            <p>Haz click aquí</p>

        </a>
    
    </header>

    <main class = "p-4">

        <div class = " bg-white">

            <table class = "border border-green-700 w-full">

                <thead class = "bg-green-600  text-white">

                    <th class = "border border-green-700 px-4 py-2">Nombre de columna</th>
                    <th class = "border border-green-700 px-4 py-2">Nombre de columna</th>
                    <th class = "border border-green-700 px-4 py-2">Nombre de columna</th>
                    <th class = "border border-green-700 px-4 py-2">Nombre de columna</th>

                </thead>

                <tbody class = " text-center">

                    <tr class="hover:bg-green-100">

                        <td class = "border border-green-700 px-4 py-2">2</td>
                        <td class = "border border-green-700 px-4 py-2">2</td>
                        <td class = "border border-green-700 px-4 py-2">2</td>
                        <td class = "border border-green-700 px-4 py-2">2</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </main>

    <footer class = " bg-red-400 border border-blue-400 p-6 flex justify-center items-center gap-8">
        
        <ul>

            <li>Sobre nosotros</li>
            <li>Aviso legal</li>

        </ul>

        <ul>

            <li>Copyright</li>
            <li>Contacto</li>

        </ul>

    </footer>
    
</body>
</html>