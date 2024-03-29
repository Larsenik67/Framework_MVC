<?php //FRONT CONTROLLER
require "vendor/autoload.php";
require "config.php";//CONSTANTES DE l'APPLICATION

session_start();

use App\Service\Router;

$token = Router::generateToken();

Router::CSRFProtection($token);

$response = Router::handleRequest();
if($response !== false):
    if(Router::isAjaxRequest()){
        echo $response;
        die;
    }
    $page = $response["view"];
else:
    $page = Router::NOT_FOUND;
    http_response_code(404);
endif;

ob_start();
include($page);
$content = ob_get_contents();
ob_end_clean();

require(VIEW_PATH."layout.php");

