
<!--Esto aplica solo a mi, David Galvan, ya que uso otro puerto -->
<?php $urlBAse = "http://localhost:63342/ColStream_PHP/"?>
<?php //$urlBAse = "http://localhost/ColStream_PHP/"?>

<!doctype html>
<html lang="en">

<head>
  <title>ColStream</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page">Sistema <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $urlBAse?>secciones/peliculas">Peliculas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $urlBAse?>secciones/generos">Generos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $urlBAse?>secciones/usuarios">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cerrar sesión</a>
            </li>
        </ul>
    </nav>
  </header>
  <main class="container">