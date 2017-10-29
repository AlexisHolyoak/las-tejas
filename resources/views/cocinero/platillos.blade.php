@section('content')

<div class="container">
  <div class="row">
    <ol class="breadcrumb">
		  <li class="active">Cocinero</li>
		  <li><a href="{{ url('/ordenes/') }}">Ordenes</a></li>
		</ol>
		<h1 align="center" style="margin: 15px 15px;">Platillos del día</h1>
		<div class="row center-row">
			<div class="form-group col-md-8">
			<button type="button" class="btn btn-primary btn-cocinero" data-toggle="modal" data-target="#mdl-add-comida">Agregar Comida <img src="{{asset('images/add-comida.svg')}}" height="30" width="30"></button>
			<button type="button" class="btn btn-primary btn-cocinero" data-toggle="modal" data-target="#mdl-add-bebida">Agregar Bebida <img src="{{asset('images/add-bebida.svg')}}" height="30" width="30"></button></div>
			<div class="form-group col-md-4">
				<label>Selecciona Categoría : </label>
				<select class="form-control filter_actions">
                    <option value="0">Todos</option>
                    <?php foreach ($dataCombo as $key => $value): ?>
                        <option value="{{ $value->idSubCategory }}">{{ $value->nameSubCategory }}</option>
                    <?php endforeach; ?>
				</select>
			</div>
		</div>
		<div class="row center-row product_container">
            <?php foreach ($dataView as $key => $value):
                $imgName = 'producto.png';
                $categoryEdit = $value->idSubCategory == 1 ? '#mdl-edit-comida' : '#mdl-edit-bebida';
                $categoryDel = $value->idSubCategory == 1 ? '#mdl-del-comida' : '#mdl-del-bebida';
            ?>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product">
				<div class="c-box center-version">
			        <br><img class="img-thumbnail circle" src="{{asset('images/'.$imgName)}}" height="150px" width="150px">
			        <h4><strong>{{ $value->nameDish }}</strong></h4>
			        <address>
			        	<strong>Categoría: </strong>{{ $value->nameSubCategory }}<br>
			        </address>
			        <address>
			            <strong>Precio: </strong>{{ $value->priceDish }}<br>
			        </address>
			        <div class="c-box-footer">
			            <a href="#" class="btn btn-info circle btn_edit" data-toggle="modal" data-target="{{ $categoryEdit }}" data-id = "{{ $value->idDish }}"><span>Editar</span></a>
			            <a href="#" class="btn btn-danger circle btn_del" data-toggle="modal" data-target="{{ $categoryDel }}" data-id = "{{ $value->idDish }}"><span>Eliminar</span></a>
			        </div>
			    </div>
			</div>
            <?php endforeach; ?>

		</div>
		<div class="modal fade" id="mdl-add-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-add-comida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <strong><h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-add-comida">Agregar Platillo</h4></strong>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body dish_add">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Comida...">

				<label for="precio">Precio</label>
				<input type="text" name="precio" class="form-control" placeholder="Precio de la Comida...">

				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Comida...">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger btn_close" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary btn_add_dish">Agregar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-edit-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-edit-comida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-edit-comida">Modificar Platillo</h4>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body dish_edit">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Comida...">
				<label for="precio">Precio</label>
				<input type="text" name="precio" class="form-control" placeholder="Precio de la Comida...">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Comida..." >
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger btn_close" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary btn_edit_dish">Modificar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-add-bebida" tabindex="-1" role="dialog" aria-labelledby="mdl-add-bebida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-add-bebida">Agregar Bebida</h4>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body drink_add">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Bebida...">
				<label for="precio">Precio</label>
				<input type="text" name="precio" class="form-control" placeholder="Precio de la Bebida...">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Bebida...">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger btn_close" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary btn_add_drink">Agregar <img src="{{asset('images/add-bebida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
        <div class="modal fade" id="mdl-edit-bebida" tabindex="-1" role="dialog" aria-labelledby="mdl-edit-bebida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-edit-bebida">Modificar Bebida</h4>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body drink_edit">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre de la Bebida...">
				<label for="precio">Precio</label>
				<input type="text" name="precio" class="form-control" placeholder="Precio de la Bebida...">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" class="form-control" placeholder="Descripción de la Bebida...">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger btn_close" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-primary btn_edit_drink">Modificar <img src="{{asset('images/add-bebida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="mdl-del-comida" tabindex="-1" role="dialog" aria-labelledby="mdl-del-comida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-del-comida">Eliminar Platillo</h4>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<h4>¿Estás seguro de eliminar el Platillo?</h4>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-warning btn_close" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-danger btn_del_dish">Eliminar <img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
        <div class="modal fade" id="mdl-del-bebida" tabindex="-1" role="dialog" aria-labelledby="mdl-del-bebida" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title col-lg-10 col-sm-10 col-md-10 col-xs-10" id="mdl-del-bebida">Eliminar Bebida</h4>
		        <button type="button" class="close col-lg-1 col-sm-1 col-md-1 col-xs-1" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<h4>¿Estás seguro de eliminar la bebida?</h4>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-warning btn_close" data-dismiss="modal">Close <img src="{{asset('images/salida.svg')}}" height="20" width="20"></button>
		        <button type="button" class="btn btn-danger btn_del_dish">Eliminar <img src="{{asset('images/add-bebida.svg')}}" height="20" width="20"></button>
		      </div>
		    </div>
		  </div>
		</div>
		<footer class="footer background-nav">
	      <div class="container">
	      	<a href="#" class="navbar-brand link">Sistema Nasa</a>
	      </div>
  </div>
</div>

<script type="text/javascript" src="{{asset('js/cocinero/platillos/dataAjax.js')}}"></script>

@endsection
