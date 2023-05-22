<?php

class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $salida = new login;
        //$salida->userExist();
        $this->view->render('main/index');
    }
}