@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="panel panel-primary animated fadeInUp">
    <div class="panel-heading" align="center">
      Editar Mesa
    </div>
    <div class="panel-body">
      <form class="form-horizontal" action="{{route('table.update', $table ->CODIGO)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
              <input type="number" name="numberTable" value="{{$table->NUMBER}}" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Numero de Sillas</label>
          <div class="col-md-6">
              <input type="number" name="numberOfChairsTable" value="{{$table->CHAIRS}}" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Estado de la mesa</label>
          <div class="col-md-6">
            <select class="form-control" name="statusOfAttentionTable">
              <option value="Ocupado" {{($table->STATUS == 'Ocupado') ? ' selected' :''}}>Ocupado</option>
              <option value="Disponible" {{($table->STATUS == 'Disponible') ? ' selected' :''}}>Disponible</option>
              <option value="Reservado" {{($table->STATUS == 'Reservado') ? ' selected' :''}}>Reservado</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Seleccione sucursal</label>
          <div class="col-md-6">
            <select class="form-control" name="idBranch" id="idbranch">
              @foreach($branches as $branch)
                <option value="{{$branch->idBranch}}" {{($table->CODIGO ==$branch->idBranch) ? ' selected' :''}}>{{ $branch->nameBranch}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Asignar mozo</label>
          <input type="hidden" name="" value="{{$table->IDSUCURSAL}}" id="su">
          <input type="hidden" name="" value="{{$table->USER}}" id="us">
          <div class="col-md-6">
            <select class="iduser form-control" name="idUser" id="iduser">
            </select>
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
              <button type="submit" class="btn btn-primary">Actualizar</button>
              <a href="{{url('/table')}}" class="btn btn-primary">Cancelar</a>
            </div>
          </div>
        </div>
      </form>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
	var id=document.getElementById('su').value;
  var idus=document.getElementById('us').value;
  console.log(id);
  console.log(idus);
		 $.get('/ajax-users/'+id, function(data){
				$.each(data,function(index, o){
          if(idus==o.ID){
            $('#iduser').append('<option value="'+o.ID+'" selected>'+o.USER+' ' + o.FIRST+' '+o.SECOND+'</option>')
          }else{
            $('#iduser').append('<option value="'+o.ID+'">'+o.USER+' ' + o.FIRST+' '+o.SECOND+'</option>')
          }
				});
			});
      $('#idbranch').on('change',function(e){
        var id=$(this).val(); var es=id!=0?false:true;
        console.log(id);
        $('#iduser').prop('disabled',es);
        if(!es){
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
