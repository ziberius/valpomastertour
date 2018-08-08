<html lang="en">
    <head>
        <title>Valparaiso Master Tour</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../../css/bootstrap-responsive.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/camera.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../../css/animate.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../../css/jquery-ui.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../../css/jquery-ui.structure.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../../css/jquery-ui.theme.css" type="text/css" media="screen" />

        <script type="text/javascript" src="../../js/jquery.js"></script>  
        <script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="../../js/superfish.js"></script>

        <script type="text/javascript" src="../../js/jquery.ui.totop.js"></script>

        <script type="text/javascript" src="../../js/camera.js"></script>
        <script type="text/javascript" src="../../js/jquery.mobile.customized.min.js"></script>

        <script type="text/javascript" src="../../js/jquery.caroufredsel.js"></script>
        <script type="text/javascript" src="../../js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="../../js/jquery-ui.js"></script>
        <script type="text/javascript" src="../../js/datepicker-es.js"></script>
        <script type="text/javascript" src="../../js/jquery.validate.js"></script>
        <script type="text/javascript" src="../../js/additional-methods.js"></script>
        <script type="text/javascript" src="../../js/messages_es.js"></script>

        <style>
		/* Loading animation keyframe and style */
		body {
			overflow: hidden;
		}

		.double-bounce1, .double-bounce2 {
			background-color: #45a1e8;
		}

		@-webkit-keyframes bounce {
			0%, 100% { -webkit-transform: scale(0.0) }
			50% { -webkit-transform: scale(1.0) }
		}

		@keyframes bounce {
			0%, 100% { 
				transform: scale(0.0);
				-webkit-transform: scale(0.0);
			} 50% { 
				transform: scale(1.0);
				-webkit-transform: scale(1.0);
			}
		}
	</style>
        <!--[if lt IE 8]>
                        <div style='text-align:center'><a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>
                <![endif]-->    

        <!--[if lt IE 9]>
          <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <link rel="stylesheet" href="../../css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>

    <body class="subpage">
        <div id="main">

        <div class="loading-animation" style="display: block;">
            <div class="loading-animation-spinner spinner" style="display: block;">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>  
<?php
/**
 * @category   Plugins/SDK
 * @author     Allware Ltda. (http://www.allware.cl)
 * @copyright  2018 Transbank S.A. (http://www.transbank.cl)
 * @date       May 2018
 * @license    GNU LGPL
 * @version    2.0.4
 * @link       http://transbankdevelopers.cl/
 */
require_once( '../libwebpay/webpay.php' );
require_once( 'certificates/cert-normal.php' );

/** Configuracion parametros de la clase Webpay */
$sample_baseurl = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

$configuration = new Configuration();
$configuration->setEnvironment($certificate['environment']);
$configuration->setCommerceCode($certificate['commerce_code']);
$configuration->setPrivateKey($certificate['private_key']);
$configuration->setPublicCert($certificate['public_cert']);
$configuration->setWebpayCert($certificate['webpay_cert']);

/** Creacion Objeto Webpay */
$webpay = new Webpay($configuration);

$action = isset($_GET["action"]) ? $_GET["action"] : 'init';

$post_array = false;

