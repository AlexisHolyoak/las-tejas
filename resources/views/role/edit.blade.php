<div class="modal fade" id="edit-modal-{{$r->idRole}}" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="{{action('RoleController@update',$r->idRole)}}">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
      <div class="modal-header" style="background-color: #444444;color: #FFFFFF" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Rol</h4>
      </div>
      <div class="modal-body">
        <label>Nombre del Rol</label>
        <input type="text" class="form-control" name="nameRole" required placeholder="Nombre del rol..." required value="{{$r->nameRole}}">
        <label>Salario del Rol</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="number" step="0.01" class="form-control" name="salaryRole" placeholder="0.00" required value="{{$r->salaryRole}}">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>