<?php

namespace Base\Controller;

abstract class Controller
{
    protected $view;
    private $action;

    public function __construct()
    {
        $this->view = new \stdClass;
    }

    protected function render($action, $layout = true)
    {
        $this->action = $action;

        if ($layout == true && file_exists("../App/Views/layout.php")) {
            include_once "../App/Views/layout.php";
        } else {
            $this->content();
        }
    }

    protected function content()
    {
        $current = get_class($this);
        $singleClassName = strtolower((str_replace("Controller", "", str_replace("App\\Controllers\\", "", $current))));
        include_once "../App/Views/".$singleClassName."/".$this->action.".php";
    }
}
