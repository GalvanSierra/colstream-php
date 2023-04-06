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
                        <th scope="col">Genero</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Fecha de creacion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Terror</td>
                        <td>imagen.jpg</td>
                        <td>04/04/2023</td>
                        <td><a name="btneditarG" id="btneditarG" class="btn btn-info" href="#" role="button">Editar</a>
                            |<a name="btneliminarG" id="btneliminarG" class="btn btn-danger" href="#" role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<?php include("../../templates/footer.php"); ?>
