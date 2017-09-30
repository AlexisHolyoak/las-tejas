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

@endsection
