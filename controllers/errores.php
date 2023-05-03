<?php

class Erorres extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('errores/index');
//        $this->mensaje = "";

    }

}