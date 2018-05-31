@extends('layouts.layout')
	@section('content')
    <div class="row">
      <div class="col-md-12">
          <h2>Creacion de alumnos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        {!!Form::open(array('url'=>'califica','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
						<div class="form-group">
							<label for="exampleFormControlSelect1">Alumno</label>
								<select class="form-control" id="exampleFormControlSelect1" name="iCodigoAlumno">
									@foreach($alumno as $alumnos)
										<option value="{{ $alumnos->iCodigoAlumno }}">{{ $alumnos->vchNombres }}</option>
									@endforeach
								</select>
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Materia</label>
								<select class="form-control" id="exampleFormControlSelect1" name="vchCodigoMateria	">
									@foreach($materia as $materias)
										<option value="{{ $materias->vchCodigoMateria }}">{{ $materias->vchMateria }}</option>
									@endforeach
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
