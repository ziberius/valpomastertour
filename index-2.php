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

        <script type="text/javascript" src="js/jquery.caroufredsel.js"></script>
        <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>

        <script>
            $(document).ready(function () {
                //	carouFredSel
                $('#slider3 .carousel.main ul').carouFredSel({
                    auto: {
                        timeoutDuration: 80000
                    },
                    responsive: true,
                    prev: '.prev3',
                    next: '.next3',
                    width: '100%',
                    scroll: {
                        items: 1,
                        duration: 1000,
                        easing: "easeOutExpo"
                    },
                    items: {
                        width: '350',
                        height: 'variable', //	optionally resize item-height			  
                        visible: {
                            min: 1,
                            max: 4
                        }
                    },
                    mousewheel: false,
                    swipe: {
                        onMouse: true,
                        onTouch: true
                    }
                });
                $(window).bind("resize", updateSizes_vat).bind("load", updateSizes_vat);
                function updateSizes_vat() {
                    $('#slider3 .carousel.main ul').trigger("updateSizes");
                }
                updateSizes_vat();

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
                    <div class="logo_wrapper log"><a href="index.php" class="logo"><img style="max-height:100px" src="images/logo_2.png" alt=""></a></div>
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
                                        <li ><a href="index.php">Inicio</a></li>
                                        <li class="active"><a href="index-2.php">Tours</a></li>
                                        <li><a href="index-6.php">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>

            <div id="slider_wrapper">
                <div class="slider_bot">
                    <div class="page_title">Tours</div>
                    <div class="breadcrumbs1">
                        <div class="breadcrumbs1_inner"><a href="index.php">Inicio</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Tours</div>	
                    </div>
                </div>
            </div>

            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="span12">

                            <h1>Nuestros Tours</h1>

                            <div class="row">
                                <div class="span3">
                                    <div class="thumb2">
                                        <div class="thumbnail clearfix">
                                            <figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
                                            <div class="caption">
                                                <h4>Cerro Alegre</h4>
                                                <p>
                                                    Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
                                                </p>
                                                <p>
                                                    <span class="precio">$29.900</span>
                                                </p>                                                
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                                <div class="span3">
                                    <div class="thumb2">
                                        <div class="thumbnail clearfix">
                                            <figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
                                            <div class="caption">
                                                <h4>Avenida Perú</h4>
                                                <p>
                                                    Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
                                                </p>			
                                                <p>
                                                   <span class="precio">$39.900</span>
                                                </p>                                                
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                                <div class="span3">
                                    <div class="thumb2">
                                        <div class="thumbnail clearfix">
                                            <figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
                                            <div class="caption">
                                                <h4>La Sebastiana</h4>
                                                <p>
                                                    Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
                                                </p>			
                                                <p>
                                                    <span class="precio">$34.900</span>
                                                </p>                                                
                                            </div>
                                        </div>
                                    </div>	
                                </div>	
<div class="span3">
                                    <div class="thumb2">
                                        <div class="thumbnail clearfix">
                                            <figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
                                            <div class="caption">
                                                <h4>Muelle Vergara</h4>
                                                <p>
                                                    Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
                                                </p>
                                                <p>
                                                    <span class="precio">$29.900</span>
                                                </p>                                                
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                                <div class="span3">
                                    <div class="thumb2">
                                        <div class="thumbnail clearfix">
                                            <figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
                                            <div class="caption">
                                                <h4>Paseo 21 de Mayo</h4>
                                                <p>
                                                    Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
                                                </p>
                                                <p>
                                                    <span class="precio">$19.900</span>
                                                </p>                                                
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                                <div class="span3">
                                    <div class="thumb2">
                                        <div class="thumbnail clearfix">
                                            <figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
                                            <div class="caption">
                                                <h4>Muelle Barón</h4>
                                                <p>
                                                    Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
                                                </p>
                                                <p>
                                                    <span class="precio">$29.900</span>
                                                </p>                                                
                                            </div>
                                        </div>
                                    </div>	
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