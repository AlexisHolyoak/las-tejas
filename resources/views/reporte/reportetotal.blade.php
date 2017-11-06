<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Por Pais</title>
<style>

 .col-md-12 {
    width: 100%;
    text-align: center;
    color:#FF0000
}

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: #ECF0F5;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}


.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;

}


.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}


.table-bordered {
    border: 1px solid #f4f4f4;
}


.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    text-align: center;
}

table {
    background-color: transparent;
}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 2px solid #f4f4f4;
    text-align: center;
    background-color: #5DADE2;
    color: #0C2DB2  
}

.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
}

.bg-red {
    background-color: #dd4b39 !important;
}

</style>

</head>
<body>

<div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <div class="box-body">
									<h1>REPORTE DE USUARIOS REGISTRADOS</h1>
                  <table class="table table-bordered">
                  <thead>
                     <tr>
                      <th style="width: 40px" text-align=center>IDUSUARIO</th>
                      <th style="width: 40px" text-align=center>NOMBRE</th>
                      <th style="width: 40px" text-align=center>APELLIDO PATERNO</th>
                      <th style="width: 40px" text-align=center>APELLIDO MATERNO</th>
                      <th style="width: 40px" text-align=center>DNI</th>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                              <td style="width:10px">{{$user->idUser}}</td>
                              <td style="width:10px">{{$user->nameUser}}</td>
                              <td style="width:10px">{{$user->firstSurNameUser}}</td>
                              <td style="width:10px">{{$user->secondSurNameUser}}</td>
                              <td style="width:10px">{{$user->dniUser}}</td>
                            </tr>
                        @endforeach
                  </tbody>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                </div>
              </div><!-- /.box -->
            </div>
</html>
