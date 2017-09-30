<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mozo</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>Mesas del restaurante</h1>
	<div class="container">
	<h5>Ver platos del Día
	<button type="button" class="btn btn-success" id="BtnConsultar">Consultar</button>
	</h5>
     <table class="table table-striped text-center">
       <thead class="thead-inverse"> 
         <tr > 
           <th class="text-center">Mesa</th> 
           <th class="text-center">Personas por Mesa</th>
           <th class="text-center">Disponible/Ocupado</th>
           <th class="text-center"width="145">Cambiar Estado</th>
         </tr> 
       </thead>
       <tbody>
         <tr> 
           <td class="mano">1</td>
           <td class="mano">1-2 Personas</td> 
           <td class="mano" id="estado1">Disponible</td> 
           <td><button class="miClase" data-nuevo="1" data-estado="0">Alternar</button></td>
         </tr>
         <tr> 
           <td class="mano">2</td>
           <td class="mano">1-2 Personas</td> 
           <td class="mano" id="estado2">Disponible</td> 
           <td><button class="miClase" data-nuevo="2" data-estado="0">Alternar</button></td>
         </tr>
         <tr> 
           <td class="mano">3</td>
           <td class="mano">1-2 Personas</td> 
           <td class="mano" id="estado3">Disponible</td> 
           <td><button class="miClase" data-nuevo="3" data-estado="0">Alternar</button></td>
         </tr>
         <tr> 
           <td class="mano">4</td>
           <td class="mano">1-4 Personas</td> 
           <td class="mano" id="estado4">Disponible</td> 
           <td><button class="miClase" data-nuevo="4" data-estado="0">Alternar</button></td>
         </tr>
         <tr> 
           <td class="mano">5</td>
           <td class="mano">1-4 Personas</td> 
           <td class="mano" id="estado5">Disponible</td> 
           <td><button class="miClase" data-nuevo="5" data-estado="0">Alternar</button></td>
         </tr>
         <tr> 
           <td class="mano">6</td>
           <td class="mano">1-4 Personas</td> 
           <td class="mano" id="estado6">Disponible</td> 
           <td><button class="miClase" data-nuevo="6" data-estado="0">Alternar</button></td>
         </tr>
         <tr> 
           <td class="mano">7</td>
           <td class="mano">4-8 Personas</td> 
           <td class="mano" id="estado7">Disponible</td> 
           <td><button class="miClase" data-nuevo="7" data-estado="0">Alternar</button></td>
         </tr>
         <tr> 
           <td class="mano">8</td>
           <td class="mano">4-8 Personas</td> 
           <td class="mano" id="estado8">Disponible</td> 
           <td><button class="miClase" data-nuevo="8" data-estado="0">Alternar</button></td>
         </tr>
         <tr> 
           <td class="mano">9</td>
           <td class="mano">4-8 Personas</td> 
           <td class="mano" id="estado9">Disponible</td> 
           <td class="mano"><button class="miClase" data-nuevo="9" data-estado="0">Alternar</button></td>
         </tr>
         <tr> 
           <td class="mano">10</td>
           <td class="mano">4-8 Personas</td> 
           <td class="mano" id="estado10">Disponible</td> 
           <td><button class="miClase" data-nuevo="10" data-estado="0">Alternar</button></td>
         </tr>
       </tbody>
     </table>
  </div> 
  <script type="text/javascript" src="{{asset('js\joel-mozo.js')}}"></script>
</body>
</html>
