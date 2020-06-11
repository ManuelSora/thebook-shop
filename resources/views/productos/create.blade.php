
@extends('layouts.app')

@section('content')

<div class="container">
<div class="card text-white bg-dark mb-3 border-primary">
<div class="card-header h4 border-primary">Agregar Libro</div>
<div class="card-body">

@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
<ul>
@foreach ($errors->all() as $error)
    <li> {{ $error }} </li>
@endforeach
</ul>
</div>
@endif

<form action="{{ url('/productos')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }} 

@include('productos.form', ['Modo'=>'crear'])

</form>

</div>
</div>
</div>

@endsection