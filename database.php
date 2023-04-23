<?php
    class Conexion
    {
        public static function conectar(){
            $port = "mysql:host=localhost; dbname=instagram; charset=utf8mb4";
            $options = [

                PDO::ATTR_EMULATE_PREPARES      => false,
                PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
            ];

            try
            {
                $pdo = new PDO($port, "root", "", $options);
                return $pdo;

            }
            catch(Exception $e)
            {
                exit("Error al conectar!");
            }
            return false;
        }
    }
?>