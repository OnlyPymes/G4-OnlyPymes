<?php
Include('conexion.php');
$usuario = $_POST["Usuario"];    //creo una variable y le asigno el valor ingresado
$pass=$_POST["Contraseña"];
$correo=$_POST["email"];
$tlf=$_POST["telefono"];

$passhash=password_hash($pass,PASSWORD_DEFAULT);

$insertar="INSERT INTO usuarios(usuario,contrasena,Email,Telefono) VALUES ('$usuario','$passhash', '$correo', '$tlf')";
//$query = mysqli_query($con,$insertar);
$variable= $con->query($insertar);
if($con->query($insertar)){
    header("Location: LogIn.php");  //acepta el registro
    //ver como modificar la ruta de index
}
else{
    header("Location: registrousuario.php");
}

?>