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

    function editarGenero($param = null)
    {
        $idGenero = $param[0];
        $genero = $this->model->getById($idGenero);

        $this->view->genero = $genero;
        $this->view->render('genero/editar');
    }

    function actualizarGenero()
    {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
//        $email = $_POST["email"];
//        $password = $_POST["password"];

        $generoQuery = [
            'id' => $id,
            'nombre' => $nombre,
//            'email' => $email,
//            'password' => $password
        ];

//        var_dump($usuarioQuery);

//        $this->model->update($usuarioQuery);
        if ($this->model->update($generoQuery)) {
            $genero = new generoBD();
            $genero->id = $id;
            $genero->nombre = $nombre;

            $this->view->genero = $genero;
        }
        $this->view->render('genero/editar');
    }

    function eliminarUsuario($param = null)
    {
        $idUsuario = $param[0];

        $this->model->delete($idUsuario);

        $this->render();
    }
}