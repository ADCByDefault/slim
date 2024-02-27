<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

class IndexController
{
    public function index(Request $request, Response $response, $args)
    {
        $response->getBody()->write("Ciao Mamma!");
        return $response;
    }
}