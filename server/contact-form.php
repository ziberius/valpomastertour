<?php

$postdata = file_get_contents("php://input");

$request = json_decode($postdata);

header('Content-type: application/json');
$email = $request->correo;
$fecha = $request->fecha;
$solicitud_cliente = false;

$destino = "info@valparaisomastertour.com";

error_log(print_r($email, TRUE));
error_log(print_r($destino, TRUE));
error_log(print_r($fecha, TRUE));

$mensaje = 'Se ha realizado una reserva con los siguientes datos: ' . "\r\n" .
        ' Correo:' . $email . "\r\n" .
        'Fecha:' . $fecha . "\r\n";
$headers = 'From: ' . $email . "\r\n" .
        'Reply-To: sales@valparaisomastertour.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

$solicitud = mail($destino, "Reserva Realizada", $mensaje, $headers);


if ($solicitud) {
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: ' . $destino . "\r\n" .
            'Reply-To: ' . $destino . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $mensaje = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">' .
            '<html>' .
            '<head>' .
            '	<meta http-equiv="content-type" content="text/html; charset=windows-1252"/>' .
            '	<title></title>' .
            '	<meta name="generator" content="LibreOffice 6.0.4.2 (Windows)"/>' .
            '	<meta name="author" content="Usuario de Microsoft Office"/>' .
            '	<meta name="created" content="2018-06-27T21:28:00"/>' .
            '	<meta name="changed" content="00:00:00"/>' .
            '	<meta name="AppVersion" content="15.0000"/>' .
            '	<meta name="DocSecurity" content="0"/>' .
            '	<meta name="HyperlinksChanged" content="false"/>' .
            '	<meta name="LinksUpToDate" content="false"/>' .
            '	<meta name="ScaleCrop" content="false"/>' .
            '	<meta name="ShareDoc" content="false"/>' .
            '	<style type="text/css">' .
            '		@page { size: 21cm 29.7cm; margin-left: 3cm; margin-right: 3cm; margin-top: 2.5cm; margin-bottom: 2.5cm }' .
            '		p { margin-bottom: 0.25cm; direction: ltr; line-height: 115%; text-align: left; orphans: 2; widows: 2 }' .
            '		p.western { font-size: 10pt }' .
            '		p.cjk { font-size: 10pt }' .
            '		a:link { color: #0000ff }' .
            '	</style>' .
            '</head>' .
            '<body lang="es-ES-u-co-trad" link="#0000ff" bgcolor="#ffffff" dir="ltr">' .
            '<p class="western" style="margin-bottom: 0.32cm; line-height: 114%"><img src="https://www.valparaisomastertour.com/images/Documento1_html_e24a274f26dc91de.gif" name="Imagen 1" align="bottom" hspace="1" width="192" height="76" border="0"/>' .
            '</p>' .
            '<p class="western" style="margin-bottom: 0.32cm; line-height: 114%"><br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt">Hola ' .
            '!&nbsp;</font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt">Gracias ' .
            'por registrarte en VALPARAISO MASTER TOUR.</font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt">Estamos ' .
            'muy emocionados de que conozcas Valparaiso con nosotros. Has tomado ' .
            'un gran primer paso y estamos felices de brindarte nuestro servicio.</font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt">En ' .
            'breve nos contactaremos contigo.</font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt">Si ' .
            'requieres de cualquier ayuda para navegar nuestro portal, si tienes ' .
            'alguna duda o nos quieres hacer algunas sugerencias, por favor ' .
            'env&iacute;anos un correo electronico a&nbsp;</font></font><a href="mailto:info@valparaisomastertour.com"><font color="#e4af0a"><font size="3" style="font-size: 12pt"><u>info@valparaisomastertour.com</u></font></font></a></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt"><span lang="en">Gracias,</span></font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt"><span lang="en">EQUIPO ' .
            'VALPARAISO MASTER TOUR</span></font></font></p>' .
            '<p lang="en" class="western" style="margin-bottom: 0.21cm; line-height: 114%">' .
            '<br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '<p lang="en" class="western" style="margin-bottom: 0.21cm; line-height: 114%">' .
            '<br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '<p lang="en" class="western" style="margin-bottom: 0.21cm; line-height: 114%">' .
            '<br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt"><span lang="en">Hello ' .
            '!</span></font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt"><span lang="en">Thank ' .
            'you for registering in VALPARAISO MASTER TOUR.</span></font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt"><span lang="en">We ' .
            'are very excited to show you Valparaiso. You have taken a great first ' .
            'step and we are happy to offer you our service.</span></font></font></p>' .
            '<p lang="en" class="western" style="margin-bottom: 0.21cm; line-height: 114%">' .
            '<br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt"><span lang="en">We ' .
            'will contact you shortly.</span></font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt"><span lang="en">If ' .
            'you require any help to navigate our portal, if you have any ' .
            'questions or want to make some suggestions, please send us an email ' .
            'to&nbsp;&nbsp;</span></font></font><a href="mailto:info@valparaisomastertour.com"><font color="#e4af0a"><font size="3" style="font-size: 12pt"><span lang="en"><u>info@valparaisomastertour.com</u></span></font></font></a></p>' .
            '<p lang="en" class="western" style="margin-bottom: 0.21cm; line-height: 114%">' .
            '<br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt"><span lang="en">Thank ' .
            'you,</span></font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><font color="#454545"><font size="3" style="font-size: 12pt"><span lang="en">VALPARAISO ' .
            'MASTER TOUR TEAM</span></font></font></p>' .
            '<p class="western" style="margin-bottom: 0.21cm; line-height: 114%"><br/>' .
            '<br/>' .
            '' .
            '</p>' .
            '</body>' .
            '</html>';
            $solicitud_cliente = mail($email, "Reserva Realizada", $mensaje, $headers);
}


$res = $solicitud && $solicitud_cliente ? "Solicitud de envío exitosa." : "No se ha podido enviar el correo.";

$miArray = array("message" => $res, "success" => $solicitud);
echo(json_encode($miArray));

