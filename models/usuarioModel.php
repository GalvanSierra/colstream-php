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
}