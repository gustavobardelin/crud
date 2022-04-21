<?php

class Conexao{

    private static $instance;

    public static function getConn(){

        $dbname = "crud";
        $host = "localhost";
        $user = "root";
        $password = "1234";


        if(!isset($instance)){

            $instance = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $password);

            return $instance;

        }else{

            return $instance;

        }

    }

}

?>