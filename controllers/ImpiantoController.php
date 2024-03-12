<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ImpiantoController
{
    public function index(Request $request, Response $response, $args)
    {
        $impianto = new Impianto("impianto sulla cisterna", 9001, 7002, [], []);
        $impianto->popula();
        $str = json_encode($impianto);
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }
    public function dispositivi(Request $request, Response $response, $args)
    {
        $impianto = new Impianto("impianto sulla cisterna", 9001, 7002, [], []);
        $impianto->popula();
        $str = json_encode($impianto->getIdDispositivi());
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }
    public function rivelatori(Request $request, Response $response, $args)
    {
        $impianto = new Impianto("impianto sulla cisterna", 9001, 7002, [], []);
        $impianto->popula();
        $str = json_encode($impianto->getIdRivelatori());
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }
    public function rivelatoriPressione(Request $request, Response $response, $args)
    {
        $impianto = new Impianto("impianto sulla cisterna", 9001, 7002, [], []);
        $impianto->popula();
        $str = json_encode($impianto->getIdRivelatoriPressione());
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }
    public function rivelatoriUmidita(Request $request, Response $response, $args)
    {
        $impianto = new Impianto("impianto sulla cisterna", 9001, 7002, [], []);
        $impianto->popula();
        $str = json_encode($impianto->getIdRivelatoriUmidita());
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }
}
