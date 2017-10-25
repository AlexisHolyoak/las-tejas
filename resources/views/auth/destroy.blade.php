<div id="destroy-{{$u->idUser}}" aria-hidden="true" class="modal fade modal-slide-in-right" tabindex="-1" role="dialog">
  <form method="POST" action="{{action('UserController@destroy',$u->idUser)}}">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-danger">Confirmar</button>
  </form>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar Usuario</h4>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="container col-md-10 col-md-offset-1">
              <label>Estas seguro de eliminar al Usuario {{$u->nameUser}}, {{$u->firstSurNameUser}} {{$u->secondSurNameUser}}?</label>
              
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Confirmar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

</div>