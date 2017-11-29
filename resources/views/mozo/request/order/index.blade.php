@extends('layouts.admin')
@section('content')
<div class="container col-md-12" >
  <div class="panel panel-primary animated fadeInUp">
    <div class="panel-heading" align="center">
      <h2>
        Vista de Ordenes
      </h2>
    </div>    
    <div class="table-responsive ">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="text-center">Id Orden</th>
            <th class="text-center">Estado de orden</th>
          </tr>
        </thead>
        <tbody id="bus">
          @foreach($orders as $ord)
          <tr class="text-center">
            <td  class="id align-middle">{{$ord-> idOrder}}</td>
            <td  >
              @if($ord-> statusOrder=='0') Pendiente
              @else Entregado
              @endif
            </td>
            <td><input data-ver="s" id="b" type="button" class="btn btn-primary " value="Ver platos"> </td>
          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
    <div class="table-responsive">
      <table  id="a" class="table table-hover">
        <thead>
          <tr>
            <th>Nombre de plato</th>
            <th>Precio</th>
            <th>Cantidad</th>
          </tr>
        </thead>
        <tbody id="filas">

        </tbody>
      </table>
      <div align="center"></div>

    </div>
    <br>&nbsp
    <a id="crear"  style="margin-right: 20px;" href="{{route('request.order.create',$idRequest)}}" class="btn btn-warning pull-right">Crear orden</a>
    <a id="back" style="margin-left: 20px;"href="{{route('request.crear',$idmesa->ID)}}" class="btn btn-danger pull-left">Regresar</a><br>&nbsp
  </div>
</div>
</div>
<script type="text/javascript">

$(document).ready(function(){  
  $('#a').hide();
  
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $("#bus").on('click',':button',function(){
    var id=$(this).closest('tr').find('td.id').text();
    var url='{{ URL::to("mozo/request/order/showdish") }}';
    var data={ id: id };
    $.ajax({
      type : 'POST',
      url : url,
      data : data,
      dataType : 'json',
      success:function(data){
        console.log('Well exitosa');
        console.log(data);
        llenarTabla(data);
      },
      error: function (data) {
        console.log(data);
      }
    });
  });
  function llenarTabla(data){
    $('#a').show();  

    $("#filas").empty();
    $(data).each(function () {
      var col=document.createElement("tr");
      var td1=document.createElement("td");
      $(td1).text(this.NOMBRE);
      var td2=document.createElement("td");
      $(td2).text('S/ '+this.PRECIO);
      var td3=document.createElement("td");
      $(td3).text(this.CANTIDAD);
      col.append(td1);
      col.append(td2);
      col.append(td3);
      $("#filas").append(col);
    });
  }
  
  $("#crear").click(function() {    
      
      $('#crear').attr("disabled", true);
      $('#back').attr("disabled", true);
  });
  $("#back").click(function() {    
      
      $('#crear').attr("disabled", true);
      $('#back').attr("disabled", true);
  });
});
</script>
@endsection