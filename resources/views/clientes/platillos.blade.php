<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Platillos del día</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap 3.3.7 CSS -->
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<!-- Style Cocineo CSS -->
		<link rel="stylesheet" href="{{asset('css/style-cliente.css')}}">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	</head>

	<body>
		<nav class="navbar background-nav">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">
		        <img src="{{asset('images/cliente.jpg')}}" width="30" height="30" >
		      </a> <a class="navbar-brand link" href="#">Clientes</a>
		    </div>
		  </div>
		</nav>
		<h1 align="center" style="margin: 15px 15px;">Platillos del día</h1>
		<div class="row center-row">
			<div class="form-group col-md-4">
				<label>Selecciona Categoría : </label>
				<select class="form-control">
					<option value="0">Comidas</option>
					<option value="1">Bebida</option>
				</select>
			</div>

			<div class="col-xs-20" align="right">
                	<h2>Métodos de pago <img class="img-thumbnail circle" src="{{asset('images/tarjetas.jpg')}}" height="150px" width="150px"></h2>
			</div>	

		</div>
		<div class="row center-row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/chaufa.jpg')}}" height="150px" width="150px">
			        <h4><strong>Arroz Chaufa</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/25.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida">Agregar a Pedido<span class="fa fa-pencil"></span></a>
			        </div>
			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/polloalabrasa.jpg')}}" height="150px" width="150px">
			        <h4><strong>Pollo a la Brasa</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/65.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida">Agregar a Pedido<span class="fa fa-pencil"></span></a>
			        </div>

			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/chicha.jpg')}}" height="150px" width="150px">
			        <h4><strong>Chicha Morada</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Bebida<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/15.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida">Agregar a Pedido<span class="fa fa-pencil"></span></a>
			        </div>

			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/ceviche.jpg')}}" height="150px" width="150px">
			        <h4><strong>Ceviche</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Marino<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/25.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida">Agregar a Pedido<span class="fa fa-pencil"></span></a>
			        </div>

			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/juanes.jpg')}}" height="150px" width="150px">
			        <h4><strong>Juanes</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Selvaticos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/10.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida">Agregar a Pedido<span class="fa fa-pencil"></span></a>
			        </div>

			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/inkakola.jpg')}}" height="150px" width="150px">
			        <h4><strong>Inka Kola</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Bebida<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/45.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida">Agregar a Pedido<span class="fa fa-pencil"></span></a>
			        </div>

			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/broster.jpg')}}" height="150px" width="150px">
			        <h4><strong>Broster</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/25.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida">Agregar a Pedido<span class="fa fa-pencil"></span></a>
			        </div>

			    </div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/salchipapa.jpg')}}" height="150px" width="150px">
			        <h4><strong>Salchipapa</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>Platos Típicos<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>S/25.00<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle" data-toggle="modal" data-target="#mdl-edit-comida">Agregar a Pedido<span class="fa fa-pencil"></span></a>
			        </div>
			    </div>
			</div>
				
		</div>
		</div>
		<footer class="footer background-nav">
	      <div class="container">
	      	<a href="#" class="navbar-brand link">Sistema Nasa</a>
	      	<a href="#" class="navbar-brand link">Contactanos a: 929287880</a>
	      	<a href="#" class="navbar-brand link">Email: restaurant@gmail.com</a>>		
	      </div>
	    </footer>
		<script src="{{asset('js/app.js')}}"></script>
	</body>
</html>