

<?php 
		function conexion(){
			$servidor="146.83.198.35";
			$usuario="G4ingsoftware";
			$password="G4ingsoftware20$21";
			$bd="G4ingsoftware_bd";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>