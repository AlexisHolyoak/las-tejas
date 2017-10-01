<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Generar</title>
        <link rel="stylesheet" href="{{$urlProject}}css/caja/all.css">
        <link rel="stylesheet" href="{{$urlProject}}css/caja/generate.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    </head>
    <body>
        <header class="title_container">
            <h1 class="title">GENERAR</h1>
            <span class="title_icon"></span>
        </header>
        <div class="table_number_container">
            <span class="table_number">{{$id}}</span>
        </div>
        <form class="main_section" action="{{$urlProject}}caja/terminar/{{$id}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <div class="name_container input_text">
                <label for="name">Nombre del cliente o razón social</label>
                <input id="name" class="name" type="text" name="name" placeholder="Ingrese el nombre o razón social">
            </div>

            <div class="ruc_container input_text">
                <label for="ruc">RUC</label>
                <input id="ruc" class="ruc" type="text" name="ruc" placeholder="Ingrese el número de RUC">
            </div>

            <div class="amount_container input_text">
                <label for="amount">Monto total de consumo</label>
                <div class="amount_child_container">
                    <input id="amount" class="amount" type="text" name="amount" value="140">
                    <a href="javascript:;" class="detail_button">Detalles de consumo</a>
                </div>
            </div>
            <div class="generate_container input_radio_button">
                <input type="radio" name="type_receipt" value="0">Boleta
                <input type="radio" name="type_receipt" value="1">Factura
            </div>

            <div class="butons_container">
                <a href="{{$urlProject}}caja" class="button button_cancel">Cancelar</a>
                <button type="submit" class="button button_generate">Generar</button>
            </div>

        </form>
        <!-- <footer class="footer_container">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </footer> -->
    </body>
</html>
