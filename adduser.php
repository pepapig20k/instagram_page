<?php

include 'database.php';

class UserDao{

    public static function insertar()
    {

        $user = $_POST['usu'];
        $pass = $_POST['password'];
        
        $sql = "INSERT INTO usuarios (username, password)
         VALUE (:usu, :password)";
        
        $dao = Conexion::conectar();
        $sth = $dao->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(

            ':usu' => "$user",
            ':password' => "$pass"));
        if($sth)
        {
            echo "HE insertado un usuario";
        }
        else
        {
            echo "tieme un error el registrar activad";   
        }

    }
}

UserDao::insertar();

?>