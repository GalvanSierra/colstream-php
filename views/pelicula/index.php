<?php require 'views/header.php'; ?>

<br/>
<h3>Pelicula</h3>
<br/>
<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary"
        href="<?= URL_BASE ?>pelicula/renderRegistrarPelicula" role="button">Agregar Pelicula
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
                    <th scope="col">Foto</th>
                    <th scope="col">URL</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->pelicula as $pelicula) { ?>
                    <tr class="">
                        <td scope="row"><?= $pelicula->id ?></td>
                        <td><?= $pelicula->titulo ?></td>
                        <td><?= $pelicula->sinopsis ?></td>
                        <td><?= $pelicula->release_date ?></td>
                        <td><?= $pelicula->foto ?></td>
                        <td><?= $pelicula->url_video ?></td>
                        <td>
                            <a class="btn btn-info" href="<?= URL_BASE . 'pelicula/editarPelicula/' . $pelicula->id ?>"
                               role="button">Editar</a>
                            <a class="btn btn-danger" href="<?= URL_BASE . 'pelicula/eliminarPelicula/' . $pelicula->id ?>"
                               role="button">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>

<?php require 'views/footer.php'; ?>