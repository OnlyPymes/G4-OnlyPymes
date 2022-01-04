<?php
include('conexion.php');
session_start();
$nombre = $_POST['name'];
$pass = $_POST['pass'];


if(strlen($_POST['name'])>=1){

      if(strlen($_POST['pass'])>=1){



        $query="SELECT usuario FROM usuarios WHERE usuario='$nombre'";
        $resultado=mysqli_query($con,$query);
        $row= mysqli_fetch_row($resultado);

           
        if($row[0]==$nombre){

                    //BUSCAR CONTRASEÑA
                    
                    $query=mysqli_query($con,"SELECT contrasena from usuarios where usuario= '$nombre' ");
                    $registro=mysqli_fetch_assoc($query);

                    if(password_verify($pass, $registro['contrasena'])){

                        

                      
                      $_SESSION['usuario'] = $nombre;

                    

                      echo "aceptado" ;
                    }else{
                      echo "pass";
                    }
        } else{
          echo "denegado";
        }







      }else{
        echo "Completar cotraseña";
      }



}else{
  echo "Completar nombre";
}


 ?>