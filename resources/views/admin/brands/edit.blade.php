{!! Form::model($brand, ['route'=>['admin.brands.update', $brand],'method' => 'put', 'files'=>true]) !!}
@include('admin.brands.partials.form')
<button type="submit" class="btn btn-success"><i class="fas fa-save"> Actualizar</i></button>
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancelar</button>
{!! Form::close() !!}