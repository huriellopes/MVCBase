<?php

namespace App;

use Gira\Init\RouteDefault;

class Route extends RouteDefault
{
    // Função responsavel pelas rotas
    protected function initRoutes()
    {
        $route['home'] = array(
            'route'         => '/',
            'controller'    => 'BaseController',
            'action'        => 'index'
        );

        $this->setRoutes($route);
    }
}
