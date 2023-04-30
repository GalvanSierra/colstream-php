<?php

class Usuario extends Controller
{

    function __construct()
    {
        parent::__construct();
//        $this->index();
//        $this->view->render('usuario/index');
    }

    function index()
    {
        $this->view->render('usuario/index');
    }

    function viewRegistrarUsuario()
    {
        $this->view->render('usuario/crear');
    }

    function registrarUsuario()
    {
        echo "Crear usuarios";
        $this->model->insert();
        require 'views/usuario/index.php';
//        header(URL_BASE."usuario/index");

    }
}