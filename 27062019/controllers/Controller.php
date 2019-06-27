<?php

class Controller
{
    function __construct()
    {
        
    }

    // function render($viewName, $viewData = [])
    // {
    //     $this->view->render->($viewName, $viewData);
    // }

    function redirect($location)
    {
        header("Location: " . $location);
    }

    function classNameNP()
    {
        return strtolower(preg_replace('/Controller$/', '', get_class($this)));
    }

    function currentActionNameNP()
    {
        return strtolower(preg_replace('/^action/', '', debug_backtrace()[1]['function']));
    }
} 