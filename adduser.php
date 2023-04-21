<!-- añade user sentencia preparada-->
<?php 
 
include 'database.php'; 

class UserDao{

	public static function insertar()
	{
		$user = $_POST['usu']; // aqui recibo la data del form (formulario)
		$pass = $_POST['password'];

        // sentencia para añadir usuarios
		$sql = "INSERT INTO usuarios (username, password) 
         VALUES (:usu, :password)";

        // se encapsulan los datos para mejor seguridad.
		$dao = Conexion::conectar(); 
		$sth = $dao->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$sth->execute(array(

			':usu' => "$user",  
			':password' => "$pass"));

		if($sth) // válida si se añadio un user.
		{
           echo "Hola has guardado";
        }
		else
		{
			echo "tiene un error al registrar actividad";
		}

	}

}

UserDao::insertar();

?>