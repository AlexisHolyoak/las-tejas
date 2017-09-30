$(document).ready(function(){
  	
  	$(".miClase").click(function(){
  		var id = $(this).attr("data-nuevo");
  		var texto= $(this).attr("data-estado");
  		if(texto=="0"){
  			$("#estado"+id).html("Ocupado");
  			$(this).attr("data-estado","1");
  		}else{
  			$("#estado"+id).html("Disponible");
  			$(this).attr("data-estado","0");
  		}
  	});
    $(".mano").css('cursor', 'pointer');
    $(".mano").click(function(){
      window.location.href = "platos.blade.php";
    });
    
  });