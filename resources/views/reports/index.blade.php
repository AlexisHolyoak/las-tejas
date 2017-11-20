@extends('layouts.admin')

@section('content')
<div class="container col-md-8 col-md-offset-2">
	<div class="panel panel-primary animated fadeInDown">
		<div class="panel-heading" align="center">
			<h2>Reportes de Usuarios del Sistema</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive col-md-10 col-md-offset-1">
			  <table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th>Reporte</th>
						<th>Descripción</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Usuario</td>
						<td>Usuarios del Sistema</td>
						<td>
							<a href="{{action('ReportController@reportUsersPdf',1)}}" class="btn btn-danger btn-xs" target="_blank"><i class="fa fa-file-pdf-o"></i> Ver</a> | 
							<a href="{{action('ReportController@reportUsersPdf',0)}}" class="btn btn-danger btn-xs" target="_blank"><i class="fa fa-file-pdf-o"></i> Descargar</a> | 
							<a href="{{action('ReportController@reportUsersXls')}}" class="btn btn-success btn-xs"><i class="fa fa-file-excel-o"></i> Excel</a>
						</td>
					</tr>
				</tbody>
			  </table>
			</div>
		</div>
	</div>
</div>
@endsection