<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Las Tejas</title>

    <!---Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{ asset('js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element" align="center"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('images/man.svg') }}" height="100" width="100" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->nameUser.' '.Auth::user()->firstSurNameUser }}</strong>
                             </span> <span class="text-muted text-xs block">{{Auth::user()->email}}<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="{{url('bienvenida')}}"><i class="fa fa-home"></i> <span class="nav-label">Pagina Principal</span>  </a>
                    </li>
                    @if(auth()->user()->hasRole(['Administrador']))
                    <li>
                        <a href="{{ url('branch') }}"><i class="fa fa-map-marker"></i><span class="nav-label">Sucursales</span></a>
                    </li>
                    @endif
                    @if(auth()->user()->hasRole(['Administrador','Mozo']))
                    <li>
                        <a href="{{ route('mozo',Auth::user()->idUser) }}"><i class="fa fa-child"></i><span class="nav-label">Atender Mesas</span></a>
                    </li>
                    @endif                                                            
                    @if(auth()->user()->hasRole(['Administrador']))
                    <li id="acceso">
                        <a href="#"><i class="fa fa-user-circle"></i> <span class="nav-label">Acceso</span>  <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a id="Usuarios" href="{{ url('auth') }}">Usuarios</a></li>
                            <li><a id="Roles" href="{{ url('role') }}">Roles</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Bienvenido al Sistema de Las Tejas</span>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>

        </nav>
        </div>
        <div class="row dashboard-header">
<div class="container col-md-12">
  <div class="panel panel-primary animated fadeInUp">
    <div class="panel-heading" align="center">
      <h2>
        Registrar nueva Orden de platos
      </h2>
    </div>
    <div class="input-group">
      <span class="input-group-addon">Buscar</span>
      <input id="filtrar" type="text" class="form-control" placeholder="Buscar plato...">
    </div>
    <div class="panel-body">    
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre de plato</th>
            <th>Precio</th>
            <th></th>
            <th>Cantidad</th>
          </tr>
        </thead>
        <tbody class="buscar" id="filas">
          @foreach($dishes as $dish)
          <tr >
            <td hidden><input type="text" class="dish" value="{{ $dish->idDish }}"></td>
            <td>{{ $dish->nameDish }}</td>
            <td>S/ {{ $dish->priceDish }}</td>
            <td><input type="checkbox" class="dog"></td>
            <td><input type="number" class="cant" min="1" integer id="abc" disabled></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <input disabled type="button" id="crear" value="Crear" class="btn btn-warning pull-right">
      <a href="{{route('request.order.index', $idRequest)}}" class="btn btn-danger" id="llam" >Cancelar</a>
      <br>
    </div>  
  </div>
</div>
</div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer">
                    <div class="pull-right">
                        Sistema <strong>Gestion de Restaurante.</strong>
                    </div>
                    <div>
                        <strong>Copyright</strong> Las Tejas &copy; v1.0 - 2017
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
  <script type="text/javascript">

  $(document).ready(function(){
    $('#abc').keyup(function (){
      this.value=(this.value + '').replace(/[^1-9]/g,'');
    });
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('#filtrar').keyup(function () {
      var rex = new RegExp($(this).val(), 'i');
      $('.buscar tr').hide();
      $('.buscar tr').filter(function () {
        return rex.test($(this).text());
      }).show();

    });
    $('#filas').on('change', ':checkbox', function () {
      var $inpt = $(this).closest('tr').find('input.cant').prop('disabled',this.checked);
      if(this.checked){
        $inpt.prop('disabled',false);
        $inpt.val(1);
        $('#crear').attr("disabled", false);
        
      }else{
        $inpt.prop('disabled',true);
        $inpt.val('');
        $('#crear').attr("disabled", true);
        
      }
    });
    $("#crear").on("click",function(e){
      var ur='{{ URL::to("mozo/request/order/store") }}';
      var id='{{ $idRequest }}';
      $.ajax({
        type : 'POST',
        url : ur,
        data : { id: id },
        dataType : 'json',
        success:function(data){
          console.log('Creacion orden exitosa');
        },
        error: function (data) {
          console.log(data);
        }
      });
      $("input:checked").each(function(){
        $('#crear').attr("disabled", true);

        $('#llam').attr("disabled", true);
        var can = $(this).closest('tr').find('input.cant').val();
        var id = $(this).closest('tr').find('input.dish').val();
        var url = '{{ URL::to("mozo/request/order/storedish") }}';
        $.ajax({
          type : 'POST',
          url : url,
          data : { id: id, cantidad: can },
          dataType : 'json',
          success:function(data){
            console.log('Creacion orderDishes exitosa');
          },
          error: function (data) {
            console.log(data);
          }
        });
      });
      var xd=$('#llam').attr('href');
      window.location=xd;
      
    });
      $("#llam").click(function() {    
      
      $('#llam').attr("disabled", true);
      $('#crear').attr("disabled", true);
  });
});
</script>
