<?php
require 'models/peliculaBD.php';

class Pelicula extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->peliculas = [];
    }

    function render()
    {
        $pelicula = $this->model->getPeliculas();
        $this->view->pelicula = $pelicula;
        $this->view->render('pelicula/index');
    }

    function renderRegistrarPelicula()
    {
        $this->view->render('pelicula/crear');
    }

    function registrarPelicula()
    {

        $titulo = $_POST["titulo"];
        $sinopsis = $_POST["sinopsis"];
        $release_date = $_POST["release_date"];
        $foto = $_POST["foto"];
        $url_video = $_POST["url_video"];

        $pelicula = [
            'titulo' => $titulo,
            'sinopsis' => $sinopsis,
            'release_date' => $release_date,
            'foto' => $foto,
            'url_video' => $url_video
        ];
        

        $this->model->insert($pelicula);

        $this->render();
    }

    function editarPelicula($param = null)
    {
        $idPelicula = $param[0];
        $pelicula = $this->model->getById($idPelicula);

        $this->view->pelicula = $pelicula;
        $this->view->render('pelicula/editar');
    }

    function actualizarPelicula()
    {
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $sinopsis = $_POST["sinopsis"];
        $release_date = $_POST["release_date"];
        $foto = $_POST["foto"];
        $url_video = $_POST["url_video"];

        $peliculaQuery = [
            'id' => $id,
            'titulo' => $titulo,
            'sinopsis' => $sinopsis,
            'release_date' => $release_date,
            'foto' => $foto,
            'url_video' => $url_video
        ];


        if ($this->model->update($peliculaQuery)) {
            $pelicula = new PeliculaBD();
            $pelicula->id = $id;
            $pelicula->titulo = $titulo;
            $pelicula->sinopsis = $sinopsis;
            $pelicula->release_date = $release_date;
            $pelicula->foto = $foto;
            $pelicula->url_video = $url_video;

            $this->view->pelicula = $pelicula;
        }
        $this->view->render('pelicula/editar');
    }

    function eliminarPelicula($param = null)
    {
        $idPelicula = $param[0];

        $this->model->delete($idPelicula);

        $this->render();
    }
}