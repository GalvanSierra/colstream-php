<?php include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Datos del Usuario
    </div>
    <div class="card-body">
        
    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="nombreusuario" class="form-label">Nombre del usuario:</label>
      <input type="text"
        class="form-control" name="nombreusuario" id="nombreusuario" aria-describedby="helpId" placeholder="Nombre de usuario">
    </div>

    <div class="mb-3">
      <label for="contraseñausuario" class="form-label">Contraseña</label>
      <input type="password"
        class="form-control" name="contraseñausuario" id="contraseñausuario" aria-describedby="helpId" placeholder="Contraseña">
    </div>

    <div class="mb-3">
      <label for="correousuario" class="form-label">Correo</label>
      <input type="email"
        class="form-control" name="correousuario" id="correousuario" aria-describedby="helpId" placeholder="Correo">
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
