<?php 
include("../../dataBase.php");

if (isset($_GET['txtID'])) {
    $idUsuario = $_GET['txtID'];

    $sql = "delete from usuarios where id = :id";
    $sentencia = $conn->prepare($sql);
    $sentencia->bindParam(":id", $idUsuario);
    $sentencia->execute();

    header("Location:index.php");
}


$sql = "select * from usuarios";
$sentencia = $conn->prepare($sql);
$sentencia->execute();
$listaUsuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include("../../templates/header.php"); ?>

<br/>
<h3> Usuarios </h3>
<br/>

<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary"
           href="crear.php" role="button">Agregar Usuario
        </a>

    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                <tr>
                <th scope="col">ID</th>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($listaUsuarios as $usuario) { ?>
                    <tr class="">
                        <td scope="row"><?= $usuario['id'] ?></td>
                        <td><?= $usuario['nickname'] ?></td>
                        <td><?= $usuario['email'] ?></td>
                        <td>****</td>
                        <td>
                            <a class="btn btn-info" href="./editar.php?txtID=<?= $usuario['id'] ?>"
                               role="button">Editar</a>
                            <a class="btn btn-danger" href="./index.php?txtID= <?= $usuario['id'] ?>"
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
