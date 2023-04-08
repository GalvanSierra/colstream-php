<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Peliculas
    </div>
    <div class="card-body">

        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="nombrePelicula" class="form-label">Titulo de la película:</label>
                <input type="text"
                       class="form-control" name="nombrePelicula" id="nombrePelicula" aria-describedby="helpId"
                       placeholder="Nombre de la película">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Sinopsis de la película</label>
              <textarea class="form-control" name="" id="" rows="3"></textarea>
            </div>

            <!-- <div class="mb-3">
                <label for="director" class="form-label">Director:</label>
                <input type="text"
                       class="form-control" name="director" id="director" aria-describedby="helpId"
                       placeholder="Autores">
            </div> -->

            <div class="mb-3">
                <label for="" class="form-label">Fecha de Estreno:</label>
                <input type="date" class="form-control" name="fechaEstreno" id="fechaEstreno"
                       aria-describedby="HelpId" placeholder="Fecha de estreno de la película">
            </div>

            <div class="mb-3">
                <label for="URLPelicula" class="form-label">URL</label>
                <input type="url"
                       class="form-control" name="URLPelicula" id="URLPelicula" aria-describedby="helpId"
                       placeholder="URL Pelicula">
            </div>

            <!--            <button type="submit" class="btn btn-success">Agregar Genero</button>-->

            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>

    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

<?php include("../../templates/footer.php"); ?>
