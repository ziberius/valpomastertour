<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'include/head.php' ?>
    </head>

    <body class="subpage">
        <div id="main">

            <?php require_once 'include/header.php' ?>

            <div id="slider_wrapper">
                <div class="slider_bot">
                    <div class="page_title">Contacto</div>
                    <div class="breadcrumbs1">
                        <div class="breadcrumbs1_inner"><a href="index.php">Inicio</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Contacto</div>	
                    </div>
                </div>
            </div>

            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="span9">

                            <h1>Datos de Contacto</h1>

                            <h3>Valparaiso Master Tour</h3>

                            <p>
                                 Teléfono: +56930330787<br>
                                E-mail: <a href="#">info@valparaisomastertour.com</a>
                            </p>


                            <h2>Formulario de Contacto</h2>

                            <div id="note"></div>
                            <div id="fields">
                                <form id="ajax-contact-form" class="form-horizontal" >
                                    <div class="row">
                                        <div class="span3">
                                            <div class="control-group">
                                                <label class="control-label" for="inputName">Nombre Completo:</label>
                                                <div class="controls">				      
                                                    <input class="span3" type="text" id="inputName" name="name" value="Nombre Completo:" onBlur="if (this.value == '')
                                                                this.value = 'Nombre Completo:'" onFocus="if (this.value == 'Nombre Completo:')
                                                                            this.value = ''">
                                                </div>
                                            </div>				
                                        </div>	
                                        <div class="span3">
                                            <div class="control-group">
                                                <label class="control-label" for="inputEmail">Email:</label>
                                                <div class="controls">				      
                                                    <input class="span3" type="text" id="inputEmail" name="email" value="Tu email:" onBlur="if (this.value == '')
                                                                this.value = 'Tu email:'" onFocus="if (this.value == 'Tu email:')
                                                                            this.value = ''">
                                                </div>
                                            </div>
                                        </div>		
                                        <div class="span3">
                                            <div class="control-group">
                                                <label class="control-label" for="inputPhone">Teléfono:</label>
                                                <div class="controls">				      
                                                    <input class="span3" type="text" id="inputPhone" name="phone" value="Teléfono:" onBlur="if (this.value == '')
                                                                this.value = 'Teléfono:'" onFocus="if (this.value == 'Teléfono:')
                                                                            this.value = ''">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span9">
                                            <div class="control-group">
                                                <label class="control-label" for="inputMessage">Mensaje:</label>
                                                <div class="controls">				      				      
                                                    <textarea class="span9" id="inputMessage" name="content" onBlur="if (this.value == '')
                                                                this.value = 'Mensaje:'" 
                                                              onFocus="if (this.value == 'Mensaje:')
                                                                          this.value = ''">Mensaje:</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="submit">Enviar</button>
                                </form>
                            </div>

                        </div>
                        <div class="span3">

                            <h2>Testimonios</h2>

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
        <script type="text/javascript" src="js/cform.js"></script>
    </body>
</html>