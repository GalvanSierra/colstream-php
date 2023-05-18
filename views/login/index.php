<?php require 'views/header.php' ?>

<br>
<div class="card w-47 p-3 position-absolute top-50 start-50 translate-middle">
    <div class="card-header">
        Inicio de Sesión
    </div>
    <div class="card-body">

        <form action="<?= URL_BASE ?>/login/userExist" method="post" enctype="multipart/form-data">

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

            <button type="submit" class="btn btn-success">Iniciar sesion</button>
<!--            <a id="" class="btn btn-primary" href="--><?php //= URL_BASE ?><!--usuario" role="button">Cancelar</a>-->

        </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php require 'views/footer.php' ?>
