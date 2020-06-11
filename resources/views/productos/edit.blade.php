
@extends('layouts.app')

@section('content')

<div class="container">
<div class="card text-white bg-dark mb-3 border-primary">
<div class="card-header h4 border-primary">Modificar Libro</div>
<div class="card-body">


<form action="{{ url('/productos/'.$producto->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('productos.form', ['Modo'=>'editar'])

</form>

</div>
</div>
</div>

@endsection