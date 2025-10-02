<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerStore Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body id="app">
    <nav class="navbar navbar-expand bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">🎮 GamerStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="pt-3" style="padding:5%;">
        <h1>@{{ message }}</h1>
        <div class="row">
        
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Código (ID)</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articulos as $articulo)
                        <tr>
                            <td>{{$articulo->id_articulo}}</td>
                            <td>{{$articulo->nombre_articulo}}</td>
                            <td>${{$articulo->precio_articulo}}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editar_articulo{{$articulo->id_articulo}}"> Editar </a>
                                <a href='{{route("article.delete", $articulo->id_articulo)}}' onclick="return res()" class="btn btn-danger btn-sm"> Eliminar</a>
                            </td>
                        </tr>
                        <!-- modal edit article -->
                        <div class="modal fade" id="editar_articulo{{$articulo->id_articulo}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action='{{route("article.update")}}' method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <!-- <label for="codigo" class="form-label">Código Producto:</label> -->
                                                <input type="hidden" class="form-control" id="id_art" name="id_art" value="{{$articulo->id_articulo}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre De Producto:</label>
                                                <input type="text" class="form-control" id="nombre_art" name="nombre_art" value="{{$articulo->nombre_articulo}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="precio" class="form-label">Precio:</label>
                                                <input type="text" class="form-control" id="precio_art" name="precio_art" value="{{$articulo->precio_articulo}}">
                                            </div>
                                            <button type="submit" class="btn btn-info">Modificar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /. modal edit article -->
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action='{{route("article.create")}}' method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre De Producto:</label>
                                <input type="text" class="form-control" id="nombre_art" name="nombre_art">
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><b>$</b></span>
                                    <input type="text" class="form-control" id="precio_art" name="precio_art">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- VueJS rules -->
    <script>
    const { createApp } = Vue;
        createApp({
            data() {
                return {
                    message: 'VueJS works!'
                }
            }
        }).mount('#app');
    </script>
</body>
</html>