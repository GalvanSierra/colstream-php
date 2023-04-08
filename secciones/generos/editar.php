<?php
include("../../dataBase.php");

if (isset($_GET['txtID'])) {
    $idGenero = $_GET['txtID'];

    $sql = "select * from generos where id = :id";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":id", $idGenero);
    $sentencia->execute();

    $genero = $sentencia->fetch(PDO::FETCH_LAZY);
    $nombre = $genero["nombre"];
}

if ($_POST) {
    print_r($_POST);
    $id = $_POST["txtID"];
    $nombreGenero = $_POST["nombreGenero"];

    $sql = "update generos set nombre = :nombre where id=:id";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":nombre", $nombreGenero);
    $sentencia->bindParam(":id", $id);
    $sentencia->execute();

    header("Location:index.php");
}
?>


<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Datos del Genero
    </div>

    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input type="text"
                       class="form-control" readonly name="txtID" id="txtID" value="<?= $idGenero ?>">
            </div>

            <div class="mb-3">
                <label for="nombreGenero" class="form-label">Nombre:</label>
                <input type="text"
                       class="form-control" name="nombreGenero" id="nombreGenero" aria-describedby="helpId"
                       value="<?= $nombre ?>">
            </div>


            <button type="submit" class="btn btn-success">Actaulzar Genero</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../templates/footer.php"); ?>
