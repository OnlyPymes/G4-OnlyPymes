<?php
$con = mysqli_connect("146.83.198.35", "G4ingsoftware", "G4ingsoftware", "G4ingsoftware_bd");
$sql = "SELECT * FROM `pyme`";
$Sql_query = mysqli_query($con, $sql);
$all_pymes = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body style="background-image: url('../imagenes/fondo.png');">

    <div>
        <center>
        <img src="../logo/logo1.0.png" width="350" height="120">
        </center>
    </div>

    <div id="main-container">
        <table class="wrapper" style="background-color: #F2F5FD">

            <tr>
                <th>Nombre</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td>OnlyPymes</td>
                <td><a class='btn red'>Deshabilitada</a></td>
            </tr>
        </table>
    </div>
</body>

</html>