<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

include "IndexController.php";
include "src/ClasseController.php";



$app->get('/', "IndexController:index");
$app->get('/alunni',"ClasseController:index");
$app->get("/alunni/{nome}","ClasseController:show");

$app->run();
