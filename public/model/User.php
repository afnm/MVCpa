<?php

require_once 'framework/Model.php';

class User extends Model {

    public function connect($login, $pwd)
    {
        $sql = "select ID from USER where USERNAME=? and PASSWORD=?";
        $user = $this->executeRequest($sql, array($login, $pwd));
        return ($user->rowCount() == 1);
    }

    public function register ($login, $pwd)
    {
        $sql = "INSERT INTO `USER` (`username`, `PASSWORD`) VALUES (:name, :pass)";
        $params = [
            'name' => $_POST['user'],
            'pass' => $_POST['password'],
        ];
        $sql->execute($params);
        $user = $this->executeRequest($sql, array($login, $pwd));
        return ($user->rowCount() == 1);
    }

    public function getUser($login, $pwd)
    {
        $sql = "select ID as idUser, USERNAME as username from USER where USERNAME=? and PASSWORD=?";
        $user = $this->executeRequest($sql, array($login, $pwd));
        if ($user->rowCount() == 1)
            throw new Exception("Username already Taken");
        else
            throw new Exception("There is no user corresponding to requested ID");
    }

}
