<?php
Include('conexion.php');
session_start();
if(isset($_SESSION['nombre_usuario']))
{
    header("Location:index.php");
}
if(isset($_POST['btn']))
{
    if(!isset($_SESSION['nombre_usuario']))
    {
        $mail=$_POST['email'];
        $pass=$_POST['pswd'];
        $query=mysqli_query($con,"SELECT contrasena from pyme where email= '$mail'");
        
        $resultado = mysqli_fetch_row($query);
        $passhash=$resultado[0];
        if(password_verify($pass, $passhash))
        {
            $_SESSION['nombre_usuario']=$nombre;
            header("Location:index.php");
        }else {
            // echo"no se ha registrado";
            echo password_verify($pass,$passhash);
        }
    }
   
}

