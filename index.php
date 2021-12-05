<?php
$con = mysqli_connect("localhost", "raygh", "4172", "pymes");
$sql = "SELECT * FROM `tiendas`";
$Sql_query = mysqli_query($con, $sql);
$All_courses = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">

</head>

<body>
        <table class="wrapper">
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
            </tr>

            <?php
            foreach ($All_courses as $course) { ?>
                <tr>
                    <td><?php echo $course['nombre']; ?></td>

                    <td>
                        <?php
                        if ($course['validacion'] == "0")
                            echo
                            "<a href=desactivar_pyme.php?id=" . $course['id'] . " class='btn red'>Deshabilitada</a>";
                        else
                            echo
                            "<a href=activar_pyme.php?id=" . $course['id'] . " class='btn green'>Activa</a>";
                        ?>
                </tr>
            <?php
            }
            ?>
        </table>
</body>

</html>