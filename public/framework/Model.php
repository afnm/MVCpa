<?php

require_once 'Configuration.php';

/**
 * Classe abstraite modèle.
 * Centralise les services d'accès à une base de données.
 * Utilise l'API PDO de PHP.
 *
 */
abstract class Model
{
   
    private static $db;

  
    protected function executeRequest($sql, $params = null)
    {
        if ($params == null) {
            $result = self::getDb()->query($sql);   
        }
        else {
            $result = self::getDb()->prepare($sql); 
            $result->execute($params);
        }
        return $result;
    }

    private static function getDb()
    {
        if (self::$db === null) {
            
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("login");
            $pwd = Configuration::get("mdp");
            
            self::$db = new PDO($dsn, $login, $pwd,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$db;
    }

}
