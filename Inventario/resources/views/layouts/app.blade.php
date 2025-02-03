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
        
        <a href="{{route('products.index')}}" class="p-4 border border-red-600 hover:bg-white block">
            
            <p>Productos</p>

        </a>

        <a href="{{route('categories.index')}}" class="p-4 border border-red-600 hover:bg-white block">
            
            <p>Categorías</p>

        </a>

        <a href="{{route('providers.index')}}" class="p-4 border border-red-600 hover:bg-white block">
            
            <p>Proveedores</p>

        </a>

        <a href="{{route('inventories.index')}}" class="p-4 border border-red-600 hover:bg-white block">
            
            <p>Inventarios</p>

        </a>

        <a href="{{route('sales.index')}}" class="p-4 border border-red-600 hover:bg-white block">
            
            <p>Ventas</p>

        </a>
    
    </header>

    <main class = "p-4">
        
        @yield('content')

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