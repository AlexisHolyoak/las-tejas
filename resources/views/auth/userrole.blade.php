<div class="modal fade" id="rb-{{$u['idUser']}}" tabindex="-1" role="dialog">      
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header " style="background-color: #2F2F2F;color: #FFFFFF" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Roles y Sucursales</h4>
      </div>
      <form action="{{action('UserController@userrole',$u['idUser'])}}" method="POST">
      <div class="modal-body">
        <label for="branch">Seleccione Sucursal</label>
        {{ csrf_field() }}
        <select id="branch" name="branch" class="form-control">
          <?php foreach ($branches as $b): ?>
            <?php if ($u['branch'] == ($b->idBranch)): ?>
              <option value="<?=$b->idBranch?>" selected><?=$b->nameBranch?></option>
            <?php else: ?>
              <option value="<?=$b->idBranch?>"><?=$b->nameBranch?></option>
            <?php endif ?>            
          <?php endforeach ?>          
        </select><br>
        <label for="branch">Asigne los roles del Usuario</label><br>
        <?php foreach ($u['roles'] as $r): ?>
          <?php if ($r->statusUserRole==1): ?>
            <div class="checkbox-inline">
              <label><input name="role[]" type="checkbox" value="<?=$r->idRole?>" checked><?=$r->nameRole?></label>
            </div>
          <?php else: ?>
            <div class="checkbox-inline">
              <label><input name="role[]" type="checkbox" value="<?=$r->idRole?>"><?=$r->nameRole?></label>
            </div>
          <?php endif ?>
        <?php endforeach ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-dark">Guardar</button>
      </div>
      </form>
    </div>
  </div> 
</div>
