@extends('layouts.layout')
	@section('content')
    <div class="row">
      <div class="col-md-12">
          <h2>Creacion de alumnos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        {!!Form::model($vchCodigoMateria,['method'=>'PATCH','route'=>['materia.update',$vchCodigoMateria->vchCodigoMateria]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombres</label>
            	<input type="text" name="vchMateria" value="{{$vchCodigoMateria->vchMateria}}" class="form-control" placeholder="Nombre...">
            </div>
						<div class="form-group">
            <select name="statusMateria">
                  @if($vchCodigoMateria->statusMateria == 1)
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
