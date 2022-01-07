<?php

require_once 'framework/Model.php';

/**
 * Modélise un utilisateur du blog
 *
 */
class User extends Model {

    /**
     * Vérifie qu'un utilisateur existe dans la BD
     * 
     * @param string $login Le login
     * @param string $pwd Le mot de passe
     * @return boolean Vrai si l'utilisateur existe, faux sinon
     */
    public function connect($login, $pwd)
    {
        $sql = "select ID from USER where USERNAME=? and PASSWORD=?";
        $user = $this->executeRequest($sql, array($login, $pwd));
        return ($user->rowCount() == 1);
    }

    /**
     * Renvoie un utilisateur existant dans la BD
     * 
     * @param string $login Le login
     * @param string $pwd Le mot de passe
     * @return mixed L'utilisateur
     * @throws Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function getUser($login, $pwd)
    {
        $sql = "select ID as idUser, USERNAME as username, ADMIN as admin from USER where USERNAME=? and PASSWORD=?";
        $user = $this->executeRequest($sql, array($login, $pwd));
        if ($user->rowCount() == 1)
            return $user->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("There is no user corresponding to requested ID");
    }

}

