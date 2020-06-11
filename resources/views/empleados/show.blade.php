


@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card text-white bg-dark mb-3 border-primary">
        <div class="card-header h4 border-primary">Empleado {{ $empleado->NombreEmpleado }} {{ $empleado->ApellidoEmpleado }}</div>
        <div class="card-body">
                    
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $empleado->id }}</td>
                            </tr>
                            <tr>
                                <th> Foto </th>
                                <td>
                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
                                </td>
                            </tr>
                            <tr>
                                <th> Nombre </th>
                                <td> {{ $empleado->NombreEmpleado }} </td>
                            </tr>
                            <tr>
                                <th> Apellido </th>
                                <td> {{ $empleado->ApellidoEmpleado }} </td>
                            </tr>
                            <tr>
                                <th> Edad </th>
                                <td> {{ $empleado->Edad }} </td>
                            </tr>
                            <tr>
                                <th> Correo </th>
                                <td> {{ $empleado->Correo }} </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>

                        <a href="{{ url('/empleados') }}" title="Back"><button class="btn btn-info btn-sm btn-outline-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/empleados/' . $empleado->id . '/edit') }}" title="Edit empleado"><button class="btn btn-warning btn-sm btn-outline-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('empleados' . '/' . $empleado->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm btn-outline-danger" title="Delete empleado" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

        </div>
    </div>
</div>
@endsection