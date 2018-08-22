<?php

namespace App\Controllers;

use Base\Controller\Controller;
use Base\DI\Container;

class BaseController extends Controller
{
    public function index()
    {
        $teste = Container::getModel("BaseModel");
        $this->view->teste = $teste->lista();
        $this->render("index");
        //echo 'Deu Certo!';
    }
}
