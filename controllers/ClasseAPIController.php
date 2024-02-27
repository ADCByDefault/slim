<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


class ClasseAPIController
{
    public function index(Request $request, Response $response, $args)
    {

        $c = new Classe("1A");
        $c->populate();
        
        $lista = $c->getAlunni();
        $str = json_encode($lista);  

        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }

    public function show(Request $request, Response $response, $args)
    {

        $c = new Classe("1A");
        $c->populate();

        $alunni = $c->getAlunno($args["nome"]);
        $str = json_encode($alunni);
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }
}