

<div class="form-group">
<label for="Titulo" class="control-label" >{{'Titulo'}}</label>
<input type="text" class="form-control {{ $errors->has('Titulo')?'is-invalid':'' }}" name="Titulo" id="Titulo"
value="{{ isset($producto->titulo)?$producto->titulo:old('titulo') }}">
{!! $errors->first('Titulo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Genero" class="form-label" >{{'Genero'}}</label>
<input type="text" class="form-control {{ $errors->has('Genero')?'is-invalid':'' }}" name="Genero" id="Genero"
value="{{ isset($producto->genero)?$producto->genero:old('genero') }}">
{!! $errors->first('Genero','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Precio" class="form-label" >{{'Precio'}}</label>
<input type="text" class="form-control {{ $errors->has('Precio')?'is-invalid':'' }}" name="Precio" id="Precio"
value="{{ isset($producto->precio)?$producto->precio:old('precio') }}">
{!! $errors->first('Precio','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Descripcion" class="form-label" >{{'Email:'}}</label>
<input type="email" class="form-control {{ $errors->has('Descripcion')?'is-invalid':'' }}" name="Descripcion" id="Descripcion"
value="{{ isset($producto->descripcion)?$producto->descripcion:old('descripcion') }}">
{!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Autor" class="form-label" >{{'Autor'}}</label>
<input type="text" class="form-control {{ $errors->has('Autor')?'is-invalid':'' }}" name="Autor" id="Autor"
value="{{ isset($producto->autor)?$producto->autor:old('autor') }}">
{!! $errors->first('Autor','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Portada" class="form-label" >{{'Portada'}}</label>
@if (isset($producto->portada))
<br/>
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->portada}}" alt="" width="200">
<br/>
@endif

<input class="form-control {{ $errors->has('Portada')?'is-invalid':'' }}" type="file" name="Portada" id="Portada" value="">
</div>

<input type="submit" class="btn btn-outline-success"
value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
<a class="btn btn-outline-primary" href="{{ url('productos') }}" >Regresar</a>
