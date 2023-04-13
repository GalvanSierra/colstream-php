<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "Hay sesión";
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';
}else if(isset($_POST['email']) && isset($_POST['password'])){
    //echo "Validación de Login";

    $userForm = $_POST['email'];
    $passForm = $_POST['password'];
    
    if($user->userExists($userForm, $passForm)){
        //echo "Usuario Validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'vistas/home.php';
    }else{
        //echo "Email o contraseña incorrecta";
        $errorLogin = "Email y/o contraseña incorrecta";
        include_once 'vistas/login.php';
    }

}else{
    include_once 'vistas/login.php';
}

?>

<?php include("./templates/footer.php"); ?>
