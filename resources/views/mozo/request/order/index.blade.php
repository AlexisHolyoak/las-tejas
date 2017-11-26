@extends('layouts.admin')

@section('content')
<div class="container col-sm-12" >
  <a href="{{route('request.order.create',$idRequest)}}" class="btn btn-success">Crear orden</a>
  <a href="{{route('request.crear',$idmesa->ID)}}" class="btn btn-success">Regresar</a>
  <div class="row">
    

    <div class="col-lg-6">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Id Orden</th>
            <th>Estado de orden</th>
          </tr>
        </thead>
        <tbody id="bus">
          @foreach($orders as $ord)
          <tr>
            <td  class="id align-middle">{{$ord-> idOrder}}</td>
            <td  class="align-middle">
            @if($ord-> statusOrder=='0') Pendiente
            @else Entregado
            @endif
            </td>
            <td><input type="button" class="btn btn-primary" value="Ver platos"> </td>
          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
    <div class="col-lg-6">
      <table class="table table-hover">
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
  });
</script>
@endsection