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
                        <a href="http://test.brainblue.com/LaPolla/Concurso">Home</a>
                        <a href="http://www.marketinghp.net/microsite/La_Polla/factura" class="link-middle">Cargar Factura</a>
                        <a onclick="cerrarCesion()">Cerrar Sesi&oacute;n</a>
                    </div>
                </div>
                <div class="js-fondo">
                    <div class="js-logo"><img src="<?php echo RUTA_IMG?>logo/logo-polla.png"></div>
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
                    <a href="http://www.marketinghp.net/microsite/La_Polla/factura">Ingreso de Factura</a>
                    <a href="" class="active">Arma tu Score</a>
                </div>
                <div class="js-container js-container--title">
                    <h2>Arma tu Score</h2>
                </div>
                <div class="js-container p-t-5">
                    <ul class="nav nav-tabs" role="tablist">
                        <li <?php echo $bloqueo ?>><a href="#Fase2" aria-controls="Fase2" role="tab" data-toggle="tab" onclick="agregarDatosElim()">Fase de Eliminatorias</a></li>
                        <li class="active"><a href="#Fase1" aria-controls="Fase1" role="tab" data-toggle="tab">Fase de Grupos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Fase1">
                            <div class="title-fase">
                                <p>Fase de grupos</p>
                            </div>
                            <?php echo $html ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Fase2">
                            <div class="title-fase">
                                <p>Octavos de final</p>
                            </div>
                            <!-- <div class="js-partidos" id="49">
                                <div class="js-partidos__fecha">
                                    <p>30 jun. 2018 - 09:00 Hora Kaza Arena</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-145">
                                            <span class="mdl-radio__label">1C</span>
                                            <input type="radio" id="option-145" class="mdl-radio__button" name="options49" checked value="1" onclick="guardarScore('Inglaterra', '', 49)">
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="section">
            <div class="js-container">
                <p>&copy; Copyright 2018 HP Development Company, L.P.</p>
            </div>
        </footer>
        <div class="modal fade" id="ModalConfirmar" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card" >
                        <div class="mdl-card__title p-b-0">
                            <h2>¿Est&aacute;s seguro de marcar esta opci&oacute;n&#63;</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            <h2></h2>
                            <small>Recuerda: Al confirmar no podr&aacute;s modificar tu elecci&oacute;n.</small>
                        </div>
                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="confirmarPartido();guardarScore()">Confirmar</button>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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