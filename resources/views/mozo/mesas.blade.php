@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h1 align="center" style="margin: 15px 15px;">Mesas del Restaurante</h1>
    <div class="row center-row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table class="table table-dark">
          <thead>
            <tr>
              <th>Meza</th>
              <th>Persona por mesa</th>
              <th>Dispnible/Ocupado</th>
              <th>Cambiar Estado</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>1 -2 Personas</td>
              <td>Disponible</td>
              <td><button class="miClase" data-nuevo="1" data-estado="0">Alternar</button></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>1 -2 Personas</td>
              <td>Disponible</td>
              <td><button class="miClase" data-nuevo="1" data-estado="0">Alternar</button></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>1 -2 Personas</td>
              <td>Disponible</td>
              <td><button class="miClase" data-nuevo="1" data-estado="0">Alternar</button></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>1 -2 Personas</td>
              <td>Disponible</td>
              <td><button class="miClase" data-nuevo="1" data-estado="0">Alternar</button></td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>1 -2 Personas</td>
              <td>Disponible</td>
              <td><button class="miClase" data-nuevo="1" data-estado="0">Alternar</button></td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>1 -2 Personas</td>
              <td>Disponible</td>
              <td><button class="miClase" data-nuevo="1" data-estado="0">Alternar</button></td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>
@endsection
