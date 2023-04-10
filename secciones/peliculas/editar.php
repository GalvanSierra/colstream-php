<?php
include("../../dataBase.php");

if (isset($_GET['txtID'])) {
    $idPelicula = $_GET['txtID'];

    $sql = "select * from peliculas where id = :id";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":id", $idPelicula);
    $sentencia->execute();

    $pelicula= $sentencia->fetch(PDO::FETCH_LAZY);

    $nombrePelicula = $pelicula["titulo"];
    $sinopsisPelicula = $pelicula["sinopsis"];
    $fechaEstreno = $pelicula["release_date"];
    $coverPelicula = $pelicula["cover"];
    $portadaPelicula = $pelicula["foto"];
    $URLPelicula = $pelicula["url_video"];
}

if ($_POST) {

    $idPelicula = $_POST['txtID'];
    $nombreP = $_POST["nombrePelicula"];
    $sinopsisP = $_POST["sinopsisPelicula"];
    $fechaE = $_POST["fechaEstreno"];
    $coverP = $_POST["coverPelicula"];
    $URLP = $_POST["URLPelicula"];

    $sql = "update peliculas set titulo = :nombrePelicula, sinopsis = :sinopsisPelicula, release_date = :fechaEstreno, cover = :coverPelicula, url_video = :URLPelicula where id = :id";

    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":nombrePelicula", $nombreP);
    $sentencia->bindParam(":sinopsisPelicula", $sinopsisP);
    $sentencia->bindParam(":fechaEstreno", $fechaE);
    $sentencia->bindParam(":coverPelicula", $coverP);
    $sentencia->bindParam(":id", $idPelicula);

    $sentencia->bindParam(":URLPelicula", $URLP);
    $sentencia->execute();

    $portadaP = $_FILES["portadaPelicula"]['name'];
    $fecha_foto = new DateTime();
    $nombreArchivo_foto = ($portadaP != '')?$fecha_foto->getTimestamp()."_".$_FILES["portadaPelicula"]['name']:"";
    $tmp_foto = $_FILES["portadaPelicula"]['tmp_name'];
    if($tmp_foto != ''){
        move_uploaded_file($tmp_foto,"./".$nombreArchivo_foto);

        $sql = "select foto from peliculas where id = :id";
        $sentencia = $conn->prepare($sql);
        $sentencia->bindParam(":id", $idPelicula);
        $sentencia->execute();
        $registro_foto = $sentencia->fetch(PDO::FETCH_LAZY);

    if(isset($registro_foto["foto"]) && $registro_foto["foto"] != ""){
        if(file_exists("./".$registro_foto["foto"])){
            unlink("./".$registro_foto["foto"]);
        }
    }

        $sql = "update peliculas set foto = :portadaPelicula where id = :id";
        $sentencia = $conn->prepare($sql);

        $sentencia->bindParam(":portadaPelicula", $nombreArchivo_foto);
        $sentencia->bindParam(":id", $idPelicula);
        $sentencia->execute();
    }

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
                <label for="txtID" class="form-label">ID:</label>
                <input type="text"
                       class="form-control" readonly name="txtID" id="txtID" value="<?= $idPelicula ?>">
            </div>

            <div class="mb-3">
                <label for="nombrePelicula" class="form-label">Titulo de la película:</label>
                <input type="text"
                value="<?= $nombrePelicula ?>"
                       class="form-control" name="nombrePelicula" id="nombrePelicula" aria-describedby="helpId"
                       placeholder="Nombre de la película">
            </div>

            <div class="mb-3">
                <label for="sinopsisPelicula" class="form-label">Sinopsis de la película:</label>
                <input type="text"
                value="<?= $sinopsisPelicula ?>"
                       class="form-control" name="sinopsisPelicula" id="sinopsisPelicula" aria-describedby="helpId"
                       placeholder="Sinopsis de la película:">
            </div>

            <div class="mb-3">
                <label for="fechaEstreno" class="form-label">Fecha de Estreno:</label>
                <input type="date" class="form-control" name="fechaEstreno" id="fechaEstreno"
                value="<?= $fechaEstreno ?>"
                       aria-describedby="HelpId" placeholder="Fecha de estreno de la película">
            </div>

            <div class="mb-3">
                <label for="coverPelicula" class="form-label">Cover de la pelicula:</label>
                <input type="text"
                value="<?= $coverPelicula ?>"
                       class="form-control" name="coverPelicula" id="coverPelicula" aria-describedby="helpId"
                       placeholder="Cover de la pelicula">
            </div>

            <div class="mb-3">
                <label for="portadaPelicula" class="form-label">Portada de la pelicula:</label>
                <br/>
                <img width = "100" src="<?= $portadaPelicula ?>" class="rounded" alt="" />
                <br/><br/>
                <input type="file"
                       class="form-control" name="portadaPelicula" id="portadaPelicula" aria-describedby="helpId"
                       placeholder="Portada de la pelicula">
            </div>

            <div class="mb-3">
                <label for="URLPelicula" class="form-label">URL</label>
                <input type="url"
                value="<?= $URLPelicula ?>"
                       class="form-control" name="URLPelicula" id="URLPelicula" aria-describedby="helpId"
                       placeholder="URL Pelicula">
            </div>

            <button type="submit" class="btn btn-success">Actualizar Pelicula</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php include("../../templates/footer.php"); ?>
