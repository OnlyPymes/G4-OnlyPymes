<?php
Include('conexion.php');
session_start();
if(isset($_SESSION['nombre_usuario']))
{
    header("Location:index.php");
}


    if(!isset($_SESSION['nombre_usuario']))
    {
        $usuario=$_POST['Usuario'];
        $pass=$_POST['Contraseña'];

        $query=mysqli_query($con,"Select contrasena from usuarios where usuario= '$usuario' ");
        $row = mysqli_fetch_assoc($query);
	  
     

         $hash =  password_hash($pass,PASSWORD_DEFAULT);
       
        if(password_verify($pass,$row['contrasena'])){
           
            $query=mysqli_query($con,"Select * from usuarios where usuario= '$usuario' and contrasena='$hash'");
            $numero_filas=mysqli_num_rows($query);
            if($numero_filas==1)
            {
                $row = mysqli_fetch_assoc($query);
          
                session_start();
                $_SESSION['usuario'] =$row['usuario'];
    
                header("Location: HTML/index_registrado.php");
            }else {
                header("Location: LogIn.php");
            }
        }
       

       
    }
   

