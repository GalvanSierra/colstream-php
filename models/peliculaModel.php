<?php
include_once 'models/peliculaBD.php';

class PeliculaModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($pelicula)
    {
        $sql = "insert into peliculas (id, titulo, sinopsis, release_date, foto, url_video) values (null,:titulo,:sinopsis,:release_date,:foto,:url_video)";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(":titulo", $pelicula['titulo']);
        $query->bindParam(":sinopsis", $pelicula['sinopsis']);
        $query->bindParam(":release_date", $pelicula['release_date']);
        $query->bindParam(":foto", $pelicula['foto']);
        $query->bindParam(":url_video", $pelicula['url_video']);
        $query->execute();
    }

    public function getPeliculas()
    {
        $items = [];

        try {
            $sql = "SELECT * FROM peliculas";
            $query = $this->db->connect()->query($sql);

            while ($row = $query->fetch()) {
                $pelicula = new PeliculaBD();
                $pelicula->id = $row['id'];
                $pelicula->titulo = $row['titulo'];
                $pelicula->sinopsis = $row['sinopsis'];
                $pelicula->release_date = $row['release_date'];
                $pelicula->foto = $row['foto'];
                $pelicula->url_video = $row['url_video'];

                array_push($items, $pelicula);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function getById($id)
    {
        $pelicula = new PeliculaBD();

        $sql = "select * from peliculas where id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(":id", $id);

        try {
            $query->execute();

            while ($row = $query->fetch()) {
                $pelicula->id = $row['id'];
                $pelicula->titulo = $row['titulo'];
                $pelicula->sinopsis = $row['sinopsis'];
                $pelicula->release_date = $row['release_date'];
                $pelicula->foto = $row['foto'];
                $pelicula->url_video = $row['url_video'];
            }

            return $pelicula;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($pelicula)
    {

        $sql = "UPDATE peliculas SET titulo = :titulo, sinopsis = :sinopsis, release_date = :release_date, foto = :foto, url_video = :url_video where id= :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':titulo', $pelicula['titulo']);
        $query->bindParam(':sinopsis', $pelicula['sinopsis']);
        $query->bindParam(':release_date', $pelicula['release_date']);
        $query->bindParam(':foto', $pelicula['foto']);
        $query->bindParam(':url_video', $pelicula['url_video']);
        $query->bindParam(':id', $pelicula['id']);

        try {
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function delete($id)
    {
        $sql = "delete from peliculas where id = :id";
        $sentencia = $this->db->connect()->prepare($sql);
        $sentencia->bindParam(":id", $id);
        
        try {
            $sentencia->execute();
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

}