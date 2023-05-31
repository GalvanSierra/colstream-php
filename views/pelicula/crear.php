<?php require 'views/header.php' ?>
    <br>

    <div class="card">
        <div class="card-header">
            Datos de Películas
        </div>

        <div class="card-body">
            <form action="<?= URL_BASE ?>/pelicula/registrarPelicula" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo de la película:</label>
                    <input type="text"
                           class="form-control" name="titulo" id="titulo" aria-describedby="helpId"
                           placeholder="Nombre de la película" require>
                </div>

                <div class="mb-3">
                    <label for="sinopsis" class="form-label">Sinopsis de la película:</label>
                    <input type="text"
                           class="form-control" name="sinopsis" id="sinopsis" aria-describedby="helpId"
                           placeholder="Sinopsis de la película:" require>
                </div>

                <div class="mb-3">
                    <label for="release_date" class="form-label">Fecha de Estreno:</label>
                    <input type="date" class="form-control" name="release_date" id="release_date"
                           aria-describedby="HelpId" placeholder="Fecha de estreno de la película" require>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">URL</label>
                    <input type="url"
                           class="form-control" name="foto" id="foto" aria-describedby="helpId"
                           placeholder="URL foto" require>
                </div>

                <div class="mb-3">
                    <label for="url_video" class="form-label">URL</label>
                    <input type="url"
                           class="form-control" name="url_video" id="url_video" aria-describedby="helpId"
                           placeholder="URL Película" require>
                </div>

                <button type="submit" class="btn btn-success">Agregar</button>
                <a name="" id="" class="btn btn-primary" href="<?= URL_BASE ?>pelicula" role="button">Cancelar</a>


            </form>

        </div>
        <div class="card-footer text-muted">
        </div>
    </div>

<?php require 'views/footer.php'; ?>