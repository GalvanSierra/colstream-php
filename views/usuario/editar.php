<?php require 'views/header.php' ?>

<br>
<div class="card">
    <div class="card-header">
        Datos del Usuario
    </div>
    <div class="card-body">

        <form action="<?= URL_BASE ?>usuario/actualizarUsuario" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text"
                       class="form-control" readonly name="id" id="id" value="<?= $this->usuario->id ?>">
            </div>

            <div class="mb-3">
                <label for="nickname" class="form-label">Nombre del usuario - nickname:</label>
                <input type="text"
                       value="<?= $this->usuario->nickname ?>"
                       class="form-control" name="nickname" id="nickname" aria-describedby="helpId"
                       placeholder="Nombre de usuario">

            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input type="email"
                       value="<?= $this->usuario->email ?>"
                       class="form-control" name="email" id="email" aria-describedby="helpId"
                       placeholder="Correo">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password"
                       value="<?= $this->usuario->password ?>"
                       class="form-control" name="password" id="password" aria-describedby="helpId"
                       placeholder="Contraseña">
            </div>
            <div class="input-group-append">
                <div class="input-group-text">
                    <input type="checkbox" id="showPasswordCheckbox">
                    Mostrar contraseña
                </div>
            </div>
            <br>
<!--            <input type="button" value="cambiar constraseña" onclick="casa()">-->

            <button type="submit" class="btn btn-success">Actualizar Usuario</button>
            <a name="" id="" class="btn btn-primary" href="<?= URL_BASE ?>usuario" role="button">Salir</a>

        </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>
<?php require 'views/footer.php' ?>
