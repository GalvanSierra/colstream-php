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
                    <th scope="col">Nombre</th>
                    <th scope="col">Director</th>
                    <th scope="col">Fecha de Estreno</th>
                    <th scope="col">URl</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td scope="row">1</td>
                    <td>YQse</td>
                    <td>COL</td>
                    <td>12/12/2019</td>
                    <td>.......</td>
                    <td><a name="btnEditarPelicula" id="btnEditarPelicula" class="btn btn-info" href="#" role="button">Editar</a>
                        |<a name="btnEliminarPelicula" id="btnEliminarPelicula" class="btn btn-danger" href="#"
                            role="button">Eliminar</a>
                </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>

<?php include("../../templates/footer.php"); ?>
