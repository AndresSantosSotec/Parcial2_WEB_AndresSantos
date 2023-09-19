@extends('layout.template')
@section('title', 'Registrar Producto | Ferromax')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>Registrar Productos de la tienda de materiales</h2>

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Ocurrió un error. Por favor, verifique sus campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ old('descripcion') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="precio" id="precio" value="{{ old('precio') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="stock" id="stock" value="{{ old('stock') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection
