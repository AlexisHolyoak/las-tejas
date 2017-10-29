<div class="modal fade" id="create-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="{{action('RoleController@store')}}">
      {{ csrf_field() }}
      <div class="modal-header" style="background-color: #1799AD;color: #FFFFFF" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Agregar Nuevo Rol</h4>
      </div>
      <div class="modal-body">
        <label>Nombre del Rol</label>
        <input type="text" class="form-control" name="nameRole" required placeholder="Nombre del rol..." required>
        <label>Salario del Rol</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="number" step="0.01" class="form-control" name="salaryRole" placeholder="0.00" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
      </div>
      </form>
    </div>
  </div>
</div>