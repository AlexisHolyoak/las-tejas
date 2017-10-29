<div class="modal fade" id="show-{{$u->idUser}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #E2C186;color: #FFFFFF" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Datos del Usuario</h4>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-condensed">
            <tbody>
              <tr>
                <th>Nombres y Apellidos:</th>
                <td>{{$u->nameUser.' '.$u->firstSurNameUser.' '.$u->secondSurNameUser}}</td>
              </tr>
              <tr>
                <th>Género:</th>
                <td>{{$u->genderUser}}</td>
              </tr>
              <tr>
                <th>DNI:</th>
                <td>{{$u->dniUser}}</td>
              </tr>
              <tr>
                <th>RUC:</th>
                <td>{{$u->rucUser}}</td>
              </tr>
              <tr>
                <th>Dirección:</th>
                <td>{{$u->addressUser}}</td>
              </tr>
              <tr>
                <th>Teléfono:</th>
                <td>{{$u->phoneUser}}</td>
              </tr>
              <tr>
                <th>Celular:</th>
                <td>{{$u->cellPhoneUser}}</td>
              </tr>
              <tr>
                <th>Correo Electrónico:</th>
                <td>{{$u->email}}</td>
              </tr>
              <tr>
                <th>Fecha de Nacimiento:</th>
                <td>{{$u->birthdayUser}}</td>
              </tr>
              <tr>
                <th>Estado</th>
                <td>
                  @if($u->statusUser=='Activo')
                  <span class="label label-success">Activo</span>
                  @else
                  <span class="label label-danger">Inactivo</span>
                  @endif
                </td>
              </tr>
              <tr>
                <th>Nombre de Usuario:</th>
                <td>{{$u->nickNameUser}}</td>
              </tr>
              <tr>
                <th>Ubicación:</th>
                <td>{{$u->department.', '.$u->province.', '.$u->district}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>