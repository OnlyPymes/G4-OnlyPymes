<?php
include('conexion.php');
$ruut = $_POST["rut"];    //creo una variable y le asigno el valor ingresado
$nombre=$_POST["nombre"];
$contrase=$_POST["pass"];
$correo=$_POST["email"];
$tlf=$_POST["numero"];
$selec=$_POST["seleccionar"];
$valid=1;

$insertar="INSERT INTO pyme(id_pyme,nombre_pyme,contrasena,email,telefono_pyme,id_ciudad,id_validacion) VALUES ('$ruut','$nombre', '$contrase', '$correo','$tlf','$selec','$valid')";
$variable = mysqli_query($con,$insertar) or die($con);  //en el server si o si con esto

//$variable= $con->query($insertar) or die($con); //en local si o si esto
if($variable == 1){
    header("Location: ../index.php?error=creado&contenido=Registro con éxito");  //acepta el registro
}
else{
    header("Location: register.php?error=nocreado&contenido=no se ha podido registrar");
}

?>