<?php

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
}