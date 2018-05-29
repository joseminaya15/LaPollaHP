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
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_hp.png">
    	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>bentonsans.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <section id="principal">
            <div id="home" class="js-window">
                <div class="js-header">
                    <img src="<?php echo RUTA_IMG?>logo/logo_hp.png">
                </div>
                <div class="js-container js-container--responsive">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Fase de Grupos</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Fase de Eliminatorias</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>14 jun. 2018 - 10:00 Hora Local Grupo A</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Rusia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/rusia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/arabia_saudita.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Arabia Saudi</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>15 jun. 2018 - 07:00 Hora Local Grupo A</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Egipto</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/egipto.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/uruguay.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Uruguay</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>15 jun. 2018 - 10:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Marruecos</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/marruecos.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/iran.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">RI de Ir&aacute;n</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>15 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Portugal</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/portugal.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/españa.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Espa&ntilde;a</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>16 jun. 2018 - 05:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Francia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/francia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/australia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Australia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>16 jun. 2018 - 08:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Argentina</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/argentina.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/islandia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Islandia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>16 jun. 2018 - 11:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Per&uacute;</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/peru.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/dinamarca.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Dinamarca</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>16 jun. 2018 - 14:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Croacia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/croacia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/nigeria.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Nigeria</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>17 jun. 2018 - 07:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Costa Rica</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/costa_rica.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/serbia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Serbia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>17 jun. 2018 - 10:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Alemania</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/alemania.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/mexico.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">M&eacute;xico</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>17 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>18 jun. 2018 - 07:00 Hora Local Grupo F</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Suecia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/suecia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/republica_corea.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Rep&uacute;blica de Corea</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>18 jun. 2018 - 10:00 Hora Local Grupo G</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">B&eacute;lgica</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/belgica.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/panama.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Panam&aacute;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>18 jun. 2018 - 13:00 Hora Local Grupo G</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">T&uacute;nez</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/tunez.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/inglaterra.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Inglaterra</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>19 jun. 2018 - 07:00 Hora Local Grupo H</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Colombia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/colombia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/japon.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Jap&oacute;n</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>19 jun. 2018 - 10:00 Hora Local Grupo H</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Polonia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/polonia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/senegal.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Senegal</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>19 jun. 2018 - 13:00 Hora Local Grupo A</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Rusia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/rusia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/egipto.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Egipto</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>20 jun. 2018 - 07:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Portugal</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/portugal.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/marruecos.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Marruecos</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>20 jun. 2018 - 10:00 Hora Local Grupo A</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Uruguay</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/uruguay.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/arabia_saudita.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Arabia Saudí</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>20 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">RI de Irán</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/iran.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/españa.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">España</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>21 jun. 2018 - 07:00 Hora Local Grupo C</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Dinamarca</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/dinamarca.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/australia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Australia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>21 jun. 2018 - 10:00 Hora Local Grupo C</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Francia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/francia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/peru.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Perú</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>21 jun. 2018 - 13:00 Hora Local Grupo D</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Argentina</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/argentina.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/croacia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Croacia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>22 jun. 2018 - 07:00 Hora Local Grupo E</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/costa_rica.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Costa Rica</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>22 jun. 2018 - 10:00 Hora Local Grupo D</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Nigeria</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/nigeria.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/islandia.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Islandia</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>22 jun. 2018 - 13:00 Hora Local Grupo E</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Serbia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/serbia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>23 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>23 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>23 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>24 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>24 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>24 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>25 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>25 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>25 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>25 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>26 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>26 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>26 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>26 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>27 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>27 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>27 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>27 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>28 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>28 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>28 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                            <div class="js-partidos">
                                <div class="js-partidos__fecha">
                                    <p>28 jun. 2018 - 13:00 Hora Local Grupo B</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right" for="option-1">
                                            <span class="mdl-radio__label">Brasil</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/brasil.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/suiza.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                            <span class="mdl-radio__label">Suiza</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
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
                        <div role="tabpanel" class="tab-pane" id="profile">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

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