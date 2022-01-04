<?php 
   if (isset($_POST['submit'])) {
   	  if(empty($nomDire)){
   	  	echo "<p class='error'>*Campo de direccion vacio </p>";
   	  } else{
   	  	if(strlen($nomDire)>200){
   	  		echo "<p class='error'>*La direccion pasa el limite de caracteres </p>";
   	  	}
   	  }
   	  if(empty($idcity)){
   	  	echo "<p class='error'>*Campo de ID Ciudad vacio </p>";
   	  }else{
   	  	if(!is_numeric($idcity)){
   	  		echo "<p class='error'>*Solo numeros permitidos </p>";
   	  	}
   	  }
   	  if(empty($iduser)){
   	  	echo "<p class='error'>*Campo de ID Usuario vacio </p>";
   	  }else{
   	  	if(!is_numeric($idcity)){
   	  		echo "<p class='error'>*Solo numeros permitidos </p>";
   	  	}
   	  }
   	
   }





 ?>