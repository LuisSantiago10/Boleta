<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$alumnos->iCodigoAlumno}}">
	{{Form::Open(array('action'=>array('AlumnosController@destroy',$alumnos->iCodigoAlumno),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <h4 class="modal-title">Eliminar Alumno: <strong>{{$alumnos->vchNombres}}</strong></h4>
			</div>
			<div class="modal-body">
				<p>Confirme si desea Eliminar el Alumno</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>
