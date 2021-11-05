<?php

include("conexion_mysql.php");

if(isset($_POST['registrar'])){
  if(strlen($_POST['name'])>=1 && strlen($_POST['apell'])>=1 ){

    if(strlen($_POST['pass1'])>=1 && strlen($_POST['pass2'])>=1){
      if($_POST['pass1']==$_POST['pass2']){


        $nombre = $_POST['name'];
        $apell = $_POST['apell'];
        $pass = $_POST['pass1'];


        //
        // $sql = "INSERT INTO usuarios(nombre,apellido, password) VALUES (?,?,?)";
        // $stmt= $conn->prepare($sql);
        // $stmt->execute([$nombre,$apell,$pass]);




      }else{

          echo '<script language="javascript">alert("Contraseña no coincide");</script>';

      }
    }




  }
}
