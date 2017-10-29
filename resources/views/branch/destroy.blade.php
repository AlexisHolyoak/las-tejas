<div class="modal fade" id="destroy-{{$b->idBranch}}" tabindex="-1" role="dialog">      
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header " style="background-color: #A54E4E;color: #FFFFFF" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Desactivar Rol</h4>
      </div>
      <form action="{{action('BranchController@destroy',$b->idBranch)}}" method="POST">
      <div class="modal-body">
        ¿Estas seguro de eliminar la Sucursal?
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-danger">Si, Eliminar</button>
      </div>
      </form>
    </div>
  </div> 
</div>