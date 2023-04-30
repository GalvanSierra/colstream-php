<?php require 'views/header.php' ?>

<h1>Listar usuarios</h1>

<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary"
           href="<?=URL_BASE?>usuario/viewRegistrarUsuario" role="button">Agregar Usuario
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
<!--                --><?php //foreach ($listaUsuarios as $usuario) { ?>
<!--                    <tr class="">-->
<!--                        <td scope="row">--><?php //= $usuario['id'] ?><!--</td>-->
<!--                        <td>--><?php //= $usuario['nickname'] ?><!--</td>-->
<!--                        <td>--><?php //= $usuario['email'] ?><!--</td>-->
<!--                        <td>****</td>-->
<!--                        <td>-->
<!--                            <a class="btn btn-info" href="./editar.php?txtID=--><?php //= $usuario['id'] ?><!--"-->
<!--                               role="button">Editar</a>-->
<!--                            <a class="btn btn-danger" href="./index.php?txtID= --><?php //= $usuario['id'] ?><!--"-->
<!--                               role="button">Eliminar</a>-->
<!--                        </td>-->
<!---->
<!--                    </tr>-->
<!--                --><?php //} ?>
                </tbody>
            </table>
        </div>

    </div>

</div>

<?php require 'views/footer.php' ?>
