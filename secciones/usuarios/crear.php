<?php
include("../../dataBase.php");

if ($_POST) {
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "insert into usuarios (id, nickname, email, passsword) value (null,:nickname,:email,:password)";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":nickname", $nickname);
    $sentencia->bindParam(":email", $email);
    $sentencia->bindParam(":password", $password);
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
                <label for="nickname" class="form-label">Nombre del usuario - nickname:</label>
                <input type="text"
                       class="form-control" name="nickname" id="nickname" aria-describedby="helpId"
                       placeholder="Nombre de usuario">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input type="email"
                       class="form-control" name="email" id="email" aria-describedby="helpId"
                       placeholder="Correo">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password"
                       class="form-control" name="password" id="password" aria-describedby="helpId"
                       placeholder="Contraseña">
            </div>

            <button type="submit" class="btn btn-success">Agregar registro</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php include("../../templates/footer.php"); ?>
