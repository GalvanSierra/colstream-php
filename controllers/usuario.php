<?php

class Usuario extends  Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->render('usuario/index');
    }

//    function index()
//    {
//        echo  "index de usuarios";
//    }
}