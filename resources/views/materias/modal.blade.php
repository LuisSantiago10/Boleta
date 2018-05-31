<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$materias->vchCodigoMateria}}">
	{{Form::Open(array('action'=>array('MateriaController@destroy',$materias->vchCodigoMateria),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <h4 class="modal-title">Eliminar Materia: <strong>{{$materias->vchMateria}}</strong></h4>
			</div>
			<div class="modal-body">
				<p>Confirme si desea Eliminar la Materia</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>
