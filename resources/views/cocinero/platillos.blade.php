<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Platillos del día</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	</head>

	<body>
		<nav class="navbar navbar-inverse bg-warning">
		  <a class="navbar-brand" href="#">
		    <img src="images/cocinero.svg" width="40" height="40" alt=""><strong> Cocinero</strong>
		  </a>
		</nav>
		<h1 align="center" style="margin: 15px 15px;">Platillos del día</h1>
		<div class="row center-row" align="center">
			<button type="button" class="btn btn-primary btn-cocinero" data-toggle="modal" data-target="#mdl-add-comida">Agregar Comida <img src="{{asset('images/add-comida.svg')}}" height="30" width="30"></button>
			<button type="button" class="btn btn-primary btn-cocinero" data-toggle="modal" data-target="#mdl-add-bebida">Agregar Bebida <img src="{{asset('images/add-bebida.svg')}}" height="30" width="30"></button>
				<div class="col-md-4"></div>
				<label>Selecciona Categoría : </label>
				<div class="col-md-2">
					<select class="form-control">
						<option value="0">Comidad</option>
						<option value="1">Bebida</option>
					</select>	
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
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span class="fa fa-pencil"></span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span class="fa fa-trash"></span></a>
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
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span class="fa fa-pencil"></span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span class="fa fa-trash"></span></a>
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
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span class="fa fa-pencil"></span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span class="fa fa-trash"></span></a>
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
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span class="fa fa-pencil"></span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span class="fa fa-trash"></span></a>
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
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span class="fa fa-pencil"></span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span class="fa fa-trash"></span></a>
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
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span class="fa fa-pencil"></span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span class="fa fa-trash"></span></a>
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
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span class="fa fa-pencil"></span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span class="fa fa-trash"></span></a>
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
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida"><span class="fa fa-pencil"></span></a>
			            <a href="#" class="btn btn-danger circle" data-toggle="modal" data-target="#mdl-del-comida"><span class="fa fa-trash"></span></a>
			        </div>
			    </div>
			</div>
		</div>
		<div class="modal fade" id="mdl-add-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-add-comida" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="mdl-add-comida">Agregar Platillo de Comida</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Comida...">
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="text" name="precio" class="form-control" placeholder="Precio de la Comida...">
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Comida...">
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="imagen">Imagen</label>
						<input type="file" name="imagen" class="form-control">
					</div>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary">Agregar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-edit-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-edit-comida" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="mdl-edit-comida">Modificar Platillo de Comida</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Comida..." value="Arroz con Pollo">
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="text" name="precio" class="form-control" placeholder="Precio de la Comida..." value="15.00">
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Comida..." value="Plato típico de la region x...">
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="imagen">Imagen</label>
						<input type="file" name="imagen" class="form-control">
					</div>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary">Modificar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-add-bebida" tabindex="-1" role="dialog" aria-labelledby="mdl-add-bebida" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="mdl-add-bebida">Agregar Bebida</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Bebida...">
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="text" name="precio" class="form-control" placeholder="Precio de la Bebida...">
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Bebida...">
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="imagen">Imagen</label>
						<input type="file" name="imagen" class="form-control">
					</div>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary">Agregar <img src="{{asset('images/add-bebida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-del-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-del-comida" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="mdl-del-comida">Eliminar Comida</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<h4>¿Estás seguro de eliminar la Comida?</h4>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-warning" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-danger">Eliminar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<footer class="footer bg-warning">
	      <div class="container">
	        <h3 align="center">Footer :v</h3>
	      </div>
	    </footer>
	    <script src="{{asset('js/tether.min.js')}}"></script>
		<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
		<script src="{{asset('js/popper.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
	</body>
</html>