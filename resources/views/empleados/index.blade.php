@extends('layouts.app')

@section('content')

<div class="container"> {{-- Orignal --}}
    <div class="card text-white bg-dark mb-3 border-primary"> {{-- edit --}}
        <div class="card-header h4 border-primary">Empleados</div> {{-- Editado --}}
        <div class="card-body"> {{-- edit --}}

            @if(Session::has('Mensaje'))
            <div class="alert alert-success" role="alert">
                {{    Session::get('Mensaje')     }}
            </div>
            @endif

            <a href="{{ url('empleados/create') }}" class="btn btn-success btn-outline-success">Agregar Empleado</a>

            <form method="GET" action="{{ url('/empleados') }}" accept-charset="UTF-8"
                class="form-inline my-2 my-lg-0 float-right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Buscar..."
                        value="{{ request('search') }}">
                    <span class="input-group-append">
                        <button class="btn btn-secondary btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </span>
                </div>
            </form>

            <br />
            <br />
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead class="thead bg-success">
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                        <tr>
                            {{--  <td>{{ $loop->iteration }}</td>  --}}
                            <td>{{ $empleado->id}}</td>
                            <td>
                                {{--  <img src="{{ asset('storage').'/'.$empleado->Foto}}" class="img-thumbnail
                                img-fluid" alt="" width="150"> --}}
                            </td>

                            <td>{{ $empleado->NombreEmpleado}}</td>
                            <td>{{ $empleado->ApellidoEmpleado}}</td>
                            <td>{{ $empleado->Edad}}</td>
                            <td>{{ $empleado->Correo}}</td>

                            <td>

                                <a class="btn btn-info btn-outline-info" href="{{ url('/empleados/'.$empleado->id) }}"
                                    title="View empleado">Ver</a>

                                <a class="btn btn-warning btn-outline-warning"
                                    href="{{ url('/empleados/'.$empleado->id.'/edit') }}">Editar</a>
                                <form method="post" action="{{ url('/empleados/'.$empleado->id)}}"
                                    style="display:inline">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <button class="btn btn-danger btn-outline-danger" type="submit"
                                        onclick="return confirm('Borrar?');">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $empleados->links() }}

        </div>
    </div>
</div>

@endsection
