@extends('layouts.app')

@section('content')
<div class="container">
  <h3>
  <a href="{{ route('mozo.create',$mesa) }}" class="btn btn-primary pull-right">Crear Orden</a>
        </h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      Detalle de la Mesa {{$mesa}}
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        
          <tr>
            <td>Numero de Orden </td>
            
          </tr>
          <tr>
            <td>Platos</td>
            <td></td>
          </tr>
        
        </table>        
    </div>
  </div>
  
</div>
  
</div>
@endsection
