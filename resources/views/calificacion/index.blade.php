@extends('layouts.layout')
	@section('content')
		<div class="row">
			<div class="col-md-5">
			  <h2>Lista de Calificaciones</h2>
			</div>
			<div class="col-md-7">
			  @include('calificacion.search')
			</div>
		</div>
		<table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Alumno-Codigo</th>
					<th>Alumno-Nombre</th>
					<th>Alumno-Apellido</th>
					<th>Alumno-Fecha Nacimiento</th>
          <th>Materia-Codigo</th>
					<th>Materia-Nombre</th>
					<th>Materia-Calificación</th>
          <th> <a class="btn btn-outline-success" href="{{ url('/califica/create') }}">Crear nuevo</a></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

            @foreach($califica as $cali)
              <tr>
								<th>{{ $cali->iCodigoAlumno }}</th>
                <th>{{ $cali->vchNombres }}</th>
								<th>{{ $cali->vchApellidos }}</th>
								<th>{{ date('d-m-Y', strtotime($cali->dtFechaNac)) }}</th>
								<th>{{ $cali->vchCodigoMateria }}</th>
								<th>{{ $cali->vchMateria}}</th>
								<th>{{ $cali->fCalificacion}}</th>
                <th><a href="{{URL::action('CalificaController@edit',$cali->iCali)}}" class="btn btn-info">Califica</a></th>
								<th>
										<a href="" data-target="#modal-delete-{{$cali->iCali}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
								</th>
              </tr>
								@include('calificacion.modal')
            @endforeach
      </tbody>
    </table>
		<!-- Button trigger modal -->
	@endsection
