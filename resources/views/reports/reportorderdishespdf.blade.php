<!DOCTYPE html>
<html>
<head>
    <title>Reporte Ordenes</title>
    <style type="text/css">
        .datagrid table {
            border-collapse: collapse; text-align: left;
            width: 100%;
        }
        .datagrid {
            font: normal 13px/150% Arial, Helvetica, sans-serif;
            background: #fff; overflow: hidden; border: 1px solid #636363;
            -webkit-border-radius: 4px; -moz-border-radius: 4px;
            border-radius: 4px;
        }
        .datagrid table td, .datagrid table th {
            padding: 3px 8px;
        }
        .datagrid table thead th {
            background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #212121), color-stop(1, #000000) );
            background:-moz-linear-gradient( center top, #212121 5%, #000000 100% );
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#212121', endColorstr='#000000');
            background-color:#212121;
            color:#FFFFFF;
            font-size: 14px;
            font-weight: bold;
            border-left: 1px solid #424040;
        }
        .datagrid table thead th:first-child {
            border: none;
        }
        .datagrid table tbody td {
            color: #262E42;
            border-left: 1px solid #919191;
            font-size: 12px;border-bottom: 1px solid #C7C7C7;
            font-weight: normal;
        }
        .datagrid table tbody td:first-child {
            border-left: none;
        }
        .datagrid table tbody tr:last-child td {
            border-bottom: none;
        }
        h1{
            font: normal 30px/150% Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
	<center><h1>Reporte de Platillos del Sistema</h1></center>
	<div class="datagrid">
		<table>
			<thead>
				<tr>
          <th>Codigo</th>
					<th>Nombre de Platos</th>
					<th>N° Orden</th>
          <th>Cantidad</th>
				</tr>
			</thead>
			<tbody>
				@foreach($orderdishes as $od)
				<tr>
          <td>{{$od->idOrderDish}}</td>
					<td>{{$od->nameDish}}</td>
					<td>{{$od->idOrder}}</td>
          <td>{{$od->quantity}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>
