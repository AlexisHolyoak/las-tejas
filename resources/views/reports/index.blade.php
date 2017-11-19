@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading" align="center">
				<h2>Listado de Reportes del Sistema</h2>
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
								<a href="{{action('ReportController@reportUsersPdf',1)}}" class="btn btn-danger" target="_blank">Ver</a> | 
								<a href="{{action('ReportController@reportUsersPdf',0)}}" class="btn btn-primary" target="_blank">Descargar</a>
								<a href="{{action('ReportController@reportUsersXls')}}" class="btn btn-warning">Excel</a>
							</td>
						</tr>
					</tbody>
				  </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection