<?php 

    $contrasena = 'G4ingsoftware20$21';
    $usuario= 'G4ingsoftware';
    $nombrebdd= 'G4ingsoftware_bd';

    try{
    	$bd = new PDO(
    		'mysql:host=146.83.198.35;
    		dbname='.$nombrebdd,
    		$usuario,
    		$contrasena,
    		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    	);
    } catch(Exception $e){
    	echo "Error de conexion ".$e->getMessage();
    }


 ?>