@extends('layouts.app')

@section('content')
<div class="center">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">REPORTES DEL RESTAURANTE LAS TEJAS</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-striped">

                    <thead>
                      <tr>
                      <th>ID</th>
                      <th>REPORTE</th>
                      <th>VER</th>
                      <th>DESCARGAR</th>
                      </tr>
                  </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>REPORTE DE USUARIOS REGISTRADOS</td>
                      <td><a href="{{action('UserController@generarPDF')}}" target="_blank">
                        <button class="btn btn-block btn-primary btn-xs">VER</button></a></td>
                      <td><a href="{{action('UserController@descargarPDF')}}" target="_blank" >
                        <button class="btn btn-block btn-danger btn-xs">DESCARGAR</button></a></td>
                    </tr>
                  </tbody>
                </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
 </div>
 @endsection