switch ($action) {

    default:

        $tx_step = "Init";

        /** Monto de la transacción */
        $amount = 9990;

        /** Orden de compra de la tienda */
        $buyOrder = rand();

        /** Código comercio de la tienda entregado por Transbank */
        $sessionId = uniqid();

        /** URL de retorno */
        $urlReturn = $sample_baseurl . "?action=getResult";

        /** URL Final */
        $urlFinal = $sample_baseurl . "?action=end";

        $request = array(
            "amount" => $amount,
            "buyOrder" => $buyOrder,
            "sessionId" => $sessionId,
            "urlReturn" => $urlReturn,
            "urlFinal" => $urlFinal,
        );

        /** Iniciamos Transaccion */
        $result = $webpay->getNormalTransaction()->initTransaction($amount, $buyOrder, $sessionId, $urlReturn, $urlFinal);

        /** Verificamos respuesta de inicio en webpay */
        if (!empty($result->token) && isset($result->token)) {
            $message = "Sesion iniciada con exito en Webpay";
            $token = $result->token;
            $next_page = $result->url;
        } else {
            $message = "webpay no disponible";
        }

        $button_name = "Continuar &raquo;";

        break;

    case "getResult":

        $tx_step = "Get Result";

        if (!isset($_POST["token_ws"]))
            break;

        /** Token de la transacción */
        $token = filter_input(INPUT_POST, 'token_ws');

        $request = array(
            "token" => filter_input(INPUT_POST, 'token_ws')
        );

        /** Rescatamos resultado y datos de la transaccion */
        $result = $webpay->getNormalTransaction()->getTransactionResult($token);
        echo '<script>window.localStorage.clear();</script>';
        /** Verificamos resultado  de transacción */
        if ($result->detailOutput->responseCode === 0) {

            /** propiedad de HTML5 (web storage), que permite almacenar datos en nuestro navegador web */
            echo '<script>localStorage.setItem("authorizationCode", ' . $result->detailOutput->authorizationCode . ')</script>';
            echo '<script>localStorage.setItem("amount", ' . $result->detailOutput->amount . ')</script>';
            echo '<script>localStorage.setItem("buyOrder", ' . $result->buyOrder . ')</script>';

            $message = "Pago ACEPTADO por webpay (se deben guardatos para mostrar voucher)";
            $next_page = $result->urlRedirection;
        } else {
            $message = "Pago RECHAZADO por webpay - " . $result->detailOutput->responseDescription;
            $next_page = '';
            $result = 'rechazado';
        }

        $button_name = "Continuar &raquo;";

        break;

    case "end":

        $post_array = true;

        $tx_step = "End";
        $request = "";
        $result = $_POST;

        $message = "Transacion Finalizada";
        $next_page = $sample_baseurl . "?action=nullify";
        $button_name = "Anular Transacci&oacute;n &raquo;";

        break;


    case "nullify":

        $tx_step = "nullify";

        $request = $_POST;

        /** Codigo de Comercio */
        $commercecode = null;

        /** Código de autorización de la transacción que se requiere anular */
        $authorizationCode = filter_input(INPUT_POST, 'authorizationCode');

        /** Monto autorizado de la transacción que se requiere anular */
        $amount = filter_input(INPUT_POST, 'amount');

        /** Orden de compra de la transacción que se requiere anular */
        $buyOrder = filter_input(INPUT_POST, 'buyOrder');

        /** Monto que se desea anular de la transacción */
        $nullifyAmount = 200;

        $request = array(
            "authorizationCode" => $authorizationCode, // Código de autorización
            "authorizedAmount" => $amount, // Monto autorizado
            "buyOrder" => $buyOrder, // Orden de compra
            "nullifyAmount" => $nullifyAmount, // idsession local
            "commercecode" => $configuration->getCommerceCode(), // idsession local
        );

        $result = $webpay->getNullifyTransaction()->nullify($authorizationCode, $amount, $buyOrder, $nullifyAmount, $commercecode);

        /** Verificamos resultado  de transacción */
        if (!isset($result->authorizationCode)) {
            $message = "webpay no disponible";
        } else {
            $message = "Transaci&oacute;n Finalizada";
        }

        $next_page = '';

        break;
}

if (!isset($request) || !isset($result) || !isset($message) || !isset($next_page)) {

    $result = "Ocurri&oacute; un error al procesar tu solicitud";
    echo "<div style = 'background-color:lightgrey;'><h3>result</h3>$result;</div><br/><br/>";
    echo "<a href='.'>&laquo; volver a index</a>";
    die;
}

/* Respuesta de Salida - Vista WEB */
?>

<?php if (strlen($next_page) && $post_array) { ?>

    <script>
        window.location.href = "https://www.valparaisomastertour.com/tours.php?pago=true";
    </script>

<?php } elseif (strlen($next_page)) { ?>

    <form style="display:none" id="formPagar" action="<?php echo $next_page; ?>" method="post">

        <input type="hidden" name="token_ws" value="<?php echo ($token); ?>">
        <input type="submit" value="<?php echo $button_name; ?>">
    </form>
    
    <script>$("#formPagar").submit();</script>

<?php } elseif ($result == 'rechazado') { ?> s
    <script>
        sessionStorage.setItem("pagoRechazado", '<?php  echo $message; ?>');
        window.location.href = "https://www.valparaisomastertour.com/tours.php?pago=true";
    </script>
<?php } ?>
            </div>
    </body>
</html>
