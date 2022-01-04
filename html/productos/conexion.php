<?php

$hostname="mysqltrans.face.ubiobio.cl";
$username="G4ingsoftware";
$password="G4ingsoftware20$21";
$dbname="G4ingsoftware_bd";

$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
