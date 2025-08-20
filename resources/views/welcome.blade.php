<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerStore - Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- HEADER -->
    <header class="flex justify-between items-center bg-white shadow px-6 py-4">
        <div class="text-xl font-bold">🎮 GamerStore</div>
        <button class="text-red-500 font-semibold hover:underline">Cerrar sesión</button>
    </header>

    <!-- MAIN CONTAINER -->
    <div class="flex p-6 gap-6">

        <!-- SIDEBAR IZQUIERDA -->
        <aside class="w-1/3 bg-white shadow p-4 rounded-lg">
            <!-- Tabs -->
            <div class="flex border-b mb-4">
                <button class="px-4 py-2 text-blue-600 border-b-2 border-blue-600 font-semibold">Artículos</button>
                <button class="px-4 py-2 text-gray-600 hover:text-blue-600">Clientes</button>
            </div>

            <!-- Formulario -->
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre artículo</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Precio</label>
                    <input type="number" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Guardar
                </button>
            </form>
        </aside>

        <!-- TABLA DERECHA -->
        <section class="flex-1 bg-white shadow p-4 rounded-lg">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nombre artículo</th>
                        <th class="px-4 py-2 text-left">Precio</th>
                        <th class="px-4 py-2 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($articulos as $articulo)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $articulo->id_articulo }}</td>
                            <td class="px-4 py-2">{{ $articulo->nombre_articulo }}</td>
                            <td class="px-4 py-2">{{ $articulo->precio_articulo }}</td>
                            <td class="px-4 py-2">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded">Editar</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded">Borrar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
