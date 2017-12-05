<div class="modal fade" id="create-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="{{action('BranchController@store')}}">
      {{ csrf_field() }}
      <div class="modal-header" style="background-color: #1c84c6;color: #FFFFFF" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Agregar Nueva Sucursal</h4>
      </div>
      <div class="modal-body">
        <label>Nombre de la Sucursal</label>
        <input type="text" class="form-control" name="nameBranch" required placeholder="Nombre de la Sucursal..." required>
        <label>Tipo de Negocio</label>
        <input type="text" class="form-control" name="kindOfBussinessBranch" required placeholder="Tipo de Negocio..." required>
        <label>RUC de la Sucursal</label>
        <input type="text" class="form-control" name="rucBranch" required placeholder="RUC de la Sucursal..." required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
        <label>Dirección de la Sucursal</label>
        <input type="text" class="form-control" name="addressBranch" required placeholder="Dirección de la Sucursal..." required>
        <label>Tipo de Cambio</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" class="form-control" name="kindOfExchangeBranch" placeholder="Tipo de Cambio..." required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-saver"></i> Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>
