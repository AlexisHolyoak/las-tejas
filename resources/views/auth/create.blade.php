@extends('layouts.admin')

@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary animated fadeInRight">
        <div class="panel-heading" align="center">
            <h2>Crear nuevo Usuario</h2>
        </div>
        <form method="POST" action="{{ action('UserController@store')}}">
            <div class="panel-body">
                {{ csrf_field() }}
                <div class="form-group col-md-4" align="center">
                    <label for="nameUser">Nombre de Usuario</label>
                    <input type="text" name="nameUser" class="form-control" placeholder="Nombre del Usuario..." value="{{old('nameUser')}}" max="50" onkeydown="return alphaOnly(event);">
                    <p class="label label-danger">{{$errors->first('nameUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="firstSurNameUser">Apellido Paterno</label>
                    <input type="text" name="firstSurNameUser" class="form-control" placeholder="Apellido Paterno..." value="{{old('firstSurNameUser')}}" onkeydown="return alphaOnly(event);">
                    <p class="label label-danger">{{$errors->first('firstSurNameUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="secondSurNameUser">Apellido Materno</label>
                    <input type="text" name="secondSurNameUser" class="form-control" placeholder="Apellido Materno..." value="{{old('secondSurNameUser')}}" onkeydown="return alphaOnly(event);">
                    <p class="label label-danger">{{$errors->first('secondSurNameUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="genderUser">Sexo</label>
                    <select class="form-control" name="genderUser">
                        <option disabled selected>Seleccione Género...</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                    <p class="label label-danger">{{$errors->first('genderUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="dniUser">DNI</label>
                    <input type="text" maxlength="8" name="dniUser" class="form-control" placeholder="# DNI del Usuario..." value="{{old('dniUser')}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    <p class="label label-danger">{{$errors->first('dniUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="rucUser">RUC</label>
                    <input type="text" name="rucUser" class="form-control" placeholder="# RUC del Usuario..." value="{{old('rucUser')}}" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    <p class="label label-danger">{{$errors->first('rucUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="addressUser">Direccion</label>
                    <input type="text" name="addressUser" class="form-control" placeholder="Dirección del Usuario..." value="{{old('addressUser')}}">
                    <p class="label label-danger">{{$errors->first('addressUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="phoneUser">Telefono</label>
                    <input type="text" name="phoneUser" class="form-control" placeholder="# Teléfono del Usuario..." value="{{old('phoneUser')}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    <p class="label label-danger">{{$errors->first('phoneUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="cellPhoneUser">Celular</label>
                    <input type="text" name="cellPhoneUser" class="form-control" placeholder="# Celular del Usuario..." value="{{old('cellPhoneUser')}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    <p class="label label-danger">{{$errors->first('cellPhoneUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="email">Correo</label>
                    <input type="email" name="email" class="form-control" placeholder="ejemplo@dominio.com" value="{{old('email')}}">
                    <p class="label label-danger">{{$errors->first('email')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="birthdayUser">Fecha de Nacimiento</label>
                    <input type="date" name="birthdayUser" class="form-control" placeholder="Fecha de Nacimiento..." value="{{old('birthdayUser')}}">
                    <p class="label label-danger">{{$errors->first('birthdayUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="nickNameUser">Usuario</label>
                    <input type="text" name="nickNameUser" class="form-control" placeholder="Usuario..." value="{{old('nickNameUser')}}" onkeydown="return alphaOnly(event);">
                    <p class="label label-danger">{{$errors->first('nickNameUser')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña..." value="{{old('password')}}">
                    <p class="label label-danger">{{$errors->first('password')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña..." value="{{old('password_confirmation')}}">
                    <p class="label label-danger">{{$errors->first('password_confirmation')}}</p>
                </div>
                <div class="form-group col-md-12" align="center">
                    <h3>Ubicación del Usuario</h3>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="department">Departamentos</label>
                    <select id="department" name="department" class="form-control"></select>
                    <p class="label label-danger">{{$errors->first('department')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="province">Provincias</label>
                    <select id="province" name="province" class="form-control" disabled></select>
                    <p class="label label-danger">{{$errors->first('province')}}</p>
                </div>
                <div class="form-group col-md-4" align="center">
                    <label for="idDistrict">Distritos</label>
                    <select id="idDistrict" name="idDistrict" class="form-control" disabled></select>
                    <p class="label label-danger">{{$errors->first('idDistrict')}}</p>
                </div>
            </div>
            <div class="panel-footer form-group" align="center">
                <a href="{{route('auth.index')}}" class="btn btn-info"><span class="fa fa-hand-o-left"></span> Regresar</a>  <button class="btn btn-primary"> <span class="fa fa-save"></span> Guardar</button>
            </div>
        </form>
    </div>
</div>
@push('script')
<script>
$(document).ready(function(){
    $.get('/ajax-departments/', function(data){
        $('#department').append('<option value="0" disabled selected>Seleccione Departamento...</option>');
        $.each(data, function(index, o){
            $('#department').append('<option value="'+o.idDepartment+'">'+o.nameDepartment+'</option>');
        });
    });
});
$('#department').change(function(e){
    var id=e.target.value;
    $('#province').prop('disabled', false);
    $('#idDistrict').prop('disabled', true);
    $.get('/ajax-provinces/'+id, function(data){
        $('#province').empty();$('#idDistrict').empty();
        $('#province').append('<option value="0" disabled selected>Seleccione Provincia...</option>');
        $.each(data, function(index, o){
            $('#province').append('<option value="'+o.idProvince+'">'+o.nameProvince+'</option>');
        });
    });
});
$('#province').change(function(e){
    var id=e.target.value;
    $('#idDistrict').prop('disabled', false);
    $.get('/ajax-districts/'+id, function(data){
        $('#idDistrict').empty();
        $('#idDistrict').append('<option value="0" disabled selected>Seleccione Distrito...</option>');
        $.each(data, function(index, o){
            $('#idDistrict').append('<option value="'+o.idDistrict+'">'+o.nameDistrict+'</option>');
        });
    });
});
function alphaOnly(event) {
  var key = event.keyCode;`enter code here`
  return ((key >= 65 && key <= 90) || key == 8);
};
</script>
@endpush
@stop
