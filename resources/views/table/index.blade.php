@extends('layouts.app')

@section('content')
<div class="container">
        <h3>
          Bienvenido a la seccion de administracion de mesas
          <a href="{{ route('table.create') }}" class="btn btn-primary pull-right">Crear Mesa</a>
        </h3>
      </h2>
      <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>Numero de Mesa</th>
                <th>Numero de Sillas</th>
                <th>Estado de Atencion</th>
                <th>Sucursal</th>
                <th>Empleado Asignado</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tables as $table)
                <tr>
                  <td  class="align-middle">{{$table-> NUMBER}}</td>
                  <td  class="align-middle">{{$table-> CHAIRS}}</td>
                  <td  class="align-middle">{{$table-> STATUS}}</td>
                  <td  class="align-middle">{{$table-> SUCURSAL}}</td>
                  <td  class="align-middle">{{$table-> USER}} {{$table->FIRST}} {{$table->SECOND}}</td>
                  <td  class="align-middle"><a href="{{route('table.show',$table-> CODIGO)}}" class="btn btn-primary pull-right">Ver</a></td>
                  <td  class="align-middle"><a href="{{route('table.edit',$table-> CODIGO)}}" class="btn btn-warning pull-right">Actualizar</a></td>
                  <td class="align-middle">
                  <form class="" action="{{route('table.destroy',$table->CODIGO)}}" method="post" >
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" name="button" class="btn btn-danger pull-right" id="deletegroup">Eliminar</button>
                  </form>
                </tr>
              <!--@include('table.destroy')-->
              @endforeach
            </tbody>
        </table>
        <script>
        $("#deletegroup").on("submit", function(){
          console.log('click');
          return confirm("¿Estas seguro que desa eliminar la mesa?");
        });
        </script>
      </div>
      {{$tables->render()}}
</div>
@endsection
