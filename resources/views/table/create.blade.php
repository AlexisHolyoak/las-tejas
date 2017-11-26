@extends('layouts.admin')

@section('content')
<div class="container col-md-12">
  <div class="panel panel-primary animated fadeInUp">
    <div class="panel-heading" align="center">
      Registrar Nueva Mesa
    </div>
    <div class="panel-body">
      <form class="form-horizontal" action="{{route('table.store')}}" method="post">
        {{ csrf_field() }}
        @if(count($errors)>0)
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
              {{$error}}
            </div>
          @endforeach
        @endif
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Numero de Mesa</label>
          <div class="col-md-6">
              <input type="number" name="numberTable" value="" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Numero de Sillas</label>
          <div class="col-md-6">
              <input type="number" name="numberOfChairsTable" value="" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Estado de la mesa</label>
          <div class="col-md-6">
            <select class="form-control" name="statusOfAttentionTable">
              <option value="Ocupado">Ocupado</option>
              <option value="Disponible">Disponible</option>
              <option value="Reservado">Reservado</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Seleccione sucursal</label>
          <div class="col-md-6">
            <select class="form-control" name="idBranch" id="idbranch">
              @foreach($branches as $branch)
                <option value="{{$branch->idBranch}}">{{ $branch->nameBranch}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Asignar mozo</label>
          <div class="col-md-6">
            <select class="iduser form-control" name="idUser" id="iduser">

            </select>
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
              <button type="submit" class="btn btn-primary">Crear</button>
              <a href="{{url('/table/')}}" class="btn btn-primary">Cancelar</a>
            </div>
          </div>
        </div>
      </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $('#idbranch').on('change',function(e){
    var id=$(this).val(); var es=id!=0?false:true;
    console.log(id);
    $('#iduser').prop('disabled',es);
    if(!es){
      console.log('prueba');
      $.get('/ajax-users/'+id,function(data){
        $('#iduser').empty();
        $.each(data,function(index,o){
          $('#iduser').append('<option value="'+o.ID+'">'+o.USER+' ' + o.FIRST+' '+o.SECOND+'</option>')
        });
      });
    }
  });
});
</script>
@endsection
