<?php
$con = mysqli_connect("localhost", "raygh", "4172", "pymes_test");

if (isset($_GET['id'])) {

  $pyme_id = $_GET['id'];
  $sql = "UPDATE `pym` SET 
           `estado`= 1 WHERE id='$pyme_id'";

  mysqli_query($con, $sql);
}

header('location: index.php');
?>