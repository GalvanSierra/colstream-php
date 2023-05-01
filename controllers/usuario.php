<?php
require 'models/usuarioBD.php';

class Usuario extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->usuarios = [];
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
    }

    function editarUsuario($param = null)
    {
        $idUsuario = $param[0];
        $usuario = $this->model->getById($idUsuario);

        $this->view->usuario = $usuario;
        $this->view->render('usuario/editar');
    }

    function actualizarUsuario()
    {
        $id = $_POST["id"];
        $nickname = $_POST["nickname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $usuarioQuery = [
            'id' => $id,
            'nickname' => $nickname,
            'email' => $email,
            'password' => $password
        ];


        if ($this->model->update($usuarioQuery)) {
            $usuario = new UsuarioBD();
            $usuario->id = $id;
            $usuario->nickname = $nickname;
            $usuario->email = $email;
            $usuario->password = $password;

            $this->view->usuario = $usuario;
        }
        $this->view->render('usuario/editar');
    }

    function eliminarUsuario($param = null)
    {
        $idUsuario = $param[0];

        $this->model->delete($idUsuario);

        $this->render();
    }
}