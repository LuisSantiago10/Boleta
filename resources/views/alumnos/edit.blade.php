@extends('layouts.layout')
	@section('content')
    <div class="row">
      <div class="col-md-12">
          <h2>Creacion de alumnos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        {!!Form::model($iCodigoAlumno,['method'=>'PATCH','route'=>['alumno.update',$iCodigoAlumno->iCodigoAlumno]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombres</label>
            	<input type="text" name="vchNombres" value="{{$iCodigoAlumno->vchNombres}}" class="form-control" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Apellido</label>
            	<input type="text" name="vchApellidos" value="{{$iCodigoAlumno->vchApellidos}}" class="form-control" placeholder="Materia...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Fecha de Nacimiento</label>
            	<input type="date" name="dtFechaNac" value="date('d-m-Y',$alumnos->dtFechaNac)" class="form-control" placeholder="Fecha de nacimiento..." required>
            </div>
						<div class="form-group">
            <select name="statusAlumno">
                  @if($iCodigoAlumno->statusAlumno == 1)
                    <option value="1" selected="selected" >Activo</option>
                    <option value="0">Baja</option>
                    @else
                    <option value="1" >Activo</option>
                    <option value="0" selected="selected" >Baja</option>
                  @endif
                  </select>
						</div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
			   {!!Form::close()!!}
      </div>
    </div>
  @endsection
