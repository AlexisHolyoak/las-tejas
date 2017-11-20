@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h1 align="center" style="margin: 15px 15px;">Hola {{$user-> Nombre}}</h1>
    <div class="row center-row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>Numero de Mesa</th>
                <th>Numero de Sillas</th>
                <th>Estado de Atencion</th>                
                <th>Empleado Asignado</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tables as $table)
                <tr>
                  <td  class="align-middle">{{$table-> NUMBER}}</td>
                  <td  class="align-middle">{{$table-> CHAIRS}}</td>
                  <td  class="align-middle">{{$table-> STATUS}}</td>                  
                  <td  class="align-middle">{{$table-> USER}} {{$table->FIRST}} {{$table->SECOND}}</td>
                  <td  class="align-middle"><a href="{{route('mozo.show',$table-> CODIGO)}}" class="btn btn-primary pull-right">Ver</a></td>                                              
              @endforeach
            </tbody>
        </table>
      </div>
  </div>
  {{$tables->render()}}
</div>
@endsection
