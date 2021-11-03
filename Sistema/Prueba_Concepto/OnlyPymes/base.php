<?php



$hostname="mysqltrans.face.ubiobio.cl";
$username="G4ingsoftware";
$password="G4ingsoftware20$21";
$dbname="G4ingsoftware_bd";


try {

  //$conn = mysqli_connect($hostname,$username, $password,$dbname);
  $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);



  //INSERT
  $sql = "INSERT INTO usuarios(id, nombre, apellido, password) VALUES (?,?,?,?)";
  $stmt= $conn->prepare($sql);
  $stmt->execute([5,"root","OnlyPymes","1234"]);

  //SELECT
  // $sql = "SELECT * FROM usuarios";
  // $stmt= $conn->prepare($sql);
  // $stmt->execute();


  //RECORRER DATOS DE CONSULTAS
  foreach ($stmt as $key) {
    var_dump($key);
  }



} catch (PDOException $e) {


  echo("nO SE CONECTO : $e");

}
