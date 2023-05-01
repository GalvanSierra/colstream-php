<?php
include("../../dataBase.php");

if ($_POST) {
    $nombre = $_POST["nombreGenero"];

    $sql = "insert into generos (id, nombre) value (null,:nombre)";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":nombre", $nombre);
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
                <label for="nombreGenero" class="form-label">Nombre:</label>
                <input type="text"
                       class="form-control" name="nombreGenero" id="nombreGenero" aria-describedby="helpId"
                       placeholder="Nombre">
            </div>

            <button type="submit" class="btn btn-success">Agregar Genero</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../templates/footer.php"); ?>
