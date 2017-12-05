@extends('layouts.admin')
@section('content')
		<div class="col-md-12">
      <div class="panel panel-primary animated fadeInUp">
        <div class="panel-heading" align="center">
              <h2>Platilos, Bebidas y Otros</h2>
        </div>
        <div class="panel-body">
          <div class="col-md-12" style="padding-top:10px">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
              <form class="form-inline filter_form" action="{{url('platillos')}}" method="GET">
                <div class="form-group">
                  <label>Selecciona Categoría : </label>
                  <select name="filterCombo" class="form-control filter_actions">
                    <option value="0">Todos</option>
                    <?php foreach ($dataCombo as $key => $value): ?>
                        <option value="{{ $value->idSubCategory }}" {{ ($value->idSubCategory == $category) ? "selected" : ""}}>{{ $value->nameSubCategory }}</option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mdl-add-comida">Agregar producto <img src="{{asset('images/plus.svg')}}" height="30" width="30"></button>
            </div>
          </div>
          <div class="col-md-12 product_container">
            <?php foreach ($dataView as $key => $value):?>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product">
              <div class="contact-box center-version">
                <img alt="image" class="img-circle" src="{{asset('files/productos/'.$value->imageDish)}}" style="height:150px;width:150px;">
                <h4><strong>{{ $value->nameDish }}</strong></h4>
                <address>
                  <strong>Categoría: </strong>{{ $value->nameSubCategory }}<br>
                </address>
                <address>
                    <strong>Precio: </strong>{{ $value->priceDish }}<br>
                </address>
                <div class="contact-box-footer">
                  <div class="m-t-xs btn-group">
                    <a href="#" class="btn btn-info circle btn_edit" data-toggle="modal" data-target="#mdl-edit-comida" data-id = "{{ $value->idDish }}"><span>Editar</span></a>
                    <a href="#" class="btn btn-danger circle btn_del" data-toggle="modal" data-target="#mdl-del-comida" data-id = "{{ $value->idDish }}"><span>Eliminar</span></a>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
		</div>

		<div class="modal fade" id="mdl-add-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-add-comida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style="background-color: #1c84c6;color: #FFFFFF" align="center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		        <strong><h4 class="modal-title" id="mdl-add-comida">Agregar Producto</h4></strong>
		      </div>
						<form class="add_product_form" action="{{url('platillos/agregar')}}" method="POST" enctype="multipart/form-data">
							<div class="modal-body dish_add">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<label for="nombre">Nombre</label>
									<input type="text" name="dishName" class="form-control" placeholder="Nombre del producto...">

									<label for="precio">Precio</label>
									<input type="text" name="dishPrice" class="form-control" placeholder="Precio del producto...">

									<label for="descripcion">Categoría</label>
									<select name="categoryId" class="form-control">
											<?php foreach ($dataCombo as $key => $value): ?>
													<option value="{{ $value->idSubCategory }}">{{ $value->nameSubCategory }}</option>
											<?php endforeach; ?>
									</select>
									<label for="descripcion">Tipo</label>
									<select name="dishType" class="form-control">
											<?php foreach ($dataComboDish as $key => $value): ?>
													<option value="{{ $value->idSubType }}">{{ $value->nameSubType }}</option>
											<?php endforeach; ?>
									</select>
									<label for="imagen">Imagen</label>
									<div class="form-control">
										<label class="custom-file">
										  <input type="file" id="file" name="imagen" class="custom-file-input">
										  <span class="custom-file-control"></span>
										</label>
									</div>
									<div class="alertMessage" style="display:none">
										<br>
										<label  class="text-danger">Ingrese los datos correctamente</label>
									</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-success btn_add_dish"><img src="{{asset('images/add-comida.svg')}}" height="20" width="20"> Agregar</button>
                <button type="button" class="btn btn-default btn_close" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cerrar</button>
							</div>
					</form>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-edit-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-edit-comida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style="background-color: #202020;color: #FFFFFF" align="center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="mdl-edit-comida">Modificar Producto</h4>
		      </div>
					<form class="edit_product_form" action="" method="POST" enctype="multipart/form-data">
						<div class="modal-body dish_edit">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<label for="nombre">Nombre</label>
							<input type="text" name="dishName" class="form-control" placeholder="Nombre del producto...">
							<label for="precio">Precio</label>
							<input type="text" name="dishPrice" class="form-control" placeholder="Precio del producto...">
							<label for="descripcion">Categoría</label>
							<select name="categoryId" class="form-control">
								<?php foreach ($dataCombo as $key => $value): ?>
										<option value="{{ $value->idSubCategory }}">{{ $value->nameSubCategory }}</option>
								<?php endforeach; ?>
							</select>
							<label for="descripcion">Tipo</label>
							<select name="dishType" class="form-control">
								<?php foreach ($dataComboDish as $key => $value): ?>
										<option value="{{ $value->idSubType }}">{{ $value->nameSubType }}</option>
								<?php endforeach;?>
							</select>
							<label for="imagen">Imagen</label>
							<div class="form-control">
								<label class="custom-file">
									<input type="file" id="file" name="imagen" class="custom-file-input">
									<span class="custom-file-control"></span>
								</label>
							</div>
							<div class="alertMessage" style="display:none">
										<br>
							  <label  class="text-danger">Ingrese los datos correctamente</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning btn_close" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
							<button type="submit" class="btn btn-primary btn_edit_dish">Modificar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
						</div>
					</form>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-del-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-del-comida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header" style="background-color: #ed5565;color: #FFFFFF" align="center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		        <h4 class="modal-title" id="mdl-del-comida">Eliminar Platillo</h4>
		      </div>
					<form class="delete_form" action="" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="modal-body">
							<h4>¿Estás seguro de eliminar el Platillo?</h4>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning btn_close" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
							<button type="submit" class="btn btn-danger btn_del_dish">Eliminar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
						</div>
					</form>
		    </div>
		  </div>
		</div>
<script type="text/javascript" src="{{asset('js/cocinero/platillos/dataAjax.js')}}"></script>
@endsection
