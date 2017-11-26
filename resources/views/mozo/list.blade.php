@extends('layouts.admin')
@section('content')
<div class="container col-sm-12 " >
        <h3>
          Bienvenido a la seccion de administración de mesas {{$user}}
          
          
        </h3>
      </h2>
      <div class="table-responsive ">
        <table class="table table-hover table-responsive"  >
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
                  <td  class="align-left"><a href="{{route('request.crear',$table-> CODIGO)}}" class="btn btn-primary pull-right">Atender</a></td>
                  
              <!--@include('table.destroy')-->
              @endforeach
            </tbody>
        </table>        
      </div>
      {{$tables->render()}}
</div>
@foreach ($tables as $table)
  @include('table.destroy')
@endforeach
@endsection
