<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Peliculas
    </div>
    <div class="card-body">
        
    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="nombrepelicula" class="form-label">Nombre de la Pelicula:</label>
      <input type="text"
        class="form-control" name="nombrepelicula" id="nombrepelicula" aria-describedby="helpId" placeholder="Nombre de la pelicula">
    </div>

    <div class="mb-3">
      <label for="autores" class="form-label">Autor(es):</label>
      <input type="text"
        class="form-control" name="autores" id="autores" aria-describedby="helpId" placeholder="Autores">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de Creacion:</label>
        <input type="date" class="form-control" name="fechaCreacionP" id="fechaCreacionP" aria-describedby="HelpId" placeholder="Fecha de Creacion Pelicula">
    </div>

    <div class="mb-3">
      <label for="URLPelicula" class="form-label">URL</label>
      <input type="url"
        class="form-control" name="URLPelicula" id="URLPelicula" aria-describedby="helpId" placeholder="URL Pelicula">
    </div>

    <button type="submit" class="btn btn-success">Agregar Genero</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


    </form>

    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

<?php include("../../templates/footer.php"); ?>
