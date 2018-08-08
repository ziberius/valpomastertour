<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'include/head.php' ?>
    </head>

    <body class="subpage">
        <div id="main">

            <?php require_once 'include/header.php' ?>
            <div class="page_title_main">
                <div id="" class="page_title">Tour</div>
            </div>
            <div id="slider_wrapper">
                <div class="slider_bot">
                    <div class="breadcrumbs1">
                        <div class="breadcrumbs1_inner"><a href="index.php" id="bcInicio">Inicio</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;<span id=bcTour">Tour</span></div>	
                    </div>
                </div>
            </div>

            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="span12">

                            <h1 id="tituloTour">Nuestro Tour</h1>

                            <div class="row">

                                <div class="span6">
                                    <img src="images/tours/tour1.jpeg" alt="">
                                </div>
                                <div class="span6 caption">
                                    <h4>Colorful Valpo</h4>
                                    <p id="tourDesc1">
                                        Iniciaremos nuestro recorrido en el Puerto de Valparaíso donde conoceremos la importancia de este gran muelle en la historia de Chile. Continuaremos nuestro camino utilizando un medio de transporte único en el país y el Segundo de mayor antigüedad en sudamerica para llegar a una zona típica porteña. Caminaremos luego por las calles que marcaron la época de oro de Nuestro gran Valparaíso conociendo algunas historias y anécdotas únicas. Avanzaremos hasta llegar a uno de los funiculares mas visitados de nuestra ciudad el cual nos llevara a conocer los cerros ricos en arte callejero además de lo colorido de sus casas y miradores… Recorreremos sus callejones, escalas y conoceremos su rica historia para así descender y llegar a conocer nuestro gran monumento! 

                                    </p>
                                    <p id="tourDesc2">
                                        ¡Te invitamos a conocer el gran Valparaíso, Patrimonio de la Humanidad, y nuestra ciudad querida!
                                    </p>
                                    <p style="font-weight: bolder">Your local host will make you feel at home!!!</p>
                                    <p>
                                        <span id="cpcReservar" class="precio">Reservar: 65 USD</span>
                                    </p>                                                
                                </div>	                                
                            </div>
                        </div>

                    </div>	
                </div>
                <div id="modalReservar" class="modal hide fade">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3>Reservar</h3>
                    </div>
                    <div class="modal-body">
                        <form id="formValidar" class="form-horizontal">
                            <div class="control-group">
                                <label id="labelInputEmail" class="control-label" for="inputEmail">Email</label>
                                <div class="controls">
                                    <input required type="email" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <label id="labelInputFecha" class="control-label" for="inputPassword">Fecha</label>
                                <div class="controls">
                                    <input required type="text" name="fechaTour" id="inputFechaTour" placeholder="Fecha">
                                </div>
                            </div>
                            <div class="control-group">
                                <div style="text-align: center">
                                    <input id="btnPagarPaypal" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" alt="PayPal - The safer, easier way to pay online!">
                                    <input id="btnPagarWebpay" type="image" src="https://www.transbank.cl/public/img/botonwebpay.gif"/>
                                </div>
                            </div>
                        </form>
                        <form name="pagarFormPaypal" id="pagarFormPaypal" class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="4YDTAWQPE3GLC">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1" />
                        </form>
                        <form name="btnPago" id="pagarFormWebpay" method="post" action="https://webpay3g.transbank.cl/filtroUnificado/buttonService">
                            <input type="hidden" name="buttonId" value="c01990a7bf2c392c1426ba95b3fc18b0"/>
                        </form>                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btnCerrar" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                    </div>
                </div>                
                <div id="modalPagoConfirmado" class="modal hide fade">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3>Reserva</h3>
                    </div>
                    <div class="modal-body">
                        <p id="pagoText">
                            Ha realizado su reserva con correo <span id="emailReserva"></span> para la fecha <span id="fechaReserva"></span>. Gracias por eligir a Valparaiso Master Tours.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btnCerrar" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                    </div>
                </div>                
            </div>

            <?php require_once 'include/footer.php' ?>

        </div>
        <script type="text/javascript" src="js/tours.js"></script>
    </body>
</html>