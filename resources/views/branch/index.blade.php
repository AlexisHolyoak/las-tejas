@extends ('layouts.app')
@section ('content')
<div class="row">
	<div class="container col-md-8 col-md-offset-2" style="margin-bottom: 50px;">
		<div class="panel panel-default">
			<div class="panel-heading" align="center">
				<h2>Listado de Sucursales <button class="btn btn-primary" data-target="#create-modal" data-toggle="modal">Nueva Sucursal</button></h2>
			</div>
			@include('branch.create')
			<div class="panel-body" align="center">
			@foreach($branches as $b)
			<div class="col-md-4">
			<div class="panel panel-primary">
			  <div class="panel-heading" align="center">
			  	<h2 class="panel-title">{{$b->nameBranch}}</h2>
			  </div>
			  <div class="panel-body" align="center">
			    <label>Tipo de Negocio : </label><p>{{$b->kindOfBussinessBranch}}</p>
			    <label>RUC : </label><p>{{$b->rucBranch}}</p>
			    <label>Dirección : </label><p>{{$b->addressBranch}}</p>
			    <label>Tipo de Cambio : </label><p>{{$b->kindOfExchangeBranch}}</p>
			  </div>
			  <div class="panel-footer" align="center">
			  	<button class="btn btn-primary btn-xs" data-target="#edit-modal-{{$b->idBranch}}" data-toggle="modal">Edit</button>
				<button class="btn btn-danger btn-xs" data-target="#destroy-{{$b->idBranch}}" data-toggle="modal">Delete</button>
			  </div>
			</div>
			</div>
			@endforeach
			<div class="col-md-12">
			{{ $branches->links() }}
			</div>
			</div>
		</div>
	</div>
</div>
@foreach($branches as $b)
	@include('branch.active')
	@include('branch.destroy')
	@include('branch.edit')
@endforeach
@endsection