<!DOCTYPE html> 
<html>
    <head>
    	<meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="Proyecto de desarrollo de un producto wizard online que tenga un quiz y con una unica solucion que es SAP Cloud Configurator">
        <meta name="keywords"               content="HP Incentivo La Polla">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="May 29, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#0096D6">
    	<title>HP | Incentivo La Polla</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/hp-favicon.ico">
    	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>hpsimplified.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <section id="principal">
            <div id="home">
                <div class="js-header">
                    <div class="js-header--left">
                        <img src="<?php echo RUTA_IMG?>logo/hp-logo.png">
                        <p>Incentivo para canales</p>
                    </div>
                    <div class="js-header--right">
                        <p>Login</p>
                        <p>Factura</p>
                    </div>
                </div>
                <div class="js-fondo">
                    <div class="js-logo"><img src="<?php echo RUTA_IMG?>logo/logo_polla.png"></div>
                </div>
                <div class="js-container p-0 js-container--negative">
                    <div class="js-user">
                        <p>Hola <?php echo $nombre ?></p>
                        <a href="">Salir</a>
                    </div>
                    <div class="js-score">
                        <div class="js-score__user">
                            <p>Monto acumulado facturas<span>$<?php echo $cantidad ?></span></p>
                        </div>
                        <div class="js-score__monto">
                            <p><span><?php echo $puntos ?></span> Puntos <span>x<?php echo $multi ?></span> Multiplicador activo</p>
                        </div>
                    </div>
                </div>
                <div class="js-link">
                    <a href="">Ingreso de Factura</a>
                    <a href="" class="active">Arma tu Score</a>
                </div>
                <div class="js-container js-container--title">
                    <h2>Arma tu Score</h2>
                </div>
                <div class="js-container p-t-5">
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a href="#Fase2" aria-controls="Fase2" role="tab" data-toggle="tab">Fase de Eliminatorias</a></li>
                        <li class="active"><a href="#Fase1" aria-controls="Fase1" role="tab" data-toggle="tab">Fase de Grupos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Fase1">
                            <?php echo $html ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="section">
            <div class="js-container">
                <p>@copy; Copyright 2018 HP Development Company, L.P.</p>
            </div>
        </footer>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
        </script>
    </body>
</html>