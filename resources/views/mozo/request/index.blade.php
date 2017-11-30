@extends('layouts.admin')
@section('content')
<div class="container col-md-12" >
  <div class="panel panel-primary animated fadeInUp">
    <div class="panel-heading" align="center">
      <h2>
        Solicitudes de la Mesa
      </h2>
      <form action="{{ URL::to('mozo/request/store') }}" method="POST" id="frm-insert">
        {{csrf_field()}}
        <div class="form-group" hidden>
          <div class="col-md-6">
            <input type="text" name="id" id="inp" class="form-control" value="{{ $idmesa }}">
          </div>
        </div>

      </div>
      <div class="table-responsive ">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="text-center">Id Pedido</th>
              <th class="text-center">Estado de pedido</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($requests as $req)
            <tr>
              <td  align="middle">{{$req-> ID}}</td>
              <td  align="middle">{{$req-> ESTADO}}</td>
              
              <td   align="middle"><a href="{{route('request.order.index',$req-> ID)}}" class="btn btn-primary">Ver Ordenes</a></td>
            </tr>
            @endforeach
          </tbody> <br>                                    
                                                
      </table>
      <div align="center">            
            <input id="crear" style="margin-right: 20px;" type="submit" value="Crear pedido" align="center" class="btn btn-warning pull-right" >
            <a id="back" style="margin-left: 20px;" href="{{route('mozo', $iduser->idUser )}}" class="btn btn-danger pull-left ">Regresar</a><br>&nbsp
          </div></form>  
    </div>
  </div>

</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  
  $("#back").on("click",function(e){
    $('#crear').attr("disabled", true);
    $('#back').attr("disabled", true);
    
  });
  
});
</script>
@endsection
