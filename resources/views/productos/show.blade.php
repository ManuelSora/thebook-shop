
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card text-white bg-dark mb-3 border-primary">
        <div class="card-header h4 border-primary">Libro {{ $producto->Titulo }} {{ "$" }}{{ $producto->Precio }}</div>
        <div class="card-body">
                    
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $producto->id }}</td>
                            </tr>
                            <tr>
                                <th> Portada </th>
                                <td>
                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->Portada}}" alt="" width="200">
                                </td>
                            </tr>
                            <tr>
                                <th> Titulo </th>
                                <td> {{ $producto->Titulo }} </td>
                            </tr>
                            <tr>
                                <th> Genero </th>
                                <td> {{ $producto->Genero }} </td>
                            </tr>
                            <tr>
                                <th> Precio </th>
                                <td> {{ $producto->Precio }} </td>
                            </tr>
                            <tr>
                                <th> Descripcion </th>
                                <td> {{ $producto->Descripcion }} </td>
                            </tr>
                            <tr>
                                <th> Autor </th>
                                <td> {{ $producto->Autor }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                        <a href="{{ url('/productos') }}" title="Back"><button class="btn btn-info btn-sm btn-outline-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/productos/' . $producto->id . '/edit') }}" title="Edit producto"><button class="btn btn-warning btn-sm btn-outline-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('productos' . '/' . $producto->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm btn-outline-danger" title="Delete producto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

        </div>
    </div>
</div>
@endsection