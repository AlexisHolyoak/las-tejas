<div class="modal fade" id="active-{{$r->idRole}}" tabindex="-1" role="dialog">      
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header " style="background-color: #579781;color: #FFFFFF" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Activar Role</h4>
      </div>
      <form action="{{action('RoleController@destroy',$r->idRole)}}" method="POST">
      <div class="modal-body">
        ¿Estas seguro de activar el Rol?
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Activar</button>
      </div>
      </form>
    </div>
  </div> 
</div>