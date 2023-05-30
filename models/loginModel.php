<?php
include_once 'models/usuarioBD.php';

class LoginModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

/*     public function insert($usuario)
    {
        $sql = "insert into usuarios (id, nickname, email, password) values (null,:nickname,:email,:password)";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(":nickname", $usuario['nickname']);
        $query->bindParam(":email", $usuario['email']);
        $query->bindParam(":password", $usuario['password']);
        $query->execute();
    } */

/*     public function getUsuarios()
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
    } */


//
    public function validarUsuario($usuario)
    {
        
        $sql = "select * from usuarios where email = :email and password = :password";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(":email", $usuario->email);
        $query->bindParam(":password", $usuario->password);


        try {
            $query->execute();

            while ($row = $query->fetch()) {
                $usuario->id = $row['id'];
                $usuario->nickname = $row['nickname'];
                $usuario->email = $row['email'];
                $usuario->password = $row['password'];
            }

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

/*     public function update($usuario)
    {

        $sql = "UPDATE usuarios SET nickname = :nickname, email = :email, password = :password where id= :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':nickname', $usuario['nickname']);
        $query->bindParam(':email', $usuario['email']);
        $query->bindParam(':password', $usuario['password']);
        $query->bindParam(':id', $usuario['id']);

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
    }*/
} 