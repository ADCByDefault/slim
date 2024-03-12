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

$app->get('/alunni', "ClasseController:index");
$app->get("/alunni/{nome}", "ClasseController:show");

$app->get('/api/alunni', "ClasseAPIController:index");
$app->get("/api/alunni/{nome}", "ClasseAPIController:show");

$app->run();
