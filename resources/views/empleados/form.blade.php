



<div class="form-group">
<label for="NombreEmpleado" class="control-label" >{{'Nombre'}}</label>
<input type="text" class="form-control {{ $errors->has('NombreEmpleado')?'is-invalid':'' }}" name="NombreEmpleado" id="NombreEmpleado" 
value="{{ isset($empleado->NombreEmpleado)?$empleado->NombreEmpleado:old('NombreEmpleado') }}">
{!! $errors->first('NombreEmpleado','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="ApellidoEmpleado" class="form-label" >{{'Apellido'}}</label>
<input type="text" class="form-control {{ $errors->has('ApellidoEmpleado')?'is-invalid':'' }}" name="ApellidoEmpleado" id="ApellidoEmpleado" 
value="{{ isset($empleado->ApellidoEmpleado)?$empleado->ApellidoEmpleado:old('ApellidoEmpleado') }}">
{!! $errors->first('ApellidoEmpleado','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Edad" class="form-label" >{{'Edad'}}</label>
<input type="text" class="form-control {{ $errors->has('Edad')?'is-invalid':'' }}" name="Edad" id="Edad" 
value="{{ isset($empleado->Edad)?$empleado->Edad:old('Edad') }}">
{!! $errors->first('Edad','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Correo" class="form-label" >{{'Correo'}}</label>
<input type="email" class="form-control {{ $errors->has('Correo')?'is-invalid':'' }}" name="Correo" id="Correo" 
value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}">
{!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Foto" class="form-label" >{{'Foto'}}</label>
@if (isset($empleado->Foto))
<br/>
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
<br/>
@endif

<input class="form-control {{ $errors->has('Foto')?'is-invalid':'' }}" type="file" name="Foto" id="Foto" value="">
</div>

<input type="submit" class="btn btn-success btn-outline-success"
value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
<a class="btn btn-primary btn-outline-primary" href="{{ url('empleados') }}" >Regresar</a>
