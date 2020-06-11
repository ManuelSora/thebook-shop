<?php

namespace App\Http\Controllers;

use App\Autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Autores::paginate(5);

        /* Se carga la vista */
        return view('autores.index', [
            'autores' => $datos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function show(Autores $autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function edit(Autores $autores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autores $autores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autores $autores)
    {
        //
    }
}
