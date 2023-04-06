<?php include("../../templates/header.php"); ?>

<br/>
<h3> Peliculas </h3>
<br/>

<div class="card">
    <div class="card-header">
        
        <a name="" id="" class="btn btn-primary" 
        href="crear.php" role="button">Agregar Pelicula
        </a>

    </div>
    <div class="card-body">

    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Autores</th>
                    <th scope="col">Fecha de Creacion</th>
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
                    <td>jkkdfjjwkw</td>
                    <td><a name="btneditarP" id="btneditarP" class="btn btn-info" href="#" role="button">Editar</a>
                        |<a name="btneliminarP" id="btneliminarP" class="btn btn-danger" href="#" role="button">Eliminar</a>
                </tr>

            </tbody>
        </table>
    </div>

    </div>

</div>

<?php include("../../templates/footer.php"); ?>
