@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Género</th>
                            <th>DNI</th>
                            <th>Dirección</th>
                            <th>Celular</th>
                            <th>F. Nacimiento</th>
                            <th>Ubicación</th>
                            <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $u)
                        <tr>
                            <td>{{$u->nameUser}}</td>
                            <td>{{$u->firstSurNameUser}} {{$u->secondSurNameUser}}</td>
                            <td>
                            @if($u->genderUser === '1')
                                <span class="label label-primary">H</span>
                            @else
                                <span class="label label-danger">M</span>
                            @endif
                            </td>
                            <td>{{$u->dniUser}}</td>
                            <td>{{$u->addressUser}}</td>
                            <td>{{$u->cellPhoneUser}}</td>
                            <td>{{$u->birthdayUser}}</td>
                            <td>{{$u->nameDepartment}}, {{$u->nameProvince}}, {{$u->nameDistrict}}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#userrole-{{$u->idUser}}">Permisos</a> | 
                                <a href="{{url('auth.edit',$u->idUser)}}" class="btn btn-success btn-xs">Editar</a> | 
                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#destroy-{{$u->idUser}}">Eliminar</a>
                            </td>
                        </tr>
                        @include('auth.userrole')
                        @include('auth.destroy')
                        @endforeach     
                      </tbody>
                    </table>
                    {!! $users->render() !!}
                </div>
        </div>
    </div>
    </div>
@endsection