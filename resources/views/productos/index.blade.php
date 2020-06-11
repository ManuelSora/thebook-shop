@extends('layouts.app')

@section('content')

<div class="container"> {{-- Orignal --}}
    <div class="card text-white bg-dark mb-3 border-primary"> {{-- edit --}}
        <div class="card-header h4 border-primary">Productos</div> {{-- Editado --}}
        <div class="card-body"> {{-- edit --}}

            @if(Session::has('Mensaje'))
            <div class="alert alert-success" role="alert">
                {{    Session::get('Mensaje')     }}
            </div>
            @endif

            <a href="{{ url('productos/create') }}" class="btn btn-success btn-outline-success">Agregar Producto</a>

            <form method="GET" action="{{ url('/productos') }}" accept-charset="UTF-8"
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
                            <th>Portada</th>
                            <th>Titulo</th>
                            <th>Genero</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            {{--  <td>{{ $loop->iteration }}</td>  --}}
                            <td>{{ $producto->id }}</td>
                            <td>
                                {{--  <img src="{{ asset('storage').'/'.$producto->Portada}}" class="img-thumbnail
                                img-fluid" alt="" width="150"> --}}
                            </td>
                            <td>{{ $producto->Titulo}}</td>
                            <td>{{ $producto->Genero}}</td>
                            <td>{{ $producto->Precio}}</td>
                            <td>{{ $producto->Descripcion}}</td>

                            <td>

                                <a class="btn btn-info btn-outline-info" href="{{ url('/productos/'.$producto->id) }}"
                                    title="View producto">Ver</a>

                                <a class="btn btn-warning btn-outline-warning"
                                    href="{{ url('/productos/'.$producto->id.'/edit') }}">Editar</a>
                                <form method="post" action="{{ url('/productos/'.$producto->id)}}"
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

            {{ $productos->links() }}

        </div>
    </div>
</div>

@endsection
