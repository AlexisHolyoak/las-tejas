@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="panel panel-primary animated fadeInUp">
    <div class="panel-heading" align="center">
      Detalle de la Mesa {{$table->NUMBER}}
    </div>
    <div class="panel-body">
      <table class="table">
        <tr>
          <td>Numero de Mesa</td>
          <td>{{$table->NUMBER}}</td>
        </tr>
        <tr>
          <td>Numero de Sillas</td>
          <td>{{$table->CHAIRS}}</td>
        </tr>
        <tr>
          <td>Estado de la mesa</td>
          <td>{{$table->STATUS}}</td>
        </tr>
        <tr>
          <td>Sucursal</td>
          <td>{{$table->SUCURSAL}}</td>
        </tr>
        <tr>
          <td>Empleado designado</td>
          <td>{{$table->USER}} {{$table->FIRST}} {{$table->SECOND}}</td>
        </tr>
      </table>
    </div>
  </div>
</div>
@endsection
