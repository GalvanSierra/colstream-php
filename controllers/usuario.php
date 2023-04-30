<?php

class Usuario extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->usuarios = [];
//        $this->index();
//        $this->view->render('usuario/index');
    }

    function render()
    {
        $usuarios = $this->model->getUsuarios();
        $this->view->usuarios = $usuarios;
        $this->view->render('usuario/index');
    }


    function renderRegistrarUsuario()
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

        $this->render();
//        require 'views/usuario/index.php';
//        header(URL_BASE."usuario/index");

    }
}