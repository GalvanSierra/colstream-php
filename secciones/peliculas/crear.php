<?php
include("../../dataBase.php");

if ($_POST) {
    $nombreP = $_POST["nombrePelicula"];
    $sinopsisP = $_POST["sinopsisPelicula"];
    $fechaE = $_POST["fechaEstreno"];
    $coverP = $_POST["coverPelicula"];
    $portadaP = $_FILES["portadaPelicula"]['name'];
    $URLP = $_POST["URLPelicula"];

    $sql = "insert into peliculas (id, titulo, sinopsis, release_date, cover, foto, url_video) value (null,:nombrePelicula,:sinopsisPelicula,:fechaEstreno,:coverPelicula,:portadaPelicula,:URLPelicula)";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":nombrePelicula", $nombreP);
    $sentencia->bindParam(":sinopsisPelicula", $sinopsisP);
    $sentencia->bindParam(":fechaEstreno", $fechaE);
    $sentencia->bindParam(":coverPelicula", $coverP);

    $fecha_foto = new DateTime();
    $nombreArchivo_foto = ($portadaP != '')?$fecha_foto->getTimestamp()."_".$_FILES["portadaPelicula"]['name']:"";
    $tmp_foto = $_FILES["portadaPelicula"]['tmp_name'];
    if($tmp_foto != ''){
        move_uploaded_file($tmp_foto,"./".$nombreArchivo_foto);
    }
    $sentencia->bindParam(":portadaPelicula", $nombreArchivo_foto);

    $sentencia->bindParam(":URLPelicula", $URLP);
    $sentencia->execute();

    header("Location:index.php");
}
?>
<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Peliculas
    </div>
    <div class="card-body">

        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="nombrePelicula" class="form-label">Titulo de la película:</label>
                <input type="text"
                       class="form-control" name="nombrePelicula" id="nombrePelicula" aria-describedby="helpId"
                       placeholder="Nombre de la película">
            </div>

            <div class="mb-3">
                <label for="sinopsisPelicula" class="form-label">Sinopsis de la película:</label>
                <input type="text"
                       class="form-control" name="sinopsisPelicula" id="sinopsisPelicula" aria-describedby="helpId"
                       placeholder="Sinopsis de la película:">
            </div>

            <div class="mb-3">
                <label for="fechaEstreno" class="form-label">Fecha de Estreno:</label>
                <input type="date" class="form-control" name="fechaEstreno" id="fechaEstreno"
                       aria-describedby="HelpId" placeholder="Fecha de estreno de la película">
            </div>

            <div class="mb-3">
                <label for="coverPelicula" class="form-label">Cover de la pelicula:</label>
                <input type="text"
                       class="form-control" name="coverPelicula" id="coverPelicula" aria-describedby="helpId"
                       placeholder="Cover de la pelicula">
            </div>

            <div class="mb-3">
                <label for="portadaPelicula" class="form-label">Portada de la pelicula:</label>
                <input type="file"
                       class="form-control" name="portadaPelicula" id="portadaPelicula" aria-describedby="helpId"
                       placeholder="Portada de la pelicula">
            </div>

            <div class="mb-3">
                <label for="URLPelicula" class="form-label">URL</label>
                <input type="url"
                       class="form-control" name="URLPelicula" id="URLPelicula" aria-describedby="helpId"
                       placeholder="URL Pelicula">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php include("../../templates/footer.php"); ?>
