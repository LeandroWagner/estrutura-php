<?php

namespace app\models;

use PDO;

Class Connection {

    public static function connect() {

        $config =require "../config.php";

        $pdo = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['dbname']};charset={$config['db']['charset']}",$config['db']['username'],$config['db']['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                  //Havendo erros mostra na tela;
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);               //Lista dados em formato de um objeto
       
        return $pdo;
    }

}

?>