<?php
include("../../dataBase.php");

if (isset($_GET['txtID'])) {
    $idPelicula = $_GET['txtID'];

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


    $sql = "delete from peliculas where id = :id";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":id", $idPelicula);
    $sentencia->execute();

    header("Location:index.php");
}

$sql = "select * from peliculas";
$sentencia = $conn->prepare($sql);
$sentencia->execute();
$listaPeliculas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include("../../templates/header.php"); ?>

<br/>
<h3> Peliculas </h3>
<br/>

<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary"
           href="crear.php" role="button">Agregar Película
        </a>

    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Sipnosis</th>
                    <th scope="col">Fecha de Estreno</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Foto</th>
                    <th scope="col">URL</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($listaPeliculas as $pelicula) { ?>
                    <tr class="">
                        <td scope="row"><?= $pelicula['id'] ?></td>
                        <td><?= $pelicula['titulo'] ?></td>
                        <td><?= $pelicula['sinopsis'] ?></td>
                        <td><?= $pelicula['release_date'] ?></td>
                        <td><?= $pelicula['cover'] ?></td>
                        <td>
                            <img width = "50" src="<?= $pelicula['foto'] ?>" class="img-fluid rounded" alt="" />
                        </td>
                        <td><?= $pelicula['url_video'] ?></td>
                        <td>
                            <a class="btn btn-info" href="./editar.php?txtID=<?= $pelicula['id'] ?>"
                               role="button">Editar</a>
                            <a class="btn btn-danger" href="./index.php?txtID= <?= $pelicula['id'] ?>"
                               role="button">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>

<?php include("../../templates/footer.php"); ?>
