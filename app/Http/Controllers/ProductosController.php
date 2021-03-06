<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datos['productos']=Productos::paginate(5);
        //El metodo view llama a donde esta views (resources=>views)
        //productos.index llama a la carpeta productos al archivo index
        // return view('productos.index', $datos);
        $datos = Productos::paginate(5);

        /* Se carga la vista */
        return view('productos.index', [
            'productos' => $datos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //El metodo view llama a donde esta views (resources=>views)
        //productos.create llama a la carpeta productos al archivo create
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'titulo' => 'required|string|max:100',
            'genero' => 'required|string|max:100',
            'precio' => 'required|string|max:100',
            'descripcion' => 'required|string|max:100',
            'portada' => 'required|max:10000|mimes:jpeg,png,jpg',
            'autor' => 'required|string|max:100'

        ];
        $Mensaje = ["required" => 'El :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        // $datosProducto=request()->all();
        // dd($request->all());
        $datosProducto = request()->except('_token');

        if ($request->hasFile('portada')) {
            $datosProducto['portada'] = $request->file('portada')->store('uploads', 'public');
        }

        Productos::insert($datosProducto);

        //return response()->json($datosProducto);
        return redirect('productos')->with('Mensaje', 'Producto agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Productos::findOrFail($id);

        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'titulo' => 'required|string|max:100',
            'genero' => 'required|string|max:100',
            'precio' => 'required|string|max:100',
            'descripcion' => 'required|string|max:100',
        ];

        if ($request->hasFile('portada')) {
            $campos += ['portada' => 'required|max:10000|mimes:jpeg,png,jpg'];
        }
        $Mensaje = ["required" => 'El :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        $datosProducto = request()->except(['_token', '_method']);

        if ($request->hasFile('portada')) {
            $producto = Productos::findOrFail($id);

            Storage::delete('public/' . $producto->Portada);

            $datosProducto['portada'] = $request->file('portada')->store('uploads', 'public');
        }

        Productos::where('id', '=', $id)->update($datosProducto);

        // $producto= Productos::findOrFail($id);
        // return view('productos.edit', compact('producto'));

        return redirect('productos')->with('Mensaje', 'Producto Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $producto)
    {
        Storage::disk('public')->delete($producto->image); //Elimina la imagen de la carpeta

        $producto->delete();
        
        return redirect('productos')->with('Mensaje', 'Producto Eliminado');
    }
}
