<?php
namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
class ProductoController extends Controller
{
    public function index()
{
    $productos = Producto::all();
    return response()->json([
        'success' => true,
        'data' => $productos
    ], 200);
}
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'precio' => 'required|numeric',
        'stock' => 'required|integer'
    ]);

    $producto = Producto::create($request->all());

    return response()->json([
        'success' => true,
        'message' => 'Producto creado correctamente',
        'data' => $producto
    ], 201);
}

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
