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

    function validarClave()
    {
        $password = $_POST["password"];
        if (!preg_match('`[a-z]`',$password))
        {
            echo "La clave debe tener al menos una letra minúscula.";
            return false;
        }
        if (!preg_match('`[A-Z]`',$password))
        {
            echo "La clave debe tener al menos una letra mayúscula.";
            return false;
        }
        if (!preg_match('`[0-9]`',$password))
        {
            echo "La clave debe tener al menos un caracter numérico.";
            return false;
        }
        if (!preg_match('`[;:\.,!¡\?¿@#\$%\^&\-_+=\(\)\[\]\{\}]`',$password))
        {
            echo "La clave debe tener al menos un caracter especial.";
            return false;
        }else{
            return true;
        };
    }
    function registrarUsuario()
    {
        $error_encontrado="";

        $nickname = $_POST["nickname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        if ($this->validarClave())
        {
            $usuario = [
                'nickname' => $nickname,
                'email' => $email,
                'password' => $password
            ];

            $this->model->insert($usuario);
            $this->render();
        }else{
            $this->view->render('usuario/crear');
        }
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