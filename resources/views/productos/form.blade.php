<div class="form-group">
    <label for="Titulo" class="control-label">{{'Titulo'}}</label>
    <input class="form-control {{ $errors->has('Titulo')?'is-invalid':'' }}" type="text" name="Titulo" id="Titulo" value="{{ old('Titulo') }}">
    {!! $errors->first('Titulo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Genero" class="form-label">{{'Genero'}}</label>
    <input class="form-control {{ $errors->has('Genero')?'is-invalid':'' }}" type="text" name="Genero" id="Genero" value="{{ old('Genero') }}">
    {!! $errors->first('Genero','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Descripcion" class="form-label">{{'Descripcion:'}}</label>
    <input class="form-control {{ $errors->has('Descripcion')?'is-invalid':'' }}" type="text" name="Descripcion" id="Descripcion"
        value="{{ old('Descripcion') }}">
    {!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
    <label for="Precio" class="form-label">{{'Precio'}}</label>
    <input class="form-control {{ $errors->has('Precio')?'is-invalid':'' }}" type="text" name="Precio" id="Precio" value="{{ old('Precio') }}">
    {!! $errors->first('Precio','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
    <label for="Autor" class="form-label">{{'Autor'}}</label>
    <input class="form-control {{ $errors->has('Autor')?'is-invalid':'' }}" type="text" name="Autor" id="Autor" value="{{ old('Autor') }}">
    {!! $errors->first('Autor','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Portada" class="form-label">{{'Portada'}}</label>
    @if (isset($producto->portada))
    <br />
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->portada}}" alt="" width="200">
    <br />
    @endif

    <input class="form-control {{ $errors->has('Portada')?'is-invalid':'' }}" type="file" name="Portada" id="Portada"
        value="">
</div>

<input type="submit" class="btn btn-outline-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
<a class="btn btn-outline-primary" href="{{ url('productos') }}">Regresar</a>
