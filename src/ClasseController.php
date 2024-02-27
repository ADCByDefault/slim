<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once "Alunno.php";
require_once "Classe.php";


class ClasseController
{
    public function index(Request $request, Response $response, $args)
    {

        $c = new Classe("1A");
        $c->populate();
        
        $lista = $c->getAlunni();
        if (empty($lista)) {
            $response->getBody()->write("Alunno non trovato");
            return $response;
        }     
        $str = implode("<br>", $lista);  

        $response->getBody()->write($str);
        return $response;
    }

    public function show(Request $request, Response $response, $args)
    {

        $c = new Classe("1A");
        $c->populate();

        $alunno = $c->getAlunno($args["nome"]);
        if (empty($alunno)) {
            $response->getBody()->write("Alunno non trovato");
            return $response;
        }     
        $str = implode("<br>", $alunno);   
        $response->getBody()->write($str);
        return $response;
    }
}