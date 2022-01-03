<?php
Include('conexion.php');
$ruut = $_POST["rut"];    //creo una variable y le asigno el valor ingresado
$nombre=$_POST["npyme"];
$contrase=$_POST["pwd"];
$correo=$_POST["email"];
$tlf=$_POST["numero"];
$selec=$_POST["seleccionar"];
$valid=1;
$passhash=password_hash($contrase,PASSWORD_DEFAULT);
$insertar="INSERT INTO pyme(id_pyme,nombre_pyme,contrasena,email,telefono_pyme,id_ciudad,id_validacion) VALUES ('$ruut','$nombre', '$passhash', '$correo','$tlf','$selec','$valid')";
//$query = mysqli_query($con,$insertar);
$variable= $con->query($insertar);
if($variable == 1){
    header("Location: ../index.php?error=creado&contenido=Registro con éxito");  //acepta el registro
    //ver como modificar la ruta de index
}
else{
    header("Location: register.php?error=nocreado&contenido=no se ha podido registrar");
}

?>