<?php

/**
 * Calse de conexion mediante PDO
 */
class Database
{
    /**
     *
     *@return $pdo Conexion
     */
    public function conectar()
    {
        $host = 'localhost';
        $port = '5432';
        $db = 'crudpg';
        $user = 'postgres';
        $pass = 'jc$95';

        $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", "$user", "$pass");
        //$db = new PDO("pgsql:dbname=$db;host=$host", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
