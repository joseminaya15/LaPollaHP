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
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet"    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <div class="js-header">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/hp-logo.png">
                <p>Incentivo para canales</p>
            </div>
            <div class="js-header--right">
                <p>Bienvenido(a) Andrea</p>
                <a class="link-right" onclick="cerrarCesion()">Cerrar Sesi&oacute;n</a>
            </div>
        </div>
        <div class="js-fondo ranking">
            <div class="js-logo"><img src="<?php echo RUTA_IMG?>logo/logo-polla.png"></div>
        </div>
        <section id="ranking" class="section">
            <div class="js-container">
                <div class="js-ranking">
                    <div class="js-ranking--link js-flex">
                        <a href="http://www.marketinghp.net/microsite/La_Polla/admin/hppolla18_admin.aspx">Registrados</a>
                        <a class="link-middle" href="http://www.marketinghp.net/microsite/La_Polla/admin/hppolla18_facturas.aspx">Facturas</a>
                        <a href="http://www.marketinghp.net/microsite/La_Polla/admin/hppolla18_ranking.aspx">Ranking Facturas</a>
                    </div>
                    <h2>Ranking</h2>
                </div>
                <div class="js-participantes">
                    <p>N&uacute;mero de participantes: <?php echo $participantes ?></p>
                </div>
                <div class="table-responsive" style="border: none">
                    <table id="tableRanking" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Ciudad</th>
                                <th>Canal</th>
                                <th>email</th>
                                <th>Monto Total Facturado</th>
                                <th>Aciertos</th>
                                <th>Puntos</th>
                                <th>Multiplicadores</th>
                                <th>Total de puntos</th>
                                <th>Puesto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo $html ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <footer class="section js-fixed">
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
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
            $(document).ready(function() {
                $('#tableRanking').DataTable( {
                    searching : false,
                    dom: 'Bfrtip',
                    language:{
                        "emptyTable":     "Aucune donnée disponible",
                        "info" : "Mostrando _END_ de _TOTAL_ resultados"
                    },
                    lengthMenu: [
                        [ 10, 25, 50, -1 ],
                        [ '10 resultados', '25 resultados', '50 resultados']
                    ],
                    buttons: [{
                            text: 'Mostrar 10 resultados',
                            extend: 'pageLength'
                        },
                        {
                            extend:'excel',
                            text: 'Exportar a Excel'
                        }
                    ]
                });
            });
        </script>
    </body>
</html>