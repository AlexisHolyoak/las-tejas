<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Caja</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/caja/all.css">
        <link rel="stylesheet" href="css/caja/list.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    </head>
    <body>
        <header class="title_container">
            <h1 class="title">CAJA</h1>
            <span class="title_icon"></span>
        </header>
        <div class="main_section">

            <div class="list_container">
                <div class="list_header row">
                    <div class="table_number column">N° de meza</div>
                    <div class="amount column">Monto Total</div>
                    <div class="action column">Acción</div>
                </div>
                <?php
                    for ($i=1; $i < 11; $i++) {
                ?>
                <div class="item row" data-table-id="{{$i}}">
                    <div class="table_number column"><span>{{$i}}</span></div>
                    <div class="amount column">
                        <span>Monto Total:</span>
                        <span>140</span>
                    </div>
                    <div class="action column">
                        <a href="javascript:;" class="annotate">Apuntar</a>
                        <a href="caja/generar/{{$i}}" class="generate">Generar</a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>

        </div>
        <footer class="footer_container">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </footer>
    </body>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/caja/list.js"></script>
</html>
