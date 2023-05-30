<?php
require_once 'models/usuarioBD.php';

class Register extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('register/index');
    }

    function userExist()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $usuario = new UsuarioBD();
        $usuario->email = $email;
        $usuario->password = $password;

        if ($this->model->validarUsuario($usuario)) {
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
//            $controller->loadModel('main');
            $controller->render();
        } else {

            echo "La contraseña y/o email son incorrectos";
//            echo "<div class="alert alert-danger">mensaje</div>";
        }
    }

    function logout()
    {
        if(!isset($_SESSION['login']))
        {
            header('location'.URL_BASE);
        }else{
            unset($_SESSION['login']);
            session_destroy();
        }
    }
}