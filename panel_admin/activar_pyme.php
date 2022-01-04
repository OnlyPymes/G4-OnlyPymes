<?php
$con = mysqli_connect("146.83.198.35", "G4ingsoftware", "G4ingsoftware20$21", "G4ingsoftware_bd");

if (isset($_GET['id'])) {

  $pyme_id = $_GET['id'];
  $sql = "UPDATE `pyme` SET 
           `id_validacion`= 0 WHERE id_pyme='$pyme_id'";

  mysqli_query($con, $sql);
}

header('location: validar_pymes.php');
?>