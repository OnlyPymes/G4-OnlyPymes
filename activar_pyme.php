
<?php
$con = mysqli_connect("localhost", "raygh", "4172", "pymes");
if (isset($_GET['id'])) {
  $course_id = $_GET['id'];
  $sql = "UPDATE `tiendas` SET 
           `validacion`=0 WHERE id='$course_id'";
  mysqli_query($con, $sql);
}
header('location: index.php');
?>