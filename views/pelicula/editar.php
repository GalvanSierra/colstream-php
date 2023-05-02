<?php require 'views/header.php' ?>

<br>
<div class="card">
    <div class="card-header">
        Peliculas
    </div>

    <div class="card-body">
        <form action="<?= URL_BASE ?>pelicula/actualizarPelicula" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text"
                       class="form-control" readonly name="id" id="id" value="<?= $this->pelicula->id ?>">
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo de la película:</label>
                <input type="text"
                value="<?= $this->pelicula->titulo ?>"
                       class="form-control" name="titulo" id="titulo" aria-describedby="helpId"
                       placeholder="Nombre de la película">
            </div>

            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsis de la película:</label>
                <input type="text"
                value="<?= $this->pelicula->sinopsis ?>"
                       class="form-control" name="sinopsis" id="sinopsis" aria-describedby="helpId"
                       placeholder="Sinopsis de la película:">
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">Fecha de Estreno:</label>
                <input type="date" class="form-control" name="release_date" id="release_date"
                value="<?= $this->pelicula->release_date ?>"
                       aria-describedby="HelpId" placeholder="Fecha de estreno de la película">
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="url"
                value="<?= $this->pelicula->foto ?>"
                       class="form-control" name="foto" id="foto" aria-describedby="helpId"
                       placeholder="URL foto">
            </div>

            <div class="mb-3">
                <label for="url_video" class="form-label">URL</label>
                <input type="url"
                value="<?= $this->pelicula->url_video ?>"
                       class="form-control" name="url_video" id="url_video" aria-describedby="helpId"
                       placeholder="URL Pelicula">
            </div>

            <button type="submit" class="btn btn-success">Actualizar Pelicula</button>
            <a name="" id="" class="btn btn-primary" href="<?= URL_BASE ?>pelicula" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php require 'views/footer.php'; ?>