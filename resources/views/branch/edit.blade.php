<div class="modal fade" id="edit-modal-{{$b->idBranch}}" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="{{action('BranchController@update',$b->idBranch)}}">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
      <div class="modal-header" style="background-color: #f8ac59;color: #FFFFFF" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Sucursal</h4>
      </div>
      <div class="modal-body">
        <label>Nombre de la Sucursal</label>
        <input type="text" class="form-control" name="nameBranch" required placeholder="Nombre de la Sucursal..." required value="{{$b->nameBranch}}">
        <label>Tipo de Negocio</label>
        <input type="text" class="form-control" name="kindOfBussinessBranch" required placeholder="Tipo de Negocio..." required value="{{$b->kindOfBussinessBranch}}">
        <label>RUC de la Sucursal</label>
        <input type="text" class="form-control" name="rucBranch" required placeholder="RUC de la Sucursal..." required value="{{$b->rucBranch}}">
        <label>Dirección de la Sucursal</label>
        <input type="text" class="form-control" name="addressBranch" required placeholder="Dirección de la Sucursal..." required value="{{$b->addressBranch}}">
        <label>Tipo de Cambio</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" class="form-control" name="kindOfExchangeBranch" placeholder="Tipo de Cambio..." required value="{{$b->kindOfExchangeBranch}}">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i> Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>