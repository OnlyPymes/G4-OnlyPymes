<?php 

   if(!isset($_POST['oculto'])){
   	header('Location: index.php');
   }

   include 'model/conexion.php';
   $id2 = $_POST['id2'];
   $dire2 = $_POST['txt2Dire'];
   $idCity2 = $_POST['txt2City'];
   $idUser2 = $_POST['txt2User'];

   $sentence = $bd->prepare("UPDATE direccion SET Nombre_direccion = ?, id_ciudad = ?, id_usuario = ? WHERE Id_Direccion = ?");

   $result = $sentence->execute([$dire2,$idCity2,$idUser2,$id2]);


   if($result===TRUE){
   	header('Location: index.php');
   }else{
   	echo "Error";
   }




 ?>