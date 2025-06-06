<?php

class Database {
    private static $connection = null;

    public static function connect() {
        if (self::$connection === null) {
            $host = 'mariadb'; 
            $port = '3306'; 
            $dbname = 'bdproyecto';
            $username = 'admin';
            $password = 'changepassword';

            try {
                $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
                self::$connection = new PDO($dsn, $username, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}





