<?php




$hostname="mysqltrans.face.ubiobio.cl";
$username="G4ingsoftware";
$password="G4ingsoftware20$21";
$dbname="G4ingsoftware_bd";


try {

  //$conn = mysqli_connect($hostname,$username, $password,$dbname);
  $mbd = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);








  echo("SE LOGRO");

} catch (PDOException $e) {
  echo("nO SE CONECTO : $e");

}
