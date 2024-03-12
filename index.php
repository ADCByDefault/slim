<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();


function autoload($classname)
{
    $paths = ['/', '/src/', '/controllers/'];

    foreach ($paths as $path) {
        $filename = __DIR__ . $path . $classname . ".php";
        if (file_exists($filename)) {
            require_once $filename;
            return;
        }
    }
}

spl_autoload_register("autoload");

$app->get('/', "ImpiantoController:index");
$app->get('/impianto', "ImpiantoController:index");
$app->get('/impianto/dispositivi', "ImpiantoController:dispositivi");
$app->get('/impianto/dispositivi/{identificativo}', "ImpiantoController:dispositivo");


$app->get('/impianto/rivelatori', "ImpiantoController:rivelatori");
$app->get('/impianto/rivelatori/{identificativo}', "ImpiantoController:rivelatore");
$app->get('/impianto/rivelatori/{identificativo}/misure', "ImpiantoController:misure");
$app->get('/impianto/rivelatori/{identificativo}/misure/maggiori/{valore}', "ImpiantoController:misureMaggiori");

$app->get('/impianto/rivelatoriPressione', "ImpiantoController:rivelatoriPressione");
$app->get('/impianto/rivelatoriUmidita', "ImpiantoController:rivelatoriUmidita");


$app->run();
