<?php
include_once 'models/usuarioBD.php';

class UsuarioModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function insert($usuario)
    {
        $sql = "insert into usuarios (id, nickname, email, password) values (null,:nickname,:email,:password)";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(":nickname", $usuario['nickname']);
        $query->bindParam(":email", $usuario['email']);
        $query->bindParam(":password", $usuario['password']);
        $query->execute();
        echo 'insertar datos en bd';
    }

    public function getUsuarios()
    {
        $items = [];

        try {
            $sql = "SELECT * FROM usuarios";
            $query = $this->db->connect()->query($sql);

            while ($row = $query->fetch()) {
                $usuario = new UsuarioBD();
                $usuario->id = $row['id'];
                $usuario->nickname = $row['nickname'];
                $usuario->email = $row['email'];
                $usuario->password = $row['password'];

                array_push($items, $usuario);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function getById($id)
    {
        $usuario = new UsuarioBD();

        $sql = "select * from usuarios where id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(":id", $id);

        try {
            $query->execute();

            while ($row = $query->fetch()) {
                $usuario->id = $row['id'];
                $usuario->nickname = $row['nickname'];
                $usuario->email = $row['email'];
                $usuario->password = $row['password'];
            }

            return $usuario;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($usuario)
    {

        $sql = "UPDATE usuarios SET nickname = :nickname, email = :email, password = :password where id= :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':nickname', $usuario['nickname']);
        $query->bindParam(':email', $usuario['email']);
        $query->bindParam(':password', $usuario['password']);
        $query->bindParam(':id', $usuario['id']);

//        var_dump($query);
        try {
            $query->execute();
//            echo  "mes";
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