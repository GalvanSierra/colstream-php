<?php require 'views/header2.php' ?>

<br>
<div class="card">
    <div class="card-header">
        Datos del Usuario
    </div>
    <div class="card-body">

        <form action="<?= URL_BASE ?>/usuario/registrarUsuario" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="nickname" class="form-label">Nombre del usuario - nickname:</label>
                <input type="text"
                       class="form-control" name="nickname" id="nickname" aria-describedby="helpId"
                       placeholder="Nombre de usuario" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input type="email"
                       class="form-control" name="email" id="email" aria-describedby="helpId"
                       placeholder="Correo" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password"
                       class="form-control" name="password" id="password" aria-describedby="helpId"
                       placeholder="Contraseña" required>
            </div>

            <div class="input-group-append">
                <div class="input-group-text">
                    <input type="checkbox" id="showPasswordCheckbox">
                    Mostrar contraseña
                </div>
            </div>

            <br>

            <button type="submit" class="btn btn-success">Registarse</button>
            <a id="" class="btn btn-primary" href="<?= URL_BASE ?>login" role="button">Cancelar</a>

        </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php require 'views/footer.php' ?>
