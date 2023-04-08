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
                    <th scope="col">Contraseña</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td scope="row">1</td>
                    <td>Juan</td>
                    <td>****</td>
                    <td>juanito@gmail.com</td>
                    <td><a name="btneditarP" id="btneditarP" class="btn btn-info" href="#" role="button">Editar</a>
                        |<a name="btneliminarP" id="btneliminarP" class="btn btn-danger" href="#"
                            role="button">Eliminar</a>
                </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>

<?php include("../../templates/footer.php"); ?>
