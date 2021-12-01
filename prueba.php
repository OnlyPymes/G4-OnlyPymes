<?php
Include('conexion.php');
$ruut = $_POST["rut"];    //creo una variable y le asigno el valor ingresado
$nombre=$_POST["nombre"];
$contrase=$_POST["pass"];
$correo=$_POST["email"];
$tlf=$_POST["numero"];
$selec=$_POST["seleccionar"];

echo ($ruut);
echo($nombre);
echo($contrase);
echo($correo);
echo($tlf);
echo($selec);



//$insertar="INSERT INTO pyme VALUES ('$nombre', '$contrase', '$correo','$tlf','$selec','0')";
//$query = mysqli_query($con,$insertar);
//if($query)
//{
  //  echo 'Registrado correctamente';
//}

?>