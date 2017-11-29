@extends('layouts.admin')
@section('content')
<div class="container col-md-12 " >
  <div class="panel panel-primary animated fadeInUp">
    <div class="panel-heading"align="center">
      <h2>
      Bienvenido a la seccion de administración de mesas {{$user}}
      </h2>
    </div>
  
  <div class="table-responsive ">
    <table class="table table-hover table-responsive"  >
      <thead>
        <tr>
          <th class="text-center">Numero de Mesa</th>
          <th class="text-center">Numero de Sillas</th>
          <th class="text-center">Estado</th>                
          <th class="text-center">Empleado Asignado</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tables as $table)
        <tr>
          <td  align="middle">{{$table-> NUMBER}}</td>
          <td  align="middle">{{$table-> CHAIRS}}</td>
          <td  align="middle">{{$table-> STATUS}}</td>                  
          <td  align="middle">{{$table-> USER}} {{$table->FIRST}} {{$table->SECOND}}</td>
          <td  align="middle"><a id="crear" href="{{route('request.crear',$table-> CODIGO)}}" class="btn btn-warning pull-right">Ver</a></td>

          <!--@include('table.destroy')-->
          @endforeach
        </tbody>
      </table>        
    </div>
    {{$tables->render()}}
  </div>
</div>
<script type="text/javascript">
  $("#crear").on("click",function(e){
    $('#crear').attr("disabled", true);
    
  });
</script>  
@foreach ($tables as $table)
@include('table.destroy')
@endforeach
@endsection
