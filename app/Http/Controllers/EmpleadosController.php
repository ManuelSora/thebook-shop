<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datos['empleados']=Empleados::paginate(5);
        //El metodo view llama a donde esta views (resources=>views)
        //empleados.index llama a la carpeta empleados al archivo index
        // return view('empleados.index', $datos);

        $datos = Empleados::paginate(5);

        /* Se carga la vista */
        return view('empleados.index', [
            'empleados' => $datos
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
        //empleados.create llama a la carpeta empleados al archivo create
        return view('empleados.create');
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
            'NombreEmpleado' => 'required|string|max:100',
            'ApellidoEmpleado' => 'required|string|max:100',
            'Edad' => 'required|string|max:100',
            'Correo' => 'required|string|max:100',
            'Foto' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        // $datosEmpleado=request()->all();

        $datosEmpleado = request()->except('_token');

        if ($request->hasFile('Foto')) {
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleados::insert($datosEmpleado);

        //return response()->json($datosEmpleado);
        return redirect('empleados')->with('Mensaje', 'Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleados::findOrFail($id);

        return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleados::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'NombreEmpleado' => 'required|string|max:100',
            'ApellidoEmpleado' => 'required|string|max:100',
            'Edad' => 'required|string|max:100',
            'Correo' => 'required|string|max:100',
        ];

        if ($request->hasFile('Foto')) {
            $campos += ['Foto' => 'required|max:10000|mimes:jpeg,png,jpg'];
        }
        $Mensaje = ["required" => 'El :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        $datosEmpleado = request()->except(['_token', '_method']);

        if ($request->hasFile('Foto')) {
            $empleado = Empleados::findOrFail($id);

            Storage::delete('public/' . $empleado->Foto);

            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleados::where('id', '=', $id)->update($datosEmpleado);

        // $empleado= Empleados::findOrFail($id);
        // return view('empleados.edit', compact('empleado'));

        return redirect('empleados')->with('Mensaje', 'Empleado Modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleados::findOrFail($id);

        if (Storage::delete('public/' . $empleado->Foto)) {
            Empleados::destroy($id);
        }
        return redirect('empleados')->with('Mensaje', 'Empleado Eliminado');
    }
}
