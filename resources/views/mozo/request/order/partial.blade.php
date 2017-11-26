

<table class="table table-hover">
	<thead>
		<tr>
			<th>Nombre de plato</th>
			<th>Precio</th>
			<th>Cantidad</th>
		</tr>
	</thead>
	<tbody id="filas">
		
	</tbody>
</table>
<script type="text/javascript">


    $(document).ready(function(){
    	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      	var id='{{ $id }}';
      	var url='{{ URL::to("mozo/request/order/showdish") }}'
      	var data={ id: id };
      	$.ajax({
                type : 'POST',
                url : url,
                data : data,
                dataType : 'json',
                success:function(data){
                    console.log('Well exitosa');
                    console.log(data);
                    llenarTabla(data);
                },
                error: function (data) {
                    console.log(data);
                }
        });
        function llenarTabla(data){
            $(data).each(function () {
                var col=document.createElement("tr");
                var td1=document.createElement("td");
                $(td1).text(this.NOMBRE);
                var td2=document.createElement("td");
                $(td2).text(this.PRECIO);
                var td3=document.createElement("td");
                $(td3).text(this.CANTIDAD);
                col.append(td1);
                col.append(td2);
                col.append(td3);
                $("#filas").append(col);
            });
        }

    });


</script>