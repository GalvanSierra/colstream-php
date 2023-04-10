<?php
include("../../dataBase.php");

if (isset($_GET['txtID'])) {
    $idUsuario = $_GET['txtID'];

    $sql = "select * from usuarios where id = :id";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":id", $idUsuario);
    $sentencia->execute();

    $usuario = $sentencia->fetch(PDO::FETCH_LAZY);

    $nickname = $usuario["nickname"];
    $email = $usuario["email"];
    $password = $usuario["passsword"];
}

if ($_POST) {
    $txtID = $_POST["txtID"];
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "update usuarios set nickname = :nickname, email = :email, passsword = :password where id=:id";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":nickname", $nickname);
    $sentencia->bindParam(":email", $email);
    $sentencia->bindParam(":password", $password);
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();

    header("Location:index.php");
}

?>

<?php include("../../templates/header.php"); ?>

<br>
<div class="card">
    <div class="card-header">
        Datos del Usuario
    </div>
    <div class="card-body">

        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input type="text"
                       class="form-control" readonly name="txtID" id="txtID" value="<?= $idUsuario ?>">
            </div>

            <div class="mb-3">
                <label for="nickname" class="form-label">Nombre del usuario - nickname:</label>
                <input type="text"
                value="<?= $nickname ?>"
                       class="form-control" name="nickname" id="nickname" aria-describedby="helpId"
                       placeholder="Nombre de usuario">
                       
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input type="email"
                value="<?= $email ?>"
                       class="form-control" name="email" id="email" aria-describedby="helpId"
                       placeholder="Correo">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password"
                value="<?= $password ?>"
                       class="form-control" name="password" id="password" aria-describedby="helpId"
                       placeholder="Contraseña">
            </div>

            <button type="submit" class="btn btn-success">Actualizar Usuario</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php include("../../templates/footer.php"); ?>
