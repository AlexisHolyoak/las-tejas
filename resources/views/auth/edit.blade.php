@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">            
            <div class="panel panel-default" style="margin-bottom: 80px">
                <div class="panel-heading" align="center">
                    <h2>Editar Usuario</h2>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('auth.update',$users->idUser)}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group col-md-4" align="center">
                            <label for="nameUser">Nombre de Usuario</label>
                            <input type="text" name="nameUser" class="form-control" placeholder="Nombre del Usuario..." value="{{$users->nameUser}}">
                            <p class="label label-danger">{{$errors->first('nameUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="firstSurNameUser">Apellido Paterno</label>
                            <input type="text" name="firstSurNameUser" class="form-control" placeholder="Apellido Paterno..." value="{{$users->firstSurNameUser}}">
                            <p class="label label-danger">{{$errors->first('firstSurNameUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="secondSurNameUser">Apellido Materno</label>
                            <input type="text" name="secondSurNameUser" class="form-control" placeholder="Apellido Materno..." value="{{$users->secondSurNameUser}}">
                            <p class="label label-danger">{{$errors->first('secondSurNameUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="genderUser">Sexo</label>
                            <select class="form-control" name="genderUser">
                                <option disabled selected>Seleccione Género...</option>
                                @if($users->genderUser==='Hombre')
                                    <option value="Hombre" selected>Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                @else
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer" selected>Mujer</option>
                                @endif
                            </select>
                            <p class="label label-danger">{{$errors->first('genderUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="dniUser">DNI</label>
                            <input type="text" maxlength="8" name="dniUser" class="form-control" placeholder="# DNI del Usuario..." value="{{$users->dniUser}}">
                            <p class="label label-danger">{{$errors->first('dniUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="rucUser">RUC</label>
                            <input type="text" name="rucUser" class="form-control" placeholder="# RUC del Usuario..." value="{{$users->rucUser}}" maxlength="11">
                            <p class="label label-danger">{{$errors->first('rucUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="addressUser">Direccion</label>
                            <input type="text" name="addressUser" class="form-control" placeholder="Dirección del Usuario..." value="{{$users->addressUser}}">
                            <p class="label label-danger">{{$errors->first('addressUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="phoneUser">Telefono</label>
                            <input type="text" name="phoneUser" class="form-control" placeholder="# Teléfono del Usuario..." value="{{$users->phoneUser}}">
                            <p class="label label-danger">{{$errors->first('phoneUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="cellPhoneUser">Celular</label>
                            <input type="text" name="cellPhoneUser" class="form-control" placeholder="# Celular del Usuario..." value="{{$users->cellPhoneUser}}">
                            <p class="label label-danger">{{$errors->first('cellPhoneUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="birthdayUser">Fecha de Nacimiento</label>
                            <input type="date" name="birthdayUser" class="form-control" placeholder="Fecha de Nacimiento..." value="{{$users->birthdayUser}}">
                            <p class="label label-danger">{{$errors->first('birthdayUser')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña...">
                            <p class="label label-danger">{{$errors->first('password')}}</p>
                        </div>
                        <div class="form-group col-md-4" align="center">
                            <label for="password_confirmation">Confirmar Contraseña</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña...">
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
                        <div class="form-group col-md-12" align="center">
                            <a href="{{route('auth.index')}}" class="btn btn-default">Regresar a la Lista</a>
                            <button class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
$(document).ready(function(){
    $.get('/ajax-departments/', function(data){
        $('#department').append('<option value="0" disabled selected>Seleccione Departamento...</option>');
        $.each(data, function(index, o){
            if(o.idDepartment=={{$users->idDepartment}}){
                $('#department').append('<option value="'+o.idDepartment+'" selected>'+o.nameDepartment+'</option>');
            }else{
                $('#department').append('<option value="'+o.idDepartment+'">'+o.nameDepartment+'</option>');
            }
        });
    });
    province();
    district();
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
function province(){
    var id={{$users->idDepartment}};
    $('#province').prop('disabled', false);
    $('#idDistrict').prop('disabled', true);
    $.get('/ajax-provinces/'+id, function(data){
        $('#province').empty();$('#idDistrict').empty();
        $('#province').append('<option value="0" disabled selected>Seleccione Provincia...</option>');
        $.each(data, function(index, o){
            if(o.idProvince=={{$users->idProvince}}){
                $('#province').append('<option value="'+o.idProvince+'" selected>'+o.nameProvince+'</option>');
            }else{
                $('#province').append('<option value="'+o.idProvince+'">'+o.nameProvince+'</option>');
            }
        });
    });
}
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
function district(){
    var id={{$users->idProvince}};
    $('#idDistrict').prop('disabled', false);
    $.get('/ajax-districts/'+id, function(data){
        $('#idDistrict').empty();
        $('#idDistrict').append('<option value="0" disabled selected>Seleccione Distrito...</option>');
        $.each(data, function(index, o){
            
            if(o.idDistrict=={{$users->idDistrict}}){
                $('#idDistrict').append('<option value="'+o.idDistrict+'" selected>'+o.nameDistrict+'</option>');
            }else{
                $('#idDistrict').append('<option value="'+o.idDistrict+'">'+o.nameDistrict+'</option>');
            }
        });
    });
}
</script>
@endpush
@stop
