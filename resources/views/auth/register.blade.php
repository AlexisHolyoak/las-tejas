@extends('layouts.app')

@section('content')
<style>
select:required:invalid {
  color: gray;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registrarse</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="col-md-12">
                            @foreach($errors->all() as $e)
                                <span class="help-block">
                                    <strong>{{ $e }}</strong>
                                </span>
                            @endforeach
                        </div>

                        <div class="form-group col-md-4">
                            <label for="nameUser">Nombre</label>
                            <input id="nameUser" type="text" class="form-control" name="nameUser" value="{{ old('nameUser') }}" required autofocus placeholder="Ingresa tu nombre...">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="firstSurNameUser">Apellido Paterno</label>
                            <input id="firstSurNameUser" type="text" class="form-control" name="firstSurNameUser" value="{{ old('firstSurNameUser') }}" required autofocus placeholder="Ingresa tu Apellido Paterno...">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="secondSurNameUser">Apellido Materno</label>
                            <input id="secondSurNameUser" type="text" class="form-control" name="secondSurNameUser" value="{{ old('secondSurNameUser') }}" required autofocus placeholder="Ingresa tu Apellido Materno...">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="genderUser">Género</label>
                            <select id="genderUser" name="genderUser" class="form-control">
                                    <option value="0" disabled selected>Seleccione...</option>
                                    <option value="1">Hombre</option>
                                    <option value="2">Mujer</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="dniUser">DNI</label>
                            <input id="dniUser" type="text" class="form-control" name="dniUser" value="{{ old('dniUser') }}" required autofocus placeholder="Ingresa N° de DNI..." maxlength="8">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="rucUser">RUC</label>
                            <input id="rucUser" type="text" class="form-control" name="rucUser" value="{{ old('rucUser') }}" required autofocus placeholder="Ingresa N° de RUC..." maxlength="11">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="addressUser">Dirección</label>
                            <input id="addressUser" type="text" class="form-control" name="addressUser" value="{{ old('addressUser') }}" required autofocus placeholder="Ingresa tu Dirección...">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="phoneUser">Telefono</label>
                            <input id="phoneUser" type="text" class="form-control" name="phoneUser" value="{{ old('phoneUser') }}" required autofocus placeholder="Ingresa tu N° de Teléfono...">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cellPhoneUser">Celular</label>
                            <input id="cellPhoneUser" type="text" class="form-control" name="cellPhoneUser" value="{{ old('cellPhoneUser') }}" required autofocus placeholder="Ingresa tu N° de Celular...">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Correo Electronico</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="ejemplo@dominio.com">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="birthdayUser">Fecha de Nacimiento</label>
                            <input id="birthdayUser" type="date" class="form-control" name="birthdayUser" value="{{ old('birthdayUser') }}" required placeholder="Ingresa tu Fecha de Nacimiento">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nickNameUser">Nombre de Usuario</label>
                            <input id="nickNameUser" type="text" class="form-control" name="nickNameUser" value="{{ old('nickNameUser') }}" required placeholder="Ingresa un Nombre de Usuario...">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required placeholder="Contraseña...">
                        </div>



                        <div class="form-group col-md-6">
                            <label for="password_confirmation">Confirmar Contraseña</label>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required placeholder="Confirmar Contraseña...">
                        </div>


                        <div class="form-group col-md-4">
                            <label>Departamentos</label>
                            <select id="departments" name="departments" placeholder="Seleccione Departamento..." class="form-control" required>
                            </select>                           
                        </div>

                        <div class="form-group col-md-4">
                            <label>Provincias</label>
                            <select id="provinces" name="provinces" placeholder="Seleccione Provincia..." class="form-control" required disabled>
                            </select>                        
                        </div>

                        <div class="form-group col-md-4">
                            <label>Distritos</label>
                            <select id="districts" name="districts" placeholder="Seleccione Distrito..." class="form-control" required disabled>
                            </select>                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
@push('register')
<script>
$(document).ready(function(){
    addDepartments();
    $('#departments').on('change',function(e){
        var id = e.target.value; var es = id!=0?false:true
        $('#provinces').prop('disabled', es);
        $('#districts').prop('disabled', true);
        if(!es){
            $.get('/ajax-provinces/'+id, function(data){
                $('#provinces').empty();$('#districts').empty();
                $('#provinces').append('<option value="0" disabled selected>Seleccione...</option');
                $.each(data,function(index, o){
                    $('#provinces').append('<option value="'+o.idProvince+'">'+o.nameProvince+'</option');
                });
            });
        }
        
    });
    $('#provinces').on('change',function(e){
        var id = e.target.value; var es = id!=0?false:true
        $('#districts').prop('disabled', es);
        if(!es){
            $.get('/ajax-districts/'+id, function(data){
                $('#districts').empty();
                $('#districts').append('<option value="0" disabled selected>Seleccione...</option');
                $.each(data,function(index, o){
                    $('#districts').append('<option value="'+o.idDistrict+'">'+o.nameDistrict+'</option');
                });
            });
        }
        
    });
});
function addDepartments(){
    $.get('ajax-departments', function(data){
        $('#departments').append('<option value="0" disabled selected>Seleccione...</option');
        $.each(data,function(index, o){
            $('#departments').append('<option value="'+o.idDepartment+'">'+o.nameDepartment+'</option');
        });
    });
}
</script>
@endpush
@endsection