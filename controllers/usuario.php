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

        $nickname = $_POST["nickname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $usuario = [
            'nickname' => $nickname,
            'email' => $email,
            'password' => $password
        ];

        $this->model->insert($usuario);

        require 'views/usuario/index.php';
//        header(URL_BASE."usuario/index");

    }
}