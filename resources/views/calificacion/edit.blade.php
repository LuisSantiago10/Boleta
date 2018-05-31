@extends('layouts.layout')
	@section('content')
    <div class="row">
      <div class="col-md-12">
          <h2>Creacion de alumnos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
				{!!Form::model($iCali,['method'=>'PATCH','route'=>['califica.update',$iCali->iCali]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombres</label>
            	<input type="text" value="{{$iCali->vchNombres}}" class="form-control" placeholder="Nombre..." readonly>
							<input type="hidden" name="iCodigoAlumno" value="{{$iCali->iCodigoAlumno}}">
            </div>
						<div class="form-group">
							<label for="nombre">Materia</label>
							<input type="text" value="{{$iCali->vchMateria}}" class="form-control" placeholder="Nombre..." readonly>
							<input type="hidden" name="vchCodigoMateria" value="{{$iCali->vchCodigoMateria}}">
						</div>
						<div class="form-group">
							<label for="nombre">Calificación</label>
							<input type="text" name="fCalificacion" value="{{$iCali->fCalificacion}}" class="form-control" placeholder="Nombre..." >

						</div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
			   {!!Form::close()!!}
      </div>
    </div>
  @endsection
