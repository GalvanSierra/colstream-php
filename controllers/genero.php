<?php
require 'models/usuarioBD.php';

class Genero extends Controller
{

    function __construct()
    {
        parent::__construct();
//        $this->view->usuarios = [];
    }

    function render()
    {
//        $usuarios = $this->model->getUsuarios();
//        $this->view->usuarios = $usuarios;
        $this->view->render('genero/index');
    }


    function renderRegistrarGenero()
    {
        $this->view->render('genero/crear');
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

//        var_dump($usuarioQuery);

//        $this->model->update($usuarioQuery);
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