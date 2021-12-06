<?php
$con = mysqli_connect("146.83.198.35", "G4ingsoftware", "G4ingsoftware", "G4ingsoftware_bd");

if (isset($_GET['id_validacion'])) {

  $pyme_id = $_GET['id_validacion'];
  $sql = "UPDATE `pyme` SET 
           `id_validacion`= 0 WHERE $id='$pyme_id'";

  mysqli_query($con, $sql);
}

header('location: validarpyme.php');
?>