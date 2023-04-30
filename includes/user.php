<?php

include_once 'DataBase.php';

class User extends DataBase{
    private $nickname;

    public function userExists($user, $pass){
        //$md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE email = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE email = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nickname = $currentUser['nickname'];
        }
    }

    public function getNickname(){
        return $this->nickname;
    }

}

?>