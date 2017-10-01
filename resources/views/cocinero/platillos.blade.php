@extends('layouts.app')

@section('content')
<div class="container">
  <ol class="breadcrumb">
   	<li class="active">Cocinero</li>
   	<li><a href="{{url('cocinero/ordenes')}}">Ordenes</a></li>
  </ol>
  <h1 align="center" style="margin: 15px 15px;">Platillos del día</h1>
    <div class="row center-row">
   			<div class="form-group col-md-8">
   			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl-add-comida">Agregar Comida <img src="{{asset('images/add-comida.svg')}}" height="30" width="30"></button>
   			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl-add-bebida">Agregar Bebida <img src="{{asset('images/add-bebida.svg')}}" height="30" width="30"></button></div>
   			<div class="form-group col-md-4">
   				<label>Selecciona Categoría : </label>
   				<select class="form-control">
   					<option value="0">Comidad</option>
   					<option value="1">Bebida</option>
   				</select>
   			</div>
   		 </div>
  </div>
		<div class="row center-row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/Arroz-con-pollo.jpeg')}}" height="150px" width="150px">
			        <h4><strong>Arroz con Pollo</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/15.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span>Editar</span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span>Eliminar</span></a>
			        </div>
			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/Arroz-con-pollo.jpeg')}}" height="150px" width="150px">
			        <h4><strong>Arroz con Pollo</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/15.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span>Editar</span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span>Eliminar</span></span></a>
			        </div>
			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/Arroz-con-pollo.jpeg')}}" height="150px" width="150px">
			        <h4><strong>Arroz con Pollo</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/15.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span>Editar</span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span>Eliminar</span></a>
			        </div>
			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/Arroz-con-pollo.jpeg')}}" height="150px" width="150px">
			        <h4><strong>Arroz con Pollo</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/15.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span>Editar</span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span>Eliminar</span></a>
			        </div>
			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/Arroz-con-pollo.jpeg')}}" height="150px" width="150px">
			        <h4><strong>Arroz con Pollo</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/15.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span>Editar</span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span>Eliminar</span></a>
			        </div>
			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/Arroz-con-pollo.jpeg')}}" height="150px" width="150px">
			        <h4><strong>Arroz con Pollo</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/15.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span>Editar</span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span>Eliminar</span></a>
			        </div>
			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/Arroz-con-pollo.jpeg')}}" height="150px" width="150px">
			        <h4><strong>Arroz con Pollo</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/15.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span>Editar</span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span>Eliminar</span></a>
			        </div>
			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/Arroz-con-pollo.jpeg')}}" height="150px" width="150px">
			        <h4><strong>Arroz con Pollo</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/15.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span>Editar</span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span>Eliminar</span></a>
			        </div>
			    </div>
			</div>
		</div>
		<div class="modal fade" id="mdl-add-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-add-comida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <strong><h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-add-comida">Agregar Platillo</h4></strong>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Comida...">

				<label for="precio">Precio</label>
				<input type="text" name="precio" class="form-control" placeholder="Precio de la Comida...">

				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Comida...">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary">Agregar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-edit-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-edit-comida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-edit-comida">Modificar Platillo</h4>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Comida..." value="Arroz con Pollo">
				<label for="precio">Precio</label>
				<input type="text" name="precio" class="form-control" placeholder="Precio de la Comida..." value="15.00">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Comida..." value="Plato típico de la region x...">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary">Modificar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-add-bebida" tabindex="-1" role="dialog" aria-labelledby="mdl-add-bebida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-add-bebida">Agregar Bebida</h4>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Bebida...">
				<label for="precio">Precio</label>
				<input type="text" name="precio" class="form-control" placeholder="Precio de la Bebida...">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Bebida...">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary">Agregar <img src="{{asset('images/add-bebida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-del-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-del-comida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-del-comida">Eliminar Platillo</h4>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<h4>¿Estás seguro de eliminar el Platillo?</h4>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-warning" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-danger">Eliminar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
@endsection
