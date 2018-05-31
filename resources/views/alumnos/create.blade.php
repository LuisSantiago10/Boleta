@extends('layouts.layout')
	@section('content')
    <div class="row">
      <div class="col-md-12">
          <h2>Creacion de alumnos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        {!!Form::open(array('url'=>'alumno','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombres</label>
            	<input type="text" name="vchNombres" class="form-control" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Apellido</label>
            	<input type="text" name="vchApellidos" class="form-control" placeholder="Materia...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Fecha de Nacimiento</label>
            	<input type="date" name="dtFechaNac" class="form-control" placeholder="Fecha de nacimiento...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
			   {!!Form::close()!!}
      </div>
    </div>
  @endsection
