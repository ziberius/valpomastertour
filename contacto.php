<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'include/head.php' ?>
    </head>

    <body class="subpage">
        <div id="main">

            <?php require_once 'include/header.php' ?>
            <div class="page_title_main">
                <div id="pageTitleDiv" class="page_title">Contacto</div>                
            </div>
            <div id="slider_wrapper">
                <div class="slider_bot">
                    <div class="breadcrumbs1">
                        <div class="breadcrumbs1_inner"><a id="bcInicio" href="index.php">Inicio</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;<span id="bcContacto">Contacto</span></div>	
                    </div>
                </div>
            </div>

            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="span9">

                            <h1 id="h1DatosContacto">Datos de Contacto</h1>

                            <h3>Valparaiso Master Tour</h3>

                            <p>
                                <span id="spanTelefono">Teléfono</span>: +56930330787<br>
                                E-mail: <a href="#">info@valparaisomastertour.com</a>
                            </p>


                            <h2 id="h2FormularioContacto">Formulario de Contacto</h2>

                            <div id="note"></div>
                            <div id="fields">
                                <form id="ajax-contact-form" class="form-horizontal" >
                                    <div class="row">
                                        <div class="col-3 span3 input-effect">
                                            <input class="effect-19" name="inputNombre" id="inputNombre" type="text" placeholder="" required>
                                            <label class="textPlaceholder" id="lbNombreCompleto">Nombre Completo:</label>
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>   
                                        <div class="col-3 span3 input-effect">
                                            <input class="effect-19" name="inputEmail" id="inputEmail" type="email" placeholder="" required>
                                            <label class="textPlaceholder" id="lbTuEmail">Tu email:</label>
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div> 
                                        <div class="col-3 span3 input-effect">
                                            <input class="effect-19" name="inputTelefono" id="inputTelefono" type="text" placeholder="">
                                            <label class="textPlaceholder" id="lbTelefono">Teléfono:</label>
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>                                         
                                    </div>
                                    <div class="row">
                                        <div class="span9 col-12 input-effect">
                                            <textarea class="effect-19" name="inputMessage" required id="inputMessage" ></textarea>
                                            <label class="textPlaceholder" id="lbMensaje">Mensaje:</label> 
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                    </div>

                                    <button type="submit" class="submit" id="btnEnviar">Enviar</button>
                                </form>
                            </div>

                        </div>
                        <div class="span3">

                            <h2 id="h2Testimonios">Testimonios</h2>

                            <div class="testimonial1">
                                <div class="txt1">
                                    Le personnel nous a précisé  les différents types d'activités afin d'organiser au mieux nos excursions, l'organisation rapide et facile, notre guide était polyglotte, charmant et avec connaissance de son sujet. Nous avons passé un très bon jour.	
                                </div>
                                <div class="txt2">
                                    <span>@Thirstypooch </span>
                                </div>	
                            </div>

                            <div class="testimonial1">
                                <div class="txt1">
                                    Everybody had a great time in Valparaiso, our guy was very friendly and informed, they outperformed to meet  expectations, had the most amazing time.
                                </div>
                                <div class="txt2">
                                    <span>@Luminariazh</span>
                                </div>	
                            </div>

                            <div class="testimonial1">
                                <div class="txt1">
                                    Incroyable agence d'excursions, en vacances au Chili, nous avons exploré los abords de notre hôtel pour voir quoi faire en Valparaiso et nous avons trouvé l'agence Master Tour, où Osvaldo nous a bien expliqué toutes les excursions, très gentille.
                                    Les excursions sont moins chères et à mon avis plus professionnelles.
                                </div>
                                <div class="txt2">
                                    <span>@Math_Blt1</span>
                                </div>	
                            </div>                            
                            <div class="testimonial1">
                                <div class="txt1">
                                    Fue un paseo extraordinario conoci y aprendi mucho de los portenos en Valparaiso, los guías nos atendieron excelente , lo recomiendo! 
                                </div>
                                <div class="txt2">
                                    <span>@lucyzamora28</span>
                                </div>	
                            </div>                            
                        </div>	
                    </div>	
                </div>	
            </div>
            <?php require_once 'include/footer.php' ?>


        </div>
        <script type="text/javascript" src="js/contacto.js"></script>
    </body>
</html>