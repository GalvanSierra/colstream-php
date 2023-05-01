<?php
//include("../../dataBase.php");
//
//if (isset($_GET['txtID'])) {
//    $idGenero = $_GET['txtID'];
//
//    $sql = "select * from generos where id = :id";
//    $sentencia = $conn->prepare($sql);
//    $sentencia->bindParam(":id", $idGenero);
//    $sentencia->execute();
//
//    $genero = $sentencia->fetch(PDO::FETCH_LAZY);
//    $nombre = $genero["nombre"];
//}
//
//if ($_POST) {
//    print_r($_POST);
//    $idGenero = $_POST["txtID"];
//    $nombreGenero = $_POST["nombreGenero"];
//
//    $sql = "update generos set nombre = :nombre where id=:id";
//    $sentencia = $conn->prepare($sql);
//    $sentencia->bindParam(":nombre", $nombreGenero);
//    $sentencia->bindParam(":id", $idGenero);
//    $sentencia->execute();
//
//    header("Location:index.php");
//}
//?>


<?php require 'views/header.php'; ?>

<div class="card">
    <div class="card-header">
        Datos del Genero
    </div>

    <div class="card-body">
        <form action="<?= URL_BASE ?>genero/actualizarGenero" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text"
                       class="form-control" readonly name="id" id="id" value="<?= $this->genero->id ?>">
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text"
                       class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
                       value="<?= $this->genero->nombre ?>">
            </div>


            <button type="submit" class="btn btn-success">Actualizar Genero</button>
            <a name="" id="" class="btn btn-primary" href="<?= URL_BASE ?>genero" role="button">Salir</a>

        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php require 'views/footer.php'; ?>
