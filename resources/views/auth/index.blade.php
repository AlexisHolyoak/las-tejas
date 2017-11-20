@extends ('layouts.admin')
@section ('content')

	<div class="col-md-12">
		<div class="panel panel-primary animated fadeInUp">
			<div class="panel-heading" align="center">
				<h2>Listado de Usuarios del Sistema</h2>
			</div>
			<div class="panel-body">
				<div class="col-md-2">
					<a class="btn btn-success" href="{{ url('auth/create') }}"><span class="fa fa-user-plus"></span> Nuevo Usuario</a>
				</div>
				<form method="GET" autocomplete="true" action="{{action('UserController@index')}}">
					<div class="input-group col-md-10">
				      <input id="search" name="search" type="text" class="form-control" placeholder="Ingres el Nombre o Apellido..." value="{{$search}}">
				      <span class="input-group-btn">
				        <button class="btn btn-primary" type="submit"><span class="fa fa-search"></span> Buscar!</button>
				      </span>
				    </div>
				</form><br>
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
								<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#show-{{$u->idUser}}"><span class="fa fa-eye"></span></button>
								<a href="{{action('UserController@edit',$u->idUser)}}" class="btn btn-primary btn-xs"><span class="fa fa-pencil"></span></a>
								@if($u->statusUser=='Activo')
								<button class="btn btn-danger btn-xs" data-target="#inactive-{{$u->idUser}}" data-toggle="modal"><span class="fa fa-close"></span></button>
								@else
								<button class="btn btn-success btn-xs" data-target="#active-{{$u->idUser}}" data-toggle="modal"><span class="fa fa-check"></span></button>
								@endif
								<button class="btn btn-default btn-xs" data-target="#rb-{{$u->idUser}}" data-toggle="modal">Roles</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				  </table>
				</div>
				<div class="col-md-12" align="center">
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
