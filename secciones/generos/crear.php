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
            <!--
                        <div class="mb-3">
                        <label for="" class="form-label">Foto:</label>
                        <input type="file"
                            class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Foto">
                        </div>

                        <div class="mb-3">
                          <label for="" class="form-label">Fecha de Creacion:</label>
                          <input type="date" class="form-control" name="fechaCreacionG" id="fechaCreacionG" aria-describedby="HelpId" placeholder="Fecha de Creacion Genero">
                        </div> -->

            <button type="submit" class="btn btn-success">Agregar Genero</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../templates/footer.php"); ?>
