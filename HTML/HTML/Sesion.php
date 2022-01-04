<?php
Include('conexion.php');
session_start();
if(isset($_SESSION['nombre_usuario']))
{
      header("Location: RegistradoIndex.php");
}
if(isset($_POST['btn']))
{	
    	
    if(!isset($_SESSION['nombre_usuario']))
    {
        $mail=$_POST['email'];
        $pass=$_POST['pswd'];
        //se consulta la contrasena, para cuadno el email ingresado sea igual a uno guardado
        $query=mysqli_query($con,"SELECT contrasena from pyme where email='$mail'");
        $registro=mysqli_fetch_assoc($query);
        // echo $pass;
        // echo ' ';
        // echo $registro['contrasena'];
        if(password_verify($pass,$registro['contrasena']))
        {
            
             $aux=$registro['contrasena'];
            // echo' ';
            // echo $aux;
            
            $query2="SELECT nombre_pyme FROM pyme WHERE  contrasena='$aux' AND  email='$mail'";
            $resultado=mysqli_query($con,$query2);
            $row= mysqli_fetch_row($resultado);
            echo $row[0];
            
            $nro_filas=mysqli_num_rows($resultado);
            
             if($nro_filas==1)
             {
                 $nombree=$row[0];
                 $row2= mysqli_fetch_array($resultado);
                 session_start();
                 $_SESSION['usuario'] =$nombree;
                 header("Location: ../index_registrado.php");
             }else{
                    header("Location: iniciarsesion.php");
                }
        
        }else{
		header("Location: iniciarsesion.php");
	} 
    }else{
        session_destroy();
	header("Location: iniciarsesion.php");
    }
   
}
