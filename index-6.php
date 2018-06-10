<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Valparaiso Master Tour</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

        <script type="text/javascript" src="js/jquery.js"></script>  
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>

        <script type="text/javascript" src="js/jquery.ui.totop.js"></script>

        <script type="text/javascript" src="js/cform.js"></script>

        <script>
            $(document).ready(function () {
                // 

            }); //
            $(window).load(function () {
                //

            }); //
        </script>		
        <!--[if lt IE 8]>
                        <div style='text-align:center'><a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>
                <![endif]-->    

        <!--[if lt IE 9]>
          <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>

    <body class="subpage">
        <div id="main">

            <div class="top1 clearfix">
                <header>
                    <div class="logo_wrapper log"><a href="index.php" class="logo"><img style="max-height:100px" src="images/logo.png" alt=""></a></div>
                </header>
                <div class="top2 clearfix">
                    <div class="pull-right" style="margin-bottom:10px">
                        <button class="btn btn-small">Inglés</button>
                        <button class="btn btn-small">Español</button>
                    </div>
                    <div class="menu_wrapper clearfix">
                        <div class="navbar navbar_">
                            <div class="navbar-inner navbar-inner_">
                                <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu clearfix">
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="index-2.php">Tours</a></li>
                                        <li><a href="index-5.php">Servicio de Transporte</a></li>
                                        <li class="active"><a href="index-6.php">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>

            <div id="slider_wrapper">
                <div class="img"><img src="http://via.placeholder.com/1600x275" alt=""></div>
                <img src="images/grad2.png" alt="" class="grad2">
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

                            <h1>Nuestra Ubicación</h1>

                            <figure class="google_map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.15142732536!2d-71.60387378424618!3d-33.05247998458475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e0c1f10ec129%3A0x76c3f61b0c81bf2!2sAv.+Argentina+1170%2C+Valpara%C3%ADso%2C+Regi%C3%B3n+de+Valpara%C3%ADso!5e0!3m2!1sen!2scl!4v1527464149206" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </figure>

                            <h3>Valparaiso Master Tour</h3>

                            <p>
                                Avenida Argentina 1170<br>
                                Valparaiso<br>
                                Teléfono: +56997664121<br>
                                E-mail: <a href="#">correo@valpomastertour.com</a>
                            </p>


                            <h2>Formulario de Contacto</h2>

                            <div id="note"></div>
                            <div id="fields">
                                <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
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
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
                                </div>
                                <div class="txt2">
                                    <span>Alex Williams</span><br><a href="#">http://demolink.org</a>
                                </div>	
                            </div>

                            <div class="testimonial1">
                                <div class="txt1">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
                                </div>
                                <div class="txt2">
                                    <span>Jesica Smith</span><br><a href="#">http://demolink.org</a>
                                </div>	
                            </div>





                        </div>	
                    </div>	
                </div>	
            </div>



            <div class="bot1">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="bot1_title">Redes Sociales</div>
                            <div class="social_wrapper">
                                <ul class="social clearfix">
                                    <li><a href="#"><img class="icono-social" src="images/social_ic1.png"></a></li>
                                    <li><a href="#"><img class="icono-social" src="images/social_ic2.png"></a></li>
                                    <li><a href="#"><img class="icono-social" src="images/social_ic4.png"></a></li>	
                                </ul>
                            </div>
                        </div>
                    </div>	
                </div>	
            </div>


        </div>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>