<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', ['productos' => $productos]);
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:500',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
        ]);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto guardado exitosamente');
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit', ['producto' => $producto]);
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:500',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
        ]);

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);

        if ($producto) {
            $producto->delete();
            return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente');
        } else {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }
    }
}
