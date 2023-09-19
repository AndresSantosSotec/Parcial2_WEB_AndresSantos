@extends('layout.template')
@section('title', 'Productos | Ferromax')

@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Ferromax No 1 en techos Listado de Productos</h2>
            <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm">Nuevo Producto</a>

            <div class="mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Código de Producto</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acciones</th> <!-- Agregamos una columna para las acciones -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->descripcion }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $producto->stock }}</td>
                                <td>
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
