<?php
include("../../dataBase.php");

if (isset($_GET['txtID'])) {
    $idGenero = $_GET['txtID'];

    $sql = "delete from generos where id = :id";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":id", $idGenero);
    $sentencia->execute();

    header("Location:index.php");
}

$sql = "select * from generos";
$sentencia = $conn->prepare($sql);
$sentencia->execute();
$listaGeneros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include("../../templates/header.php"); ?>

<br/>
<h3> Generos </h3>
<br/>
<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary"
           href="crear.php" role="button">Agregar Genero
        </a>

    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Genero</th>
                    <!-- <th scope="col">Foto</th> -->
                    <!-- <th scope="col">Fecha de creacion</th> -->
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($listaGeneros as $genero) { ?>
                    <tr class="">
                        <td scope="row"><?= $genero['id'] ?></td>
                        <td><?= $genero['nombre'] ?></td>
                        <!-- <td>imagen.jpg</td> -->
                        <!-- <td>04/04/2023</td> -->
                        <td>
                            <a name="btnEditarGenero" id="btnEditarGenero" class="btn btn-info" href="#" role="button">Editar</a>
                            <a name="btnEliminarGenero" id="btnEliminarGenero" class="btn btn-danger"
                               href="index.php?txtID= <?= $genero['id'] ?>"
                               role="button">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<?php include("../../templates/footer.php"); ?>
