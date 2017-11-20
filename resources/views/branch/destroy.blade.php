<div class="modal fade" id="destroy-{{$b->idBranch}}" tabindex="-1" role="dialog">      
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header " style="background-color: #ed5565;color: #FFFFFF" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Eliminar Sucursal</h4>
      </div>
      <form action="{{action('BranchController@destroy',$b->idBranch)}}" method="POST">
      <div class="modal-body">
        ¿Estas seguro de eliminar la Sucursal?
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Si, Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cerrar</button>
      </div>
      </form>
    </div>
  </div> 
</div>