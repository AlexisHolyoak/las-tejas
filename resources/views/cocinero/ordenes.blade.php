@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
		  <li><a href="{{url('cocinero')}}">Cocinero</a></li>
		  <li class="active">Ordenes</li>
		</ol>
		<h1 align="center" style="margin: 15px 15px;">Ordenes de Pedidos</h1>
		<div class="row center-row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table class="table table-dark">
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
				      <td><span class="label label-success">Entregado <i class="fa fa-check"></span></td>
				      <td><img src="{{asset('images/picante-de-cuy.jpg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Arroz con Pollo</td>
				      <td>2</td>
				      <td>16</td>
				      <td>Doctor Wong</td>
				      <td><span class="label label-warning">En espera <i class="fa fa-clock-o"></i></span></td>
				      <td><img src="{{asset('images/Arroz-con-pollo.jpeg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Picante de Cuy</td>
				      <td>2</td>
				      <td>23</td>
				      <td>Alexis Peralta</td>
				      <td><span class="label label-success">Entregado <i class="fa fa-check"></span></td>
				      <td><img src="{{asset('images/picante-de-cuy.jpg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">4</th>
				      <td>Arroz con Pollo</td>
				      <td>2</td>
				      <td>16</td>
				      <td>Doctor Wong</td>
				      <td><span class="label label-danger">Cancelado <i class="fa fa-close"></i></span></td>
				      <td><img src="{{asset('images/Arroz-con-pollo.jpeg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">5</th>
				      <td>Picante de Cuy</td>
				      <td>2</td>
				      <td>23</td>
				      <td>Alexis Peralta</td>
				      <td><span class="label label-success">Entregado <i class="fa fa-check"></i></span></td>
				      <td><img src="{{asset('images/picante-de-cuy.jpg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				    <tr>
				      <th scope="row">6</th>
				      <td>Arroz con Pollo</td>
				      <td>2</td>
				      <td>16</td>
				      <td>Doctor Wong</td>
				      <td><span class="label label-danger">Cancelado <i class="fa fa-close"></i></span></td>
				      <td><img src="{{asset('images/Arroz-con-pollo.jpeg')}}" class="img-thumbnail" width="60" height="60"></td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>

@endsection
