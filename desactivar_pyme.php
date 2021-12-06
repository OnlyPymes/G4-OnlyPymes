<?php
$con = mysqli_connect("localhost", "raygh", "4172", "pymes");

if (isset($_GET['id'])) {

  $pyme_id = $_GET['id'];
  $sql = "UPDATE `tiendas` SET 
           `validacion`= 0 WHERE id='$pyme_id'";

  mysqli_query($con, $sql);
}

header('location: index.php');
?>