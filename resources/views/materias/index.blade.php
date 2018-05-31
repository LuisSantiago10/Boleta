@extends('layouts.layout')
	@section('content')
		<div class="row">
			<div class="col-md-5">
			  <h2>Lista de Materias</h2>
			</div>
			<div class="col-md-7">
			  @include('materias.search')
			</div>
		</div>
		<table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Nombre</th>
          <th>Estatus</th>
          <th> <a class="btn btn-outline-success" href="{{ url('/materia/create') }}">Crear nuevo</a></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

            @foreach($materia as $materias)
              <tr>

                <th>{{ $materias->vchMateria }}</th>
                <th>
                  @if( $materias->statusMateria == 1 )
                  <span class="btn btn-success">Activo</span>
                  @else
                  <span class="btn btn-warning">Baja</span>
                  @endif
                </th>
                <th><a href="{{URL::action('MateriaController@edit',$materias->vchCodigoMateria)}}" class="btn btn-info">Editar</a></th>
								<th>
										<a href="" data-target="#modal-delete-{{$materias->vchCodigoMateria}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
								</th>
              </tr>
								@include('materias.modal')
            @endforeach
      </tbody>
    </table>
		<!-- Button trigger modal -->
	@endsection
