<div class="form-group">
    <label for="NombreEmpleado" class="control-label">{{'Nombre'}}</label>
    <input class="form-control {{ $errors->has('NombreEmpleado')?'is-invalid':'' }}" type="text" name="NombreEmpleado" id="NombreEmpleado" value="{{ old('NombreEmpleado') }}">
    {!! $errors->first('NombreEmpleado','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="ApellidoEmpleado" class="form-label">{{'Apellido'}}</label>
    <input class="form-control {{ $errors->has('ApellidoEmpleado')?'is-invalid':'' }}" type="text" name="ApellidoEmpleado" id="ApellidoEmpleado" value="{{ old('ApellidoEmpleado') }}">
    {!! $errors->first('ApellidoEmpleado','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Edad" class="form-label">{{'Edad'}}</label>
    <input class="form-control {{ $errors->has('Edad')?'is-invalid':'' }}" type="text" name="Edad" id="Edad" value="{{ old('Edad') }}">
    {!! $errors->first('Edad','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Correo" class="form-label">{{'Correo'}}</label>
    <input class="form-control {{ $errors->has('Correo')?'is-invalid':'' }}" type="email" name="Correo" id="Correo" value="{{ old('Correo') }}">
    {!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Foto" class="form-label">{{'Foto'}}</label>
    @if (isset($empleado->Foto))
    <br />
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
    <br />
    @endif

    <input class="form-control {{ $errors->has('Foto')?'is-invalid':'' }}" type="file" name="Foto" id="Foto" value="">
</div>

<input type="submit" class="btn btn-success btn-outline-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
<a class="btn btn-primary btn-outline-primary" href="{{ url('empleados') }}">Regresar</a>
