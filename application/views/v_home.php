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
                            <div class="title-fase">
                                <p>Fase de grupos</p>
                            </div>
                            <div class="js-partidos" id="1" data-date="14/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>14 jun. 2018 - 10:00 Hora Local Grupo A</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-1">
                                            <span class="mdl-radio__label">Rusia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options1" value="1" onclick="guardarScore('Rusia', '', 1)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/rusia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/arabia_saudita.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                            <input type="radio" id="option-2" class="mdl-radio__button" name="options1" value="1" onclick="guardarScore('Arabia Saudi', '', 1)">
                                            <span class="mdl-radio__label">Arabia Saudi</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                        <input type="radio" id="option-3" class="mdl-radio__button" name="options1" value="1" onclick="guardarScore('Rusia, Arabia Saudi', 'Empate', 1)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="2" data-date="15/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>15 jun. 2018 - 07:00 Hora Local Grupo A</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-4">
                                            <span class="mdl-radio__label">Egipto</span>
                                            <input type="radio" id="option-4" class="mdl-radio__button" name="options2" value="1" onclick="guardarScore('Egipto', '', 2)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/egipto.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/uruguay.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
                                            <input type="radio" id="option-5" class="mdl-radio__button" name="options2" value="1" onclick="guardarScore('Uruguay', '', 2)">
                                            <span class="mdl-radio__label">Uruguay</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-6">
                                        <input type="radio" id="option-6" class="mdl-radio__button" name="options2" value="1" onclick="guardarScore('Egipto, Uruguay', 'Empate', 2)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="3" data-date="15/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>15 jun. 2018 - 10:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-7">
                                            <span class="mdl-radio__label">Marruecos</span>
                                            <input type="radio" id="option-7" class="mdl-radio__button" name="options3" value="1" onclick="guardarScore('Marruecos', '', 3)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/marruecos.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/iran.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-8">
                                            <input type="radio" id="option-8" class="mdl-radio__button" name="options3" value="1" onclick="guardarScore('RI de Irán', '', 3)">
                                            <span class="mdl-radio__label">RI de Ir&aacute;n</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-9">
                                        <input type="radio" id="option-9" class="mdl-radio__button" name="options3" value="1" onclick="guardarScore('Marruecos, RI de Irán', 'Empate', 3)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="4" data-date="15/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>15 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-10">
                                            <span class="mdl-radio__label">Portugal</span>
                                            <input type="radio" id="option-10" class="mdl-radio__button" name="options4" value="1" onclick="guardarScore('Portugal', '', 4)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/portugal.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/españa.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-11">
                                            <input type="radio" id="option-11" class="mdl-radio__button" name="options4" value="1" onclick="guardarScore('España', '', 4)">
                                            <span class="mdl-radio__label">Espa&ntilde;a</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-12">
                                        <input type="radio" id="option-12" class="mdl-radio__button" name="options4" value="1" onclick="guardarScore('Portugal, España', 'Empate', 4)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="5" data-date="16/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>16 jun. 2018 - 05:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-13">
                                            <span class="mdl-radio__label">Francia</span>
                                            <input type="radio" id="option-13" class="mdl-radio__button" name="options5" value="1" onclick="guardarScore('Francia', '', 5)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/francia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/australia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-14">
                                            <input type="radio" id="option-14" class="mdl-radio__button" name="options5" value="1" onclick="guardarScore('Australia', '', 5)">
                                            <span class="mdl-radio__label">Australia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-15">
                                        <input type="radio" id="option-15" class="mdl-radio__button" name="options5" value="1" onclick="guardarScore('Rusia', 'Empate', 5)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="6" data-date="16/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>16 jun. 2018 - 08:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-16">
                                            <span class="mdl-radio__label">Argentina</span>
                                            <input type="radio" id="option-16" class="mdl-radio__button" name="options6" value="1" onclick="guardarScore('Argentina', '', 6)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/argentina.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/islandia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-17">
                                            <input type="radio" id="option-17" class="mdl-radio__button" name="options6" value="1" onclick="guardarScore('Islandia', '', 6)">
                                            <span class="mdl-radio__label">Islandia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-18">
                                        <input type="radio" id="option-18" class="mdl-radio__button" name="options6" value="1" onclick="guardarScore('Argentina, Islandia', 'Empate', 6)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="7" data-date="16/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>16 jun. 2018 - 11:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-19">
                                            <span class="mdl-radio__label">Per&uacute;</span>
                                            <input type="radio" id="option-19" class="mdl-radio__button" name="options7" value="1" onclick="guardarScore('Perú', '', 7)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/peru.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/dinamarca.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-20">
                                            <input type="radio" id="option-20" class="mdl-radio__button" name="options7" value="1" onclick="guardarScore('Dinamarca', '', 7)">
                                            <span class="mdl-radio__label">Dinamarca</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-21">
                                        <input type="radio" id="option-21" class="mdl-radio__button" name="options7" value="1" onclick="guardarScore('Perú, Dinamarca', 'Empate', 7)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="8" data-date="16/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>16 jun. 2018 - 14:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-22">
                                            <span class="mdl-radio__label">Croacia</span>
                                            <input type="radio" id="option-22" class="mdl-radio__button" name="options8" value="1" onclick="guardarScore('Croacia', '', 8)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/croacia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/nigeria.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-23">
                                            <input type="radio" id="option-23" class="mdl-radio__button" name="options8" value="1" onclick="guardarScore('Nigeria', '', 8)">
                                            <span class="mdl-radio__label">Nigeria</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-24">
                                        <input type="radio" id="option-24" class="mdl-radio__button" name="options8" value="1" onclick="guardarScore('Croacia, Nigeria', 'Empate', 8)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="9" data-date="17/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>17 jun. 2018 - 07:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-25">
                                            <span class="mdl-radio__label">Costa Rica</span>
                                            <input type="radio" id="option-25" class="mdl-radio__button" name="options9" value="1" onclick="guardarScore('Costa Rica', '', 9)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/costa_rica.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/serbia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-26">
                                            <input type="radio" id="option-26" class="mdl-radio__button" name="options9" value="1" onclick="guardarScore('Serbia', '', 9)">
                                            <span class="mdl-radio__label">Serbia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-27">
                                        <input type="radio" id="option-27" class="mdl-radio__button" name="options9" value="1" onclick="guardarScore('Costa Rica, Serbia', 'Empate', 9)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="10" data-date="17/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>17 jun. 2018 - 10:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-28">
                                            <span class="mdl-radio__label">Alemania</span>
                                            <input type="radio" id="option-28" class="mdl-radio__button" name="options10" value="1" onclick="guardarScore('Alemania', '', 10)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/alemania.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/mexico.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-29">
                                            <input type="radio" id="option-29" class="mdl-radio__button" name="options10" value="1" onclick="guardarScore('México', '', 10)">
                                            <span class="mdl-radio__label">M&eacute;xico</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-30"> <!-- bb -->
                                        <input type="radio" id="option-30" class="mdl-radio__button" name="options10" value="1" onclick="guardarScore('Alemania, México', 'Empate', 10)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="11" data-date="17/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>17 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-31">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-31" class="mdl-radio__button" name="options11" value="1" onclick="guardarScore('Brasil', '', 11)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-32">
                                            <input type="radio" id="option-32" class="mdl-radio__button" name="options11" value="1" onclick="guardarScore('Suiza', '', 11)">
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-33"> <!-- aa -->
                                        <input type="radio" id="option33" class="mdl-radio__button" name="options11" value="1" onclick="guardarScore('Brasil, Suiza', 'Empate', 11)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="12" data-date="18/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>18 jun. 2018 - 07:00 Hora Local Grupo F</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-34">
                                            <span class="mdl-radio__label">Suecia</span>
                                            <input type="radio" id="option-34" class="mdl-radio__button" name="options12" value="1" onclick="guardarScore('Suecia', '', 12)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/suecia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/republica_corea.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-35">
                                            <input type="radio" id="option-35" class="mdl-radio__button" name="options12" value="1" onclick="guardarScore('República de Corea', '', 12)">
                                            <span class="mdl-radio__label">Rep&uacute;blica de Corea</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-36">
                                        <input type="radio" id="option-36" class="mdl-radio__button" name="options12" value="1" onclick="guardarScore('Suecia, República de Corea', 'Empate', 12)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="13" data-date="18/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>18 jun. 2018 - 10:00 Hora Local Grupo G</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-37">
                                            <span class="mdl-radio__label">B&eacute;lgica</span>
                                            <input type="radio" id="option-37" class="mdl-radio__button" name="options13" value="1" onclick="guardarScore('Bélgica', '', 13)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/belgica.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/panama.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-38">
                                            <input type="radio" id="option-38" class="mdl-radio__button" name="options13" value="1" onclick="guardarScore('Panamá', '', 13)">
                                            <span class="mdl-radio__label">Panam&aacute;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-39">
                                        <input type="radio" id="option-39" class="mdl-radio__button" name="options13" value="1" onclick="guardarScore('Bélgica, Panamá', 'Empate', 13)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="14" data-date="18/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>18 jun. 2018 - 13:00 Hora Local Grupo G</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-40">
                                            <span class="mdl-radio__label">T&uacute;nez</span>
                                            <input type="radio" id="option-40" class="mdl-radio__button" name="options14" value="1" onclick="guardarScore('Tunez', '', 14)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/tunez.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/inglaterra.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-41">
                                            <input type="radio" id="option-41" class="mdl-radio__button" name="options14" value="1" onclick="guardarScore('Inglaterra', '', 14)">
                                            <span class="mdl-radio__label">Inglaterra</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-42">
                                        <input type="radio" id="option-42" class="mdl-radio__button" name="options14" value="1" onclick="guardarScore('Tunez, Inglaterra', 'Empate', 14)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="15" data-date="19/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>19 jun. 2018 - 07:00 Hora Local Grupo H</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-43">
                                            <span class="mdl-radio__label">Colombia</span>
                                            <input type="radio" id="option-43" class="mdl-radio__button" name="options15" value="1" onclick="guardarScore('Colombia', '', 15)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/colombia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/japon.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-44">
                                            <input type="radio" id="option-44" class="mdl-radio__button" name="options15" value="1" onclick="guardarScore('Japón', '', 15)">
                                            <span class="mdl-radio__label">Jap&oacute;n</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-45">
                                        <input type="radio" id="option-45" class="mdl-radio__button" name="options15" value="1" onclick="guardarScore('Colombia, Japón', 'Empate', 15)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="16" data-date="19/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>19 jun. 2018 - 10:00 Hora Local Grupo H</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-46">
                                            <span class="mdl-radio__label">Polonia</span>
                                            <input type="radio" id="option-46" class="mdl-radio__button" name="options16" value="1" onclick="guardarScore('Polonia', '', 16)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/polonia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/senegal.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-47">
                                            <input type="radio" id="option-47" class="mdl-radio__button" name="options16" value="1" onclick="guardarScore('Senegal', '', 16)">
                                            <span class="mdl-radio__label">Senegal</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-48">
                                        <input type="radio" id="option-48" class="mdl-radio__button" name="options16" value="1" onclick="guardarScore('Polonia, Senegal', 'Empate', 16)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="17" data-date="19/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>19 jun. 2018 - 13:00 Hora Local Grupo A</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-49">
                                            <span class="mdl-radio__label">Rusia</span>
                                            <input type="radio" id="option-49" class="mdl-radio__button" name="options17" value="1" onclick="guardarScore('Rusia', '', 17)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/rusia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/egipto.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-50">
                                            <input type="radio" id="option-50" class="mdl-radio__button" name="options17" value="1" onclick="guardarScore('Egipto', '', 17)">
                                            <span class="mdl-radio__label">Egipto</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-51">
                                        <input type="radio" id="option-51" class="mdl-radio__button" name="options17" value="1" onclick="guardarScore('Rusia, Egipto', 'Empate', 17)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="18" data-date="20/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>20 jun. 2018 - 07:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-52">
                                            <span class="mdl-radio__label">Portugal</span>
                                            <input type="radio" id="option-52" class="mdl-radio__button" name="options18" value="1" onclick="guardarScore('Portugal', '', 18)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/portugal.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/marruecos.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-53">
                                            <input type="radio" id="option-53" class="mdl-radio__button" name="options18" value="1" onclick="guardarScore('Marruecos', '', 18)">
                                            <span class="mdl-radio__label">Marruecos</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-54">
                                        <input type="radio" id="option-54" class="mdl-radio__button" name="options18" value="1" onclick="guardarScore('Portugal, Marruecos', 'Empate', 18)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="19" data-date="20/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>20 jun. 2018 - 10:00 Hora Local Grupo A</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-55">
                                            <span class="mdl-radio__label">Uruguay</span>
                                            <input type="radio" id="option-55" class="mdl-radio__button" name="options19" value="1" onclick="guardarScore('Uruguay', '', 19)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/uruguay.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/arabia_saudita.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-56">
                                            <input type="radio" id="option-56" class="mdl-radio__button" name="options19" value="1" onclick="guardarScore('Arabia Saudí', '', 19)">
                                            <span class="mdl-radio__label">Arabia Saudí</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-57">
                                        <input type="radio" id="option-57" class="mdl-radio__button" name="options19" value="1" onclick="guardarScore('Uruguay, Arabia Saudí', 'Empate', 19)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="20" data-date="20/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>20 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-58">
                                            <span class="mdl-radio__label">RI de Irán</span>
                                            <input type="radio" id="option-58" class="mdl-radio__button" name="options20" value="1" onclick="guardarScore('RI de Irán', '', 20)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/iran.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/españa.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-59">
                                            <input type="radio" id="option-59" class="mdl-radio__button" name="options20" value="1" onclick="guardarScore('España', '', 20)">
                                            <span class="mdl-radio__label">España</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-60">
                                        <input type="radio" id="option-60" class="mdl-radio__button" name="options20" value="1" onclick="guardarScore('RI de Irán, España', 'Empate', 20)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="21" data-date="21/06/2018">
                                <div class="js-partidos__fecha">
                                    <p>21 jun. 2018 - 07:00 Hora Local Grupo C</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-61">
                                            <span class="mdl-radio__label">Dinamarca</span>
                                            <input type="radio" id="option-61" class="mdl-radio__button" name="options21" value="1" onclick="guardarScore('Dinamarca', '', 21)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/dinamarca.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/australia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-62">
                                            <input type="radio" id="option-62" class="mdl-radio__button" name="options21" value="1" onclick="guardarScore('Australia', '', 21)">
                                            <span class="mdl-radio__label">Australia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-63">
                                        <input type="radio" id="option-63" class="mdl-radio__button" name="options21" value="1" onclick="guardarScore('Dinamarca, Australia', 'Empate', 21)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="22">
                                <div class="js-partidos__fecha">
                                    <p>21 jun. 2018 - 10:00 Hora Local Grupo C</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-64">
                                            <span class="mdl-radio__label">Francia</span>
                                            <input type="radio" id="option-64" class="mdl-radio__button" name="options22" value="1" onclick="guardarScore('Francia', '', 22)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/francia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/peru.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-65">
                                            <input type="radio" id="option-65" class="mdl-radio__button" name="options22" value="1" onclick="guardarScore('Perú', '', 22)">
                                            <span class="mdl-radio__label">Perú</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-66">
                                        <input type="radio" id="option-66" class="mdl-radio__button" name="options22" value="1" onclick="guardarScore('Francia, Perú', 'Empate', 22)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="23">
                                <div class="js-partidos__fecha">
                                    <p>21 jun. 2018 - 13:00 Hora Local Grupo D</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-67">
                                            <span class="mdl-radio__label">Argentina</span>
                                            <input type="radio" id="option-67" class="mdl-radio__button" name="options23" value="1" onclick="guardarScore('Perú', '', 23)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/argentina.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/croacia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-68">
                                            <input type="radio" id="option-68" class="mdl-radio__button" name="options23" value="1" onclick="guardarScore('Croacia', '', 23)">
                                            <span class="mdl-radio__label">Croacia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-69">
                                        <input type="radio" id="option-69" class="mdl-radio__button" name="options23" value="1" onclick="guardarScore('Perú, Croacia', 'Empate', 23)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="24">
                                <div class="js-partidos__fecha">
                                    <p>22 jun. 2018 - 07:00 Hora Local Grupo E</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-70">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-70" class="mdl-radio__button" name="options24" value="1" onclick="guardarScore('Brasil', '', 24)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/costa_rica.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-71">
                                            <input type="radio" id="option-71" class="mdl-radio__button" name="options24" value="1" onclick="guardarScore('Costa Rica', '', 24)">
                                            <span class="mdl-radio__label">Costa Rica</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-72">
                                        <input type="radio" id="option-72" class="mdl-radio__button" name="options24" value="1" onclick="guardarScore('Brasil, Costa Rica', 'Empate', 24)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="25">
                                <div class="js-partidos__fecha">
                                    <p>22 jun. 2018 - 10:00 Hora Local Grupo D</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-73">
                                            <span class="mdl-radio__label">Nigeria</span>
                                            <input type="radio" id="option-73" class="mdl-radio__button" name="options25" value="1" onclick="guardarScore('Nigeria Rica', '', 25)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/nigeria.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/islandia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-74">
                                            <input type="radio" id="option-74" class="mdl-radio__button" name="options25" value="1" onclick="guardarScore('Islandia', '', 25)">
                                            <span class="mdl-radio__label">Islandia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-75">
                                        <input type="radio" id="option-75" class="mdl-radio__button" name="options25" value="1" onclick="guardarScore('Nigeria, Islandia', 'Empate', 25)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="26">
                                <div class="js-partidos__fecha">
                                    <p>22 jun. 2018 - 13:00 Hora Local Grupo E</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-76">
                                            <span class="mdl-radio__label">Serbia</span>
                                            <input type="radio" id="option-76" class="mdl-radio__button" name="options26" value="1" onclick="guardarScore('Serbia', '', 26)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/serbia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-77">
                                            <input type="radio" id="option-77" class="mdl-radio__button" name="options26" value="1" onclick="guardarScore('Suiza', '', 26)">
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-78">
                                        <span class="mdl-radio__label">Empate</span>
                                        <input type="radio" id="option-78" class="mdl-radio__button" name="options26" value="1" onclick="guardarScore('Serbia, Suiza', '', 26)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="27">
                                <div class="js-partidos__fecha">
                                    <p>23 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-79">
                                            <span class="mdl-radio__label">Bélgica</span>
                                            <input type="radio" id="option-79" class="mdl-radio__button" name="options27" value="1" onclick="guardarScore('Bélgica', '', 27)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/belgica.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/tunez.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-80">
                                            <input type="radio" id="option-79" class="mdl-radio__button" name="options27" value="1" onclick="guardarScore('Túnez', '', 27)">
                                            <span class="mdl-radio__label">Túnez</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-81">
                                        <input type="radio" id="option-81" class="mdl-radio__button" name="options27" value="1" onclick="guardarScore('Bélgica, Túnez', 'Empate', 27)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="28">
                                <div class="js-partidos__fecha">
                                    <p>23 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-82">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-82" class="mdl-radio__button" name="options28" value="1" onclick="guardarScore('Brasil', '', 28)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-83">
                                            <input type="radio" id="option-83" class="mdl-radio__button" name="options28" value="1" onclick="guardarScore('Suiza', '', 28)">
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-84">
                                        <input type="radio" id="option-84" class="mdl-radio__button" name="options28" value="1" onclick="guardarScore('Brasil, Suiza', 'Empate', 28)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="29">
                                <div class="js-partidos__fecha">
                                    <p>23 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-85">
                                            <span class="mdl-radio__label">República de Corea</span>
                                            <input type="radio" id="option-85" class="mdl-radio__button" name="options29" value="1" onclick="guardarScore('República de Corea', '', 29)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/republica_corea.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/mexico.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-86">
                                            <input type="radio" id="option-86" class="mdl-radio__button" name="options29" value="1" onclick="guardarScore('México', '', 29)">
                                            <span class="mdl-radio__label">México</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-87">
                                        <input type="radio" id="option-87" class="mdl-radio__button" name="options29" value="1" onclick="guardarScore('República de Corea, México', 'Empate', 29)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="30">
                                <div class="js-partidos__fecha">
                                    <p>24 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-88">
                                            <span class="mdl-radio__label">Alemania</span>
                                            <input type="radio" id="option-88" class="mdl-radio__button" name="options30" value="1" onclick="guardarScore('Alemania', '', 30)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/alemania.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suecia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-89">
                                            <input type="radio" id="option-89" class="mdl-radio__button" name="options30" value="1" onclick="guardarScore('Suecia', '', 30)">
                                            <span class="mdl-radio__label">Suecia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-90">
                                        <input type="radio" id="option-90" class="mdl-radio__button" name="options30" value="1" onclick="guardarScore('Alemania, Suecia', 'Empate', 30)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="31">
                                <div class="js-partidos__fecha">
                                    <p>24 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-91">
                                            <span class="mdl-radio__label">Inglaterra</span>
                                            <input type="radio" id="option-91" class="mdl-radio__button" name="options31" value="1" onclick="guardarScore('Inglaterra', '', 31)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/inglaterra.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/panama.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-92">
                                            <input type="radio" id="option-92" class="mdl-radio__button" name="options31" value="1" onclick="guardarScore('Panamá', '', 31)">
                                            <span class="mdl-radio__label">Panamá</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-93">
                                        <input type="radio" id="option-93" class="mdl-radio__button" name="options31" value="1" onclick="guardarScore('Inglaterra, Panamá', 'Empate', 31)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="32">
                                <div class="js-partidos__fecha">
                                    <p>24 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-94">
                                            <span class="mdl-radio__label">Japón</span>
                                            <input type="radio" id="option-94" class="mdl-radio__button" name="options32" value="1" onclick="guardarScore('Japón', '', 32)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/japon.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/senegal.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-95">
                                            <input type="radio" id="option-95" class="mdl-radio__button" name="options32" value="1" onclick="guardarScore('Senegal', '', 32)">
                                            <span class="mdl-radio__label">Senegal</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-96">
                                        <input type="radio" id="option-96" class="mdl-radio__button" name="options32" value="1" onclick="guardarScore('Japón, Senegal', 'Empate', 32)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="33">
                                <div class="js-partidos__fecha">
                                    <p>25 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-97">
                                            <span class="mdl-radio__label">Uruguay</span>
                                            <input type="radio" id="option-97" class="mdl-radio__button" name="options33" value="1" onclick="guardarScore('Uruguay', '', 33)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/uruguay.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/rusia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-98">
                                            <input type="radio" id="option-98" class="mdl-radio__button" name="options33" value="1" onclick="guardarScore('Rusia', '', 33)">
                                            <span class="mdl-radio__label">Rusia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-99">
                                        <input type="radio" id="option-99" class="mdl-radio__button" name="options33" value="1" onclick="guardarScore('Uruguay, Rusia', 'Empate', 33)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <!-- <div class="js-partidos" id="34">
                                <div class="js-partidos__fecha">
                                    <p>25 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-100">
                                            <span class="mdl-radio__label">Uruguay</span>
                                            <input type="radio" id="option-100" class="mdl-radio__button" name="options34" value="1" onclick="guardarScore('Uruguay', '', 34)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/uruguay.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/rusia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-101">
                                            <input type="radio" id="option-101" class="mdl-radio__button" name="options34" value="1" onclick="guardarScore('Uruguay', '', 34)">
                                            <span class="mdl-radio__label">Rusia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-102">
                                        <input type="radio" id="option-102" class="mdl-radio__button" name="options34" value="1" onclick="guardarScore('Uruguay, Uruguay', 'Empate', 34)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div> -->
                            <div class="js-partidos" id="35">
                                <div class="js-partidos__fecha">
                                    <p>25 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-103">
                                            <span class="mdl-radio__label">España</span>
                                            <input type="radio" id="option-103" class="mdl-radio__button" name="options35" value="1" onclick="guardarScore('España', '', 35)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/españa.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/marruecos.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-104">
                                            <input type="radio" id="option-104" class="mdl-radio__button" name="options35" value="1" onclick="guardarScore('Marruecos', '', 35)">
                                            <span class="mdl-radio__label">Marruecos</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-105">
                                        <input type="radio" id="option-105" class="mdl-radio__button" name="options35" value="1" onclick="guardarScore('España, Marruecos', 'Empate', 35)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="36">
                                <div class="js-partidos__fecha">
                                    <p>25 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-106">
                                            <span class="mdl-radio__label">RI de Irán</span>
                                            <input type="radio" id="option-106" class="mdl-radio__button" name="options36" value="1" onclick="guardarScore('RI de Irán', '', 36)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/iran.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/portugal.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-107">
                                            <input type="radio" id="option-107" class="mdl-radio__button" name="options36" value="1" onclick="guardarScore('Portugal', '', 36)">
                                            <span class="mdl-radio__label">Portugal</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-108">
                                        <input type="radio" id="option-108" class="mdl-radio__button" name="options36" value="1" onclick="guardarScore('RI de Irán, Portugal', 'Empate', 36)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="37">
                                <div class="js-partidos__fecha">
                                    <p>26 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-109">
                                            <span class="mdl-radio__label">Dinamarca</span>
                                            <input type="radio" id="option-109" class="mdl-radio__button" name="options37" value="1" onclick="guardarScore('Dinamarca', '', 37)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/dinamarca.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/francia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-110">
                                            <input type="radio" id="option-110" class="mdl-radio__button" name="options37" value="1" onclick="guardarScore('Francia', '', 37)">
                                            <span class="mdl-radio__label">Francia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-111">
                                        <input type="radio" id="option-111" class="mdl-radio__button" name="options37" value="1" onclick="guardarScore('Dinamarca, Francia', 'Empate', 37)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="38">
                                <div class="js-partidos__fecha">
                                    <p>26 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-112">
                                            <span class="mdl-radio__label">Nigeria</span>
                                            <input type="radio" id="option-112" class="mdl-radio__button" name="options38" value="1" onclick="guardarScore('Nigeria', '', 38)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/nigeria.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/argentina.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-113">
                                            <input type="radio" id="option-113" class="mdl-radio__button" name="options38" value="1" onclick="guardarScore('Argentina', '', 38)">
                                            <span class="mdl-radio__label">Argentina</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-114">
                                        <input type="radio" id="option-114" class="mdl-radio__button" name="options38" value="1" onclick="guardarScore('Nigeria, Argentina', 'Empate', 38)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="39">
                                <div class="js-partidos__fecha">
                                    <p>26 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-115">
                                            <span class="mdl-radio__label">Islandia</span>
                                            <input type="radio" id="option-115" class="mdl-radio__button" name="options39" value="1" onclick="guardarScore('Islandia', '', 39)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/islandia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/croacia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-116">
                                            <input type="radio" id="option-116" class="mdl-radio__button" name="options39" value="1" onclick="guardarScore('Croacia', '', 39)">
                                            <span class="mdl-radio__label">Croacia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-117">
                                        <input type="radio" id="option-117" class="mdl-radio__button" name="options39" value="1" onclick="guardarScore('Islandia, Croacia', 'Empate', 39)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="40">
                                <div class="js-partidos__fecha">
                                    <p>26 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-118">
                                            <span class="mdl-radio__label">República de Corea</span>
                                            <input type="radio" id="option-118" class="mdl-radio__button" name="options40" value="1" onclick="guardarScore('República de Corea', '', 40)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/republica_corea.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/alemania.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-119">
                                            <input type="radio" id="option-119" class="mdl-radio__button" name="options40" value="1" onclick="guardarScore('Alemania', '', 40)">
                                            <span class="mdl-radio__label">Alemania</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-120">
                                        <input type="radio" id="option-120" class="mdl-radio__button" name="options40" value="1" onclick="guardarScore('República de Corea, Alemania', 'Empate', 40)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="41">
                                <div class="js-partidos__fecha">
                                    <p>27 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-121">
                                            <span class="mdl-radio__label">México</span>
                                            <input type="radio" id="option-121" class="mdl-radio__button" name="options41" value="1" onclick="guardarScore('México', '', 41)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/mexico.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suecia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-122">
                                            <input type="radio" id="option-122" class="mdl-radio__button" name="options41" value="1" onclick="guardarScore('Suecia', '', 41)">
                                            <span class="mdl-radio__label">Suecia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-123">
                                        <input type="radio" id="option-123" class="mdl-radio__button" name="options41" value="1" onclick="guardarScore('México, Suecia', 'Empate', 41)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="42">
                                <div class="js-partidos__fecha">
                                    <p>27 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-124">
                                            <span class="mdl-radio__label">Serbia</span>
                                            <input type="radio" id="option-124" class="mdl-radio__button" name="options42" value="1" onclick="guardarScore('Serbia', '', 42)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/Serbia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/Brasil.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-125">
                                            <input type="radio" id="option-125" class="mdl-radio__button" name="options42" value="1" onclick="guardarScore('Brasil', '', 42)">
                                            <span class="mdl-radio__label">Brasil</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-126">
                                        <input type="radio" id="option-126" class="mdl-radio__button" name="options42" value="1" onclick="guardarScore('Serbia, Brasil', 'Empate', 42)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="43">
                                <div class="js-partidos__fecha">
                                    <p>27 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-127">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-127" class="mdl-radio__button" name="options43" value="1" onclick="guardarScore('Brasil', '', 43)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-128">
                                            <input type="radio" id="option-128" class="mdl-radio__button" name="options43" value="1" onclick="guardarScore('Suiza', '', 43)">
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-129">
                                        <input type="radio" id="option-129" class="mdl-radio__button" name="options43" value="1" onclick="guardarScore('Brasil, Suiza', 'Empate', 43)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="44">
                                <div class="js-partidos__fecha">
                                    <p>27 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-130">
                                            <span class="mdl-radio__label">Suiza</span>
                                            <input type="radio" id="option-130" class="mdl-radio__button" name="options44" value="1" onclick="guardarScore('Suiza', '', 44)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/costa_rica.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-131">
                                            <input type="radio" id="option-131" class="mdl-radio__button" name="options44" value="1" onclick="guardarScore('Costa Rica', '', 44)">
                                            <span class="mdl-radio__label">Costa Rica</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-132">
                                        <input type="radio" id="option-132" class="mdl-radio__button" name="options44" value="1" onclick="guardarScore('Suiza, Costa Rica', 'Empate', 44)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="45">
                                <div class="js-partidos__fecha">
                                    <p>28 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-133">
                                            <span class="mdl-radio__label">Japón</span>
                                            <input type="radio" id="option-133" class="mdl-radio__button" name="options45" value="1" onclick="guardarScore('Japón', '', 45)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-134">
                                            <input type="radio" id="option-134" class="mdl-radio__button" name="options45" value="1" onclick="guardarScore('Polonia', '', 45)">
                                            <span class="mdl-radio__label">Polonia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-135">
                                        <input type="radio" id="option-135" class="mdl-radio__button" name="options45" value="1" onclick="guardarScore('Japón, Polonia', 'Empate', 45)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="46">
                                <div class="js-partidos__fecha">
                                    <p>28 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-136">
                                            <span class="mdl-radio__label">Senegal</span>
                                            <input type="radio" id="option-136" class="mdl-radio__button" name="options46" value="1" onclick="guardarScore('Senegal', '', 46)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/senegal.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/colombia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-137">
                                            <input type="radio" id="option-137" class="mdl-radio__button" name="options46" value="1" onclick="guardarScore('Colombia', '', 46)">
                                            <span class="mdl-radio__label">Colombia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-138">
                                        <input type="radio" id="option-138" class="mdl-radio__button" name="options46" value="1" onclick="guardarScore('Senegal, Colombia', 'Empate', 46)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="47">
                                <div class="js-partidos__fecha">
                                    <p>28 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-139">
                                            <span class="mdl-radio__label">Panamá</span>
                                            <input type="radio" id="option-139" class="mdl-radio__button" name="options47" value="1" onclick="guardarScore('Panamá', '', 47)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/panama.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-140">
                                            <input type="radio" id="option-140" class="mdl-radio__button" name="options47" value="1" onclick="guardarScore('Tunez', '', 47)">
                                            <span class="mdl-radio__label">Tunez</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-141">
                                        <input type="radio" id="option-141" class="mdl-radio__button" name="options47" value="1" onclick="guardarScore('Panamá, Tunez', 'Empate', 47)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="48">
                                <div class="js-partidos__fecha">
                                    <p>28 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-142">
                                            <span class="mdl-radio__label">Inglaterra</span>
                                            <input type="radio" id="option-142" class="mdl-radio__button" name="options48" value="1" onclick="guardarScore('Inglaterra', '', 48)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/inglaterra.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/belgica.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-143">
                                            <input type="radio" id="option-143" class="mdl-radio__button" name="options48" value="1" onclick="guardarScore('Bélgica', '', 48)">
                                            <span class="mdl-radio__label">Bélgica</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-144">
                                        <input type="radio" id="option-144" class="mdl-radio__button" name="options48" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 48)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Fase2">
                            <div class="title-fase">
                                <p>Octavos de final</p>
                            </div>
                            <div class="js-partidos" id="49">
                                <div class="js-partidos__fecha">
                                    <p>30 jun. 2018 - 09:00 Hora Kaza Arena</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-145">
                                            <span class="mdl-radio__label">1C</span>
                                            <input type="radio" id="option-145" class="mdl-radio__button" name="options49" value="1" onclick="guardarScore('Inglaterra', '', 49)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-146">
                                            <input type="radio" id="option-146" class="mdl-radio__button" name="options49" value="1" onclick="guardarScore('Bélgica', '', 49)">
                                            <span class="mdl-radio__label">2D</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-147">
                                        <input type="radio" id="option-147" class="mdl-radio__button" name="options49" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 49)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="50">
                                <div class="js-partidos__fecha">
                                    <p>30 jun. 2018 - 13:00 Hora Fisht Stadium</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-148">
                                            <span class="mdl-radio__label">1A</span>
                                            <input type="radio" id="option-148" class="mdl-radio__button" name="options50" value="1" onclick="guardarScore('Inglaterra', '', 50)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-149">
                                            <input type="radio" id="option-149" class="mdl-radio__button" name="options50" value="1" onclick="guardarScore('Bélgica', '', 50)">
                                            <span class="mdl-radio__label">2B</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-150">
                                        <input type="radio" id="option-150" class="mdl-radio__button" name="options50" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 50)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="51">
                                <div class="js-partidos__fecha">
                                    <p>01 jul. 2018 - 09:00 Hora Luzhniki Stadium</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-151">
                                            <span class="mdl-radio__label">1B</span>
                                            <input type="radio" id="option-151" class="mdl-radio__button" name="options51" value="1" onclick="guardarScore('Inglaterra', '', 51)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-152">
                                            <input type="radio" id="option-152" class="mdl-radio__button" name="options51" value="1" onclick="guardarScore('Bélgica', '', 51)">
                                            <span class="mdl-radio__label">2A</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-153">
                                        <input type="radio" id="option-153" class="mdl-radio__button" name="options51" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 51)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="52">
                                <div class="js-partidos__fecha">
                                    <p>01 jul. 2018 - 13:00 Hora Nizhny Novgorod Stadium</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-154">
                                            <span class="mdl-radio__label">1D</span>
                                            <input type="radio" id="option-154" class="mdl-radio__button" name="options52" value="1" onclick="guardarScore('Inglaterra', '', 52)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-155">
                                            <input type="radio" id="option-155" class="mdl-radio__button" name="options52" value="1" onclick="guardarScore('Bélgica', '', 52)">
                                            <span class="mdl-radio__label">2C</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-156">
                                        <input type="radio" id="option-156" class="mdl-radio__button" name="options52" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 52)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="53">
                                <div class="js-partidos__fecha">
                                    <p>02 jul. 2018 - 09:00 Hora Samara Arena</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-157">
                                            <span class="mdl-radio__label">1E</span>
                                            <input type="radio" id="option-157" class="mdl-radio__button" name="options53" value="1" onclick="guardarScore('Inglaterra', '', 53)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-158">
                                            <input type="radio" id="option-158" class="mdl-radio__button" name="options53" value="1" onclick="guardarScore('Bélgica', '', 53)">
                                            <span class="mdl-radio__label">2F</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-159">
                                        <input type="radio" id="option-159" class="mdl-radio__button" name="options53" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 53)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="54">
                                <div class="js-partidos__fecha">
                                    <p>02 jul. 2018 - 13:00 Hora Rostov Arena</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-160">
                                            <span class="mdl-radio__label">1G</span>
                                            <input type="radio" id="option-160" class="mdl-radio__button" name="options54" value="1" onclick="guardarScore('Inglaterra', '', 54)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-161">
                                            <input type="radio" id="option-161" class="mdl-radio__button" name="options54" value="1" onclick="guardarScore('Bélgica', '', 54)">
                                            <span class="mdl-radio__label">2H</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-162">
                                        <input type="radio" id="option-162" class="mdl-radio__button" name="options54" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 54)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="55">
                                <div class="js-partidos__fecha">
                                    <p>03 jul. 2018 - 09:00 Hora estadio de San Petersburgo</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-163">
                                            <span class="mdl-radio__label">1F</span>
                                            <input type="radio" id="option-163" class="mdl-radio__button" name="options55" value="1" onclick="guardarScore('Inglaterra', '', 55)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-164">
                                            <input type="radio" id="option-164" class="mdl-radio__button" name="options55" value="1" onclick="guardarScore('Bélgica', '', 55)">
                                            <span class="mdl-radio__label">2E</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-165">
                                        <input type="radio" id="option-165" class="mdl-radio__button" name="options55" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 55)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="56">
                                <div class="js-partidos__fecha">
                                    <p>03 jul. 2018 - 13:00 Hora Spartak Stadium</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-166">
                                            <span class="mdl-radio__label">1H</span>
                                            <input type="radio" id="option-166" class="mdl-radio__button" name="options56" value="1" onclick="guardarScore('Inglaterra', '', 56)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-167">
                                            <input type="radio" id="option-167" class="mdl-radio__button" name="options56" value="1" onclick="guardarScore('Bélgica', '', 56)">
                                            <span class="mdl-radio__label">2G</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-168">
                                        <input type="radio" id="option-168" class="mdl-radio__button" name="options56" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 56)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="title-fase">
                                <p>Cuartos de final</p>
                            </div>
                            <div class="js-partidos" id="57">
                                <div class="js-partidos__fecha">
                                    <p>06 jul. 2018 - 09:00 Hora Nizhny Novgorod Stadium</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-169">
                                            <span class="mdl-radio__label">W49</span>
                                            <input type="radio" id="option-169" class="mdl-radio__button" name="options57" value="1" onclick="guardarScore('Inglaterra', '', 57)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-170">
                                            <input type="radio" id="option-170" class="mdl-radio__button" name="options57" value="1" onclick="guardarScore('Bélgica', '', 57)">
                                            <span class="mdl-radio__label">W50</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-171">
                                        <input type="radio" id="option-171" class="mdl-radio__button" name="options57" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 57)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="58">
                                <div class="js-partidos__fecha">
                                    <p>06 jul. 2018 - 13:00 Hora Kazan Arena</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-172">
                                            <span class="mdl-radio__label">W53</span>
                                            <input type="radio" id="option-172" class="mdl-radio__button" name="options58" value="1" onclick="guardarScore('Inglaterra', '', 58)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-173">
                                            <input type="radio" id="option-173" class="mdl-radio__button" name="options58" value="1" onclick="guardarScore('Bélgica', '', 58)">
                                            <span class="mdl-radio__label">W54</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-174">
                                        <input type="radio" id="option-174" class="mdl-radio__button" name="options58" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 58)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="59">
                                <div class="js-partidos__fecha">
                                    <p>07 jul. 2018 - 09:00 Hora Samara Arena</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-175">
                                            <span class="mdl-radio__label">W55</span>
                                            <input type="radio" id="option-175" class="mdl-radio__button" name="options59" value="1" onclick="guardarScore('Inglaterra', '', 59)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-176">
                                            <input type="radio" id="option-176" class="mdl-radio__button" name="options59" value="1" onclick="guardarScore('Bélgica', '', 59)">
                                            <span class="mdl-radio__label">W56</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-177">
                                        <input type="radio" id="option-177" class="mdl-radio__button" name="options59" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 59)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="60">
                                <div class="js-partidos__fecha">
                                    <p>07 jul. 2018 - 13:00 Hora Fisht Stadium</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-178">
                                            <span class="mdl-radio__label">W51</span>
                                            <input type="radio" id="option-178" class="mdl-radio__button" name="options60" value="1" onclick="guardarScore('Inglaterra', '', 60)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-179">
                                            <input type="radio" id="option-179" class="mdl-radio__button" name="options60" value="1" onclick="guardarScore('Bélgica', '', 60)">
                                            <span class="mdl-radio__label">W52</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-180">
                                        <input type="radio" id="option-180" class="mdl-radio__button" name="options60" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 60)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="title-fase">
                                <p>Semifinales</p>
                            </div>
                            <div class="js-partidos" id="61">
                                <div class="js-partidos__fecha">
                                    <p>10 jul. 2018 - 13:00 Hora estadio de San Petersburgo</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-181">
                                            <span class="mdl-radio__label">W57</span>
                                            <input type="radio" id="option-181" class="mdl-radio__button" name="options61" value="1" onclick="guardarScore('Inglaterra', '', 61)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-182">
                                            <input type="radio" id="option-182" class="mdl-radio__button" name="options61" value="1" onclick="guardarScore('Bélgica', '', 61)">
                                            <span class="mdl-radio__label">W58</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-183">
                                        <input type="radio" id="option-183" class="mdl-radio__button" name="options61" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 61)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="js-partidos" id="62">
                                <div class="js-partidos__fecha">
                                    <p>11 jul. 2018 - 13:00 Hora Luzhniki Stadium</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-184">
                                            <span class="mdl-radio__label">W59</span>
                                            <input type="radio" id="option-184" class="mdl-radio__button" name="options62" value="1" onclick="guardarScore('Inglaterra', '', 62)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-185">
                                            <input type="radio" id="option-185" class="mdl-radio__button" name="options62" value="1" onclick="guardarScore('Bélgica', '', 62)">
                                            <span class="mdl-radio__label">W60</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-186">
                                        <input type="radio" id="option-186" class="mdl-radio__button" name="options62" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 62)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="title-fase">
                                <p>Partido por el tercer puesto</p>
                            </div>
                            <div class="js-partidos" id="63">
                                <div class="js-partidos__fecha">
                                    <p>14 jul. 2018 - 09:00 Hora estadio de San Petersburgo</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-187">
                                            <span class="mdl-radio__label">L61</span>
                                            <input type="radio" id="option-187" class="mdl-radio__button" name="options63" value="1" onclick="guardarScore('Inglaterra', '', 63)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-188">
                                            <input type="radio" id="option-188" class="mdl-radio__button" name="options63" value="1" onclick="guardarScore('Bélgica', '', 63)">
                                            <span class="mdl-radio__label">L62</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-189">
                                        <input type="radio" id="option-189" class="mdl-radio__button" name="options63" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 63)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
                            <div class="title-fase">
                                <p>Final</p>
                            </div>
                            <div class="js-partidos" id="64">
                                <div class="js-partidos__fecha">
                                    <p>15 jul. 2018 - 10:00 Hora Luzhniki Stadium</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-190">
                                            <span class="mdl-radio__label">W61</span>
                                            <input type="radio" id="option-190" class="mdl-radio__button" name="options64" value="1" onclick="guardarScore('Inglaterra', '', 64)">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/flag-blue.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/flag-green.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-191">
                                            <input type="radio" id="option-191" class="mdl-radio__button" name="options64" value="1" onclick="guardarScore('Bélgica', '', 64)">
                                            <span class="mdl-radio__label">W62</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-192">
                                        <input type="radio" id="option-192" class="mdl-radio__button" name="options64" value="1" onclick="guardarScore('Inglaterra, Bélgica', 'Empate', 64)">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>
                            </div>
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