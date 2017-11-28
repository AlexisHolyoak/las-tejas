@extends('layouts.admin')

@section('content')
<div class="container col-sm-12">


  Registrar nueva orden
  <div class="input-group">
    <span class="input-group-addon">Buscar</span>
    <input id="filtrar" type="text" class="form-control" placeholder="Buscar plato...">
  </div>

<div class="panel-body">

    @if(count($errors)>0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
  @endforeach
  @endif

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
      <tr>
        <td hidden><input type="text" class="dish" value="{{ $dish->idDish }}"></td>
        <td>{{ $dish->nameDish }}</td>
        <td>S/ {{ $dish->priceDish }}</td>
        <td><input type="checkbox" class="dog"></td>
        <td><input type="number" disabled="disabled" class="cant" min="1" integer id="abc" max="100"></td>
      </tr>
      @endforeach
</tbody>
</table>
<input type="button" id="crear" value="Crear" class="btn btn-primary pull-right">
<a href="{{route('request.order.index', $idRequest)}}" class="btn btn-danger" id="llam" >Cancelar</a>
<br><br><br><br>

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
            }else{
                $inpt.prop('disabled',true);
                $inpt.val('');
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
    });
</script>
@endsection