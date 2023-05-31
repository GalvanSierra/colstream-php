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
    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!--DataTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page">Sistema <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL_BASE ?>main">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL_BASE ?>pelicula">Películas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL_BASE ?>genero">Géneros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL_BASE ?>usuario">Usuarios</a>
            </li>
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link" href="#">Cerrar sesión</a>-->
            <!--            </li>-->
        </ul>
    </nav>
</header>
<main class="container">