<?php

class Connection {

    public static $con; //Ressource accessible en dehors de la classe
    private $serveur = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'ecom';

    public function connectBdd() {
        if (!isset(self::$con)) {
            self::$con = new mysqli("localhost", "root", "", "ecom");
        }

        return self::$con;
    }

    //Méthode définie pour sauver les attributs avant la sérialisation

    public function __sleep() {

        return array('serveur', 'user', 'password', 'database');
    }

    //Méthode qui est appelée après la désérialisation, pour nous permettre de relancer la connexion
    public function __wakeup() {
        $this->connectBdd();
    }

}
