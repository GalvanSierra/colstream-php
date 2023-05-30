<?php require 'views/header.php'; ?>

<br/>
<h3>Generos</h3>
<br/>
<div class="card">

    <br>
    <div class = "container-fluid">
    <form action="" method="get"></form>
        <input class="form-control me-2" type="search" placeholder="Buscar"
        name="busqueda">
        <button class="btn btn-outline-info" type="submit" name="enviar"><b>Buscar</b></button>
        <br><br>
    </div>

    <div class="card-header">

        <a name="" id="" class="btn btn-primary"
           href="<?= URL_BASE ?>genero/renderRegistrarGenero" role="button">Agregar Genero
        </a>

       
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($this->generos as $genero) { ?>
                    <tr class="">
                        <td scope="row"><?= $genero->id ?></td>
                        <td><?= $genero->nombre ?></td>
                        <td>
                            <a class="btn btn-info" href="<?= URL_BASE . 'genero/editarGenero/' . $genero->id ?>"
                               role="button">Editar</a>
                            <a class="btn btn-danger" href="<?= URL_BASE . 'genero/eliminarGenero/' . $genero->id ?>"
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

<?php require 'views/footer.php'; ?>
