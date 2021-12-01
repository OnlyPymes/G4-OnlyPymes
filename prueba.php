<?php
Include('conexion.php');
$ruut = $_POST["rut"];    //creo una variable y le asigno el valor ingresado
$nombre=$_POST["nombre"];
$contrase=$_POST["pass"];
$correo=$_POST["email"];
$tlf=$_POST["numero"];
$selec=$_POST["seleccionar"];
$valid=1;

$insertar="INSERT INTO pyme(id_pyme,nombre_pyme,contrasena,email,telefono_pyme,id_ciudad,id_validacion) VALUES ('$ruut','$nombre', '$contrase', '$correo','$tlf','$selec','$valid')";
//$query = mysqli_query($con,$insertar);
$variable= $con->query($insertar);
if($variable == 1){
    header("Location: index.html?error=creado&contenido=Registro con éxito");  //acepta el registro
}
else{
    header("Location: register.php?error=nocreado&contenido=no se ha podido registrar");
}

?>