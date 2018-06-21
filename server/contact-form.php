<?php
    $postdata = file_get_contents("php://input");
    
    $request = json_decode($postdata);
    
    header('Content-type: application/json');
    $email = $request->correo;
    $fecha = $request->fecha;
    
    $destino = "danilo.vasquez@gmail.com";
    
    error_log(print_r($email, TRUE));
    error_log(print_r($destino, TRUE));
    error_log(print_r($fecha, TRUE));

    $mensaje = 'Correo:' . $email . "\r\n" .
            'Fecha:' . $fecha . "\r\n" .
            "Reserva pagada";
    
    $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: sales@valparaisomastertour.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $solicitud = mail($destino, "Reserva", $mensaje, $headers);
    $res = $solicitud?"Solicitud de envío exitosa.":"No se ha podido enviar el correo.";

    $miArray = array("message"=>$res, "success"=>$solicitud);
    echo(json_encode($miArray));    
  
