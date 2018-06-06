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
            <div class="js-fondo concurso">
                <div class="js-logo"><img src="<?php echo RUTA_IMG?>logo/logo-polla.png"></div>
                <div class="js-contenido--concurso">
                    <p>Registra tus facturas y ll&eacute;vate uno de estos famulosos premios</p>
                    <img src="<?php echo RUTA_IMG?>logo/premios.png">
                </div>
                <div class="js-contenido--ganadores">
                    <p>Tambi&eacute;n premiaremos a los <br><span>5 mejores hinchas</span> de cada categor&iacute;a</p>
                </div>
            </div>
        </div>
        <section id="facturas" class="section">
            <div class="js-container">
                <div class="js-facturas">
                    <h2>Registra aqu&iacute; tus facturas</h2>
                    <a href="http://www.marketinghp.net/microsite/La_Polla/login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Ingresar</a>
                </div>
            </div>
        </section>
        <section id="participantes" class="section">
            <div class="js-container">
                <div class="js-contenido--participantes">
                    <h2>Productos particpantes</h2>
                    <p>Todos los productos de las Categorías: Cómputo Comercial (Notebook, Pc),Impresión Comercial (Láser / Page Wide), Suministro Comercial (Tóner), Workstation, Monitores y Accesorios.</p>
                </div>
                <img src="<?php echo RUTA_IMG?>logo/productos.png">
            </div>
        </section>
        <section id="mecanica" class="section">
            <div class="js-container">
                <h2>Mec&aacute;nica</h2>
                <div class="js-mecanica">
                    <div class="js-mecanica--contenido">
                        <h2>Paso 01</h2>
                        <p>Del 04 al 15 de julio sube todas tus facturas en este portal</p>
                        <a href="" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Ingresar</a>
                        <div class="js-pelota">
                            <img src="<?php echo RUTA_IMG?>logo/pelota.png">
                        </div>
                    </div>
                    <div class="js-mecanica--contenido">
                        <h2>Paso 02</h2>
                        <p>Alcanza <span>$5000</span> en facturas sin IGV y elige los resultados de cada fase</p>
                        <div class="js-pelota">
                            <img src="<?php echo RUTA_IMG?>logo/pelota.png">
                        </div>
                    </div>
                    <div class="js-mecanica--contenido">
                        <h2>Paso 03</h2>
                        <p>Por cada $5000 adicionales, multiplicas tus puntos</p>
                        <div class="js-pelota">
                            <img src="<?php echo RUTA_IMG?>logo/pelota.png">
                        </div>
                    </div>
                    <div class="js-mecanica--contenido">
                        <h2>Paso 04</h2>
                        <p>Acumula 10 puntos por cada acierto</p>
                        <div class="js-pelota">
                            <img src="<?php echo RUTA_IMG?>logo/pelota.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="terminos" class="section">
            <div class="js-container">
                <h2>T&eacute;rminos y condiciones</h2>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Descargar pdf</button>
            </div>
        </section>  
        <footer class="section">
            <div class="js-container">
                <p>&copy; Copyright 2018 HP Development Company, L.P.</p>
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