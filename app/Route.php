<?php

namespace App;

use Base\Init\RouteDefault;

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
