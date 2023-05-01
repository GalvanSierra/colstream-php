<?php
include_once 'models/generoBD.php';

class GeneroModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function insert($genero)
    {
        $sql = "insert into generos (id, nombre) value (null,:nombre)";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(":nombre", $genero['nombre']);

        $query->execute();
    }

    public function getGeneros()
    {
        $items = [];

        try {
            $sql = "SELECT * FROM generos";
            $query = $this->db->connect()->query($sql);

            while ($row = $query->fetch()) {
                $genero = new generoBD();
                $genero->id = $row['id'];
                $genero->nombre = $row['nombre'];

                array_push($items, $genero);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function getById($id)
    {
        $genero = new generoBD();

        $sql = "select * from generos where id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(":id", $id);

        try {
            $query->execute();

            while ($row = $query->fetch()) {
                $genero->id = $row['id'];
                $genero->nombre = $row['nombre'];
            }

            return $genero;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($genero)
    {

        $sql = "update generos set nombre = :nombre where id=:id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(":nombre", $genero['nombre']);
        $query->bindParam(":id", $genero['id']);

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
        $sql = "delete from usuarios where id = :id";
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