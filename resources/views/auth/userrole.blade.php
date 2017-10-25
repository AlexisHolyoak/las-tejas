<div id="userrole-{{$u->idUser}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <form action="{{action('UserRoleController@store')}}" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Permisos y Sucursal de Usuario</h4>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="container col-md-10 col-md-offset-1">
              <label for="branch">Sucursal</label>
              <select name="branch" class="form-control">
                @foreach($branches as $b)
                <option value="{{$b->idBranch}}">{{$b->nameBranch}}</option>
                @endforeach
              </select><br>
              <label for="roles">Roles</label>
              <div class="checkbox">
              @foreach($roles as $r)
                <label><input name="roles[]" type="checkbox" value="{{$r->idRole}}">{{$r->nameRole}}</label>
              @endforeach
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </form>
  </div>
</div>
