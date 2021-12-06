<?php
$con = mysqli_connect("localhost", "raygh", "4172", "pymes");
$sql = "SELECT * FROM `tiendas`";
$Sql_query = mysqli_query($con, $sql);
$all_pymes = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">

</head>

<body style="background-image: url('fondo.png');">

<div>
    <center>
        <img src="logo1.0.png" width="350" height="120">
    </center>
</div>

<div id="main-container">
    <table class="wrapper" style="background-color: #F2F5FD">

        <tr>
            <th>Nombre</th>
            <th>Estado</th>
        </tr>
        
        <?php
            foreach ($Sql_query as $pyme) { ?>
                <tr>
                    <td><?php echo $pyme['nombre']; ?></td>
                    
                    <td>
                        <?php
                        if ($pyme['validacion'] == "1")
                        echo
                        "<a href=desactivar_pyme.php?id=" . $pyme['id'] . " class='btn red'>Deshabilitada</a>";
                        else
                        echo
                        "<a href=activar_pyme.php?id=" . $pyme['id'] . " class='btn green'>Habilitada</a>";
                        ?>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    </body>
    
    </html>
