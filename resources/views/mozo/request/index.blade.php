@extends('layouts.admin')

@section('content')
<div class="container col-sm-12" >
<form action="{{ URL::to('mozo/request/store') }}" method="POST" id="frm-insert">
{{csrf_field()}}
        <div class="form-group" hidden>
            <div class="col-md-6">
                <input type="text" name="id" id="inp" class="form-control" value="{{ $idmesa }}">
            </div>
        </div>

  <input type="submit" value="Crear pedido" class="btn btn-primary pull-right" >

</form>
  <div class="panel panel-default">
    <div class="panel-heading">
      Pedidos de la Mesa {{$idmesa}}
    </div>
    <div class="panel-body">
      <table class="table table-hover">
          <thead>
              <tr>
                <th>Id Pedido</th>
                <th>Estado de pedido</th>
                <th>Estado de Atencion</th>
              </tr>
            </thead>
          <tbody>
            @foreach($requests as $req)
            <tr>
                  <td  class="align-middle">{{$req-> ID}}</td>
                  <td  class="align-middle">{{$req-> ESTADO}}</td>
                  <td  class="align-middle">{{$req-> ESTADOATENCION}}</td>
                  <td  class="align-middle"><a href="{{route('request.order.index',$req-> ID)}}" class="btn btn-primary pull-right">Ver ordenes</a></td>
            </tr>
            @endforeach
            <td  class="align-middle"><a href="{{route('mozo', $iduser->idUser )}}" class="btn btn-primary pull-right">Regresar</a></td>
          </tbody>

        </table>
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
        

});
</script>
@endsection
