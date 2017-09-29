<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ordenes de Pedidos</title>
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
		<h1 align="center" style="margin: 15px 15px;">Ordenes de Pedidos</h1>
		<div class="row center-row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table class="table table-hover table-inverse">
				  <thead>
				    <tr>
				      <th># Orden</th>
				      <th>Nombre</th>
				      <th>Cantidad</th>
				      <th># Meza</th>
				      <th>Mozo</th>
				      <th>Estado</th>
				      <th>Miniatura</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Picante de Cuy</td>
				      <td>2</td>
				      <td>23</td>
				      <td>Alexis Peralta</td>
				      <td><span class="badge badge-success">Entregado</span></td>
				      <td><img src="{{asset('images/picante-de-cuy.jpg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Arroz con Pollo</td>
				      <td>2</td>
				      <td>16</td>
				      <td>Doctor Wong</td>
				      <td><span class="badge badge-warning">En espera</span></td>
				      <td><img src="{{asset('images/Arroz-con-pollo.jpeg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Picante de Cuy</td>
				      <td>2</td>
				      <td>23</td>
				      <td>Alexis Peralta</td>
				      <td><span class="badge badge-success">Entregado</span></td>
				      <td><img src="{{asset('images/picante-de-cuy.jpg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">4</th>
				      <td>Arroz con Pollo</td>
				      <td>2</td>
				      <td>16</td>
				      <td>Doctor Wong</td>
				      <td><span class="badge badge-warning">En espera</span></td>
				      <td><img src="{{asset('images/Arroz-con-pollo.jpeg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">5</th>
				      <td>Picante de Cuy</td>
				      <td>2</td>
				      <td>23</td>
				      <td>Alexis Peralta</td>
				      <td><span class="badge badge-success">Entregado</span></td>
				      <td><img src="{{asset('images/picante-de-cuy.jpg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">6</th>
				      <td>Arroz con Pollo</td>
				      <td>2</td>
				      <td>16</td>
				      <td>Doctor Wong</td>
				      <td><span class="badge badge-warning">En espera</span></td>
				      <td><img src="{{asset('images/Arroz-con-pollo.jpeg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				  </tbody>
				</table>
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