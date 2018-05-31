@extends('layouts.layout')
	@section('content')
		<div class="row">
			<div class="col-md-5">
			  <h2>Lista de alumno</h2>
			</div>
			<div class="col-md-7">
			  @include('alumnos.search')
			</div>
		</div>
		<table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Nombre</th>
          <th>Descripción</th>
					<th>Fecha de nacimiento</th>
          <th>Estatus</th>
          <th> <a class="btn btn-outline-success" href="{{ url('/alumno/create') }}">Crear nuevo</a></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

            @foreach($alumno as $alumnos)
              <tr>

                <th>{{ $alumnos->vchNombres }}</th>
                <th>{{ $alumnos->vchApellidos}}</th>
								<th>{{ date('d-m-Y', strtotime($alumnos->dtFechaNac)) }}
								</th>
                <th>
                  @if( $alumnos->statusAlumno == 1 )
                  <span class="btn btn-success">Activo</span>
                  @else
                  <span class="btn btn-warning">Baja</span>
                  @endif
                </th>
                <th><a href="{{URL::action('AlumnosController@edit',$alumnos->iCodigoAlumno)}}" class="btn btn-info">Editar</a></th>
								<th>
										<a href="" data-target="#modal-delete-{{$alumnos->iCodigoAlumno}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
								</th>
              </tr>
								@include('alumnos.modal')
            @endforeach
      </tbody>
    </table>
		<!-- Button trigger modal -->
	@endsection
