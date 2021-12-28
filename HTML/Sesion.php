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
        $query=mysqli_query($con,"Select * from pyme where email= '$mail' and contrasena= '$pass'");
        $numero_filas=mysqli_num_rows($query);
        if($numero_filas==1)
        {
            $_SESSION['nombre_usuario']=$nombre;
            header("Location:index.php");
        }else {
            echo"no se ha registrado";
        }
    }
   
}

