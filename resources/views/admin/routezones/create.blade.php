{!! Form::open(['route'=>'admin.routezones.store']) !!}
@include('admin.routezones.partials.form')

<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Agregar</button>
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancelar</button>
{!! Form::close() !!}