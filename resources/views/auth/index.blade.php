@extends ('layouts.app')
@section ('content')
<div class="row">
	<div class="container col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading" align="center">
				<h2>Listado de Usuarios del Sistema <a class="btn btn-success" href="{{ url('auth/create') }}">Nuevo Usuario</a></h2>
				<form method="GET" autocomplete="true" action="{{action('UserController@index')}}">
					<div class="input-group col-md-8">
				      <input id="search" name="search" type="text" class="form-control" placeholder="Ingres el Nombre o Apellido..." value="{{$search}}">
				      <span class="input-group-btn">
				        <button class="btn btn-primary" type="submit">Buscar Usuario!</button>
				      </span>
				    </div>
				</form>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
				  <table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>DNI</th>
							<th>Género</th>
							<th>Celular</th>
							<th>F.N</th>
							<th>Estado</th>
							<th>Dirección</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $u)
						<tr>
							<td>{{$u->nameUser}}</td>
							<td>{{$u->firstSurNameUser.' '.$u->secondSurNameUser}}</td>
							<td>{{$u->dniUser}}</td>
							<td>{{$u->genderUser}}</td>
							<td>{{$u->cellPhoneUser}}</td>
							<td>{{$u->birthdayUser}}</td>
							<td>
								@if($u->statusUser=='Activo')
								<span class="label label-success">Activo</span>
								@else
								<span class="label label-danger">Inactivo</span>
								@endif
							</td>
							<td>{{$u->addressUser}}</td>
							<td>
								<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#show-{{$u->idUser}}">Show</button>
								<a href="{{action('UserController@edit',$u->idUser)}}" class="btn btn-primary btn-xs">Edit</a>
								@if($u->statusUser=='Activo')
								<button class="btn btn-danger btn-xs" data-target="#inactive-{{$u->idUser}}" data-toggle="modal">Desactivar</button>
								@else
								<button class="btn btn-success btn-xs" data-target="#active-{{$u->idUser}}" data-toggle="modal">Activar</button>
								@endif
								<button class="btn btn-dark btn-xs" data-target="#rb-{{$u->idUser}}" data-toggle="modal">Roles</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				  </table>
				</div>
				{{ $users->links() }}
			</div>
		</div>
	</div>
</div>
@foreach($users as $u)
	@include('auth.show')
	@include('auth.inactive')
	@include('auth.active')
	
@endforeach
<?php if (sizeof($userrole)>0): ?>
	@foreach($userrole as $u)
		@include('auth.userrole')
	@endforeach
<?php endif ?>
@endsection
