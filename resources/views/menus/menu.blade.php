@extends('layouts.layout')
	@section('content')
		<div class="row">
		  <div class="col-md-12">
        <table class="table table-hover text-center">
          <tbody>
            <tr><td><a href="{{ url('alumno')}}" class="btn btn-outline-info">Alumnos</a></td></tr>
            <tr><td><a href="{{ url('materia')}}" class="btn btn-outline-info">Materia</a></td></tr>
            <tr><td><a href="{{ url('califica')}}" class="btn btn-outline-info">Calificaciones</a></td></tr>
          </tbody>
        </table>
      </div>
</table>
		</div>
	@endsection
