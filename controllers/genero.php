<?php
require 'models/usuarioBD.php';

class Genero extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->generos = [];
    }

    function render()
    {
        $generos = $this->model->getGeneros();
        $this->view->generos = $generos;
        $this->view->render('genero/index');
    }


    function renderRegistrarGenero()
    {
        $this->view->render('genero/crear');
    }

    function registrarGenero()
    {
//        echo "Crear usuarios";

        $nombre = $_POST["nombre"];

        $genero = [
            'nombre' => $nombre,
        ];

        $this->model->insert($genero);

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