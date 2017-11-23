@extends('layouts.app')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      Registrar Nueva Orden
    </div>
    <div class="panel-body">
<form class="form-horizontal" action="" method="post">
        {{ csrf_field() }}
        @if(count($errors)>0)
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
              {{$error}}
            </div>
          @endforeach
        @endif
        <div class="form-group">
          <label for="number" class="col-md-4 control-label">Platos</label>
          <div class="col-md-6">
              <input type="text" name="Plato" value="" class="form-control">
          </div>
        
        
        
          <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
              <button type="submit" class="btn btn-primary">Crear</button>
              
            </div>
          </div>
        </div>
      </form>
      </div>
</div>
@endsection