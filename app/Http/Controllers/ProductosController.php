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
            'Titulo' => 'required|string|max:100',
            'Genero' => 'required|string|max:100',
            'Precio' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:100',
            'Portada' => 'required|max:10000|mimes:jpeg,png,jpg',
            'Autor' => 'required|string|max:100',

        ];
        $Mensaje = ["required" => 'El :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        // $datosProducto=request()->all();
        // dd($request->all());
        $datosProducto = request()->except('_token');

        if ($request->hasFile('Portada')) {
            $datosProducto['Portada'] = $request->file('Portada')->store('uploads', 'public');
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
            'Titulo' => 'required|string|max:100',
            'Genero' => 'required|string|max:100',
            'Precio' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:100',
        ];

        if ($request->hasFile('Portada')) {
            $campos += ['Portada' => 'required|max:10000|mimes:jpeg,png,jpg'];
        }
        $Mensaje = ["required" => 'El :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        $datosProducto = request()->except(['_token', '_method']);

        if ($request->hasFile('Portada')) {
            $producto = Productos::findOrFail($id);

            Storage::delete('public/' . $producto->Portada);

            $datosProducto['Portada'] = $request->file('Portada')->store('uploads', 'public');
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
    public function destroy($id)
    {
        $producto = Productos::findOrFail($id);

        if (Storage::delete('public/' . $producto->Portada)) {
            Productos::destroy($id);
        }
        return redirect('productos')->with('Mensaje', 'Producto Eliminado');
    }
}
