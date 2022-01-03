

<?php 
		function conexion(){
			$servidor="146.83.198.35";
			$usuario="G4ingsoftware";
			$password="G4ingsoftware20$21";
			$bd="G4ingsoftware_bd";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}
/*
		function conexion(){
			$servidor="localhost";
			$usuario="raygh";
			$password="4172";
			$bd="pymes_test";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}


		*/
 ?>

 <!-- '146.83.198.35',
'G4ingsoftware',
'G4ingsoftware20$21',
'G4ingsoftware_bd'-->
