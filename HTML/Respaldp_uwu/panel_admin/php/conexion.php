

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="raygh";
			$password="4172";
			$bd="pymes_test";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>