<div class="form-group">
    <label for="titulo" class="control-label">{{'titulo'}}</label>
    <input class="form-control {{ $errors->has('titulo')?'is-invalid':'' }}" type="text" name="titulo" id="titulo" value="{{ old('titulo') }}">
    {!! $errors->first('titulo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="genero" class="form-label">{{'genero'}}</label>
    <input class="form-control {{ $errors->has('Gengeneroero')?'is-invalid':'' }}" type="text" name="genero" id="genero" value="{{ old('genero') }}">
    {!! $errors->first('genero','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="descripcion" class="form-label">{{'descripcion:'}}</label>
    <input class="form-control {{ $errors->has('descripcion')?'is-invalid':'' }}" type="text" name="descripcion" id="descripcion"
        value="{{ old('descripcion') }}">
    {!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
    <label for="precio" class="form-label">{{'precio'}}</label>
    <input class="form-control {{ $errors->has('precio')?'is-invalid':'' }}" type="text" name="precio" id="precio" value="{{ old('precio') }}">
    {!! $errors->first('precio','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
    <label for="autor" class="form-label">{{'autor'}}</label>
    <input class="form-control {{ $errors->has('autor')?'is-invalid':'' }}" type="text" name="autor" id="autor" value="{{ old('autor') }}">
    {!! $errors->first('autor','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="portada" class="form-label">{{'portada'}}</label>
    @if (isset($producto->portada))
    <br />
    <img class="img-fluid" src="{{ asset('storage').'/'.$producto->portada}}" alt="" width="200">
    <br />
    @endif

    <input class="form-control {{ $errors->has('portada')?'is-invalid':'' }}" type="file" name="portada" id="portada"
        value="">
</div>

<input type="submit" class="btn btn-outline-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
<a class="btn btn-outline-primary" href="{{ url('productos') }}">Regresar</a>
