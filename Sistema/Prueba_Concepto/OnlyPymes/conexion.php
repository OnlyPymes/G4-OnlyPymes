<?php  include 'conexion.php' ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="overlay"></div>


    <img id=bodegex src="bodegex.png">
    <div class="boxtext">
        <h1>Bienvenid@ a la página del grupo 07</h1>
        <h5>Nuestro proyecto se llama: BODEGEX</h5>
    </div>
    <br>
    <br>
    <button type="button" name="button" href="xd.php">BASE DATOS</button>

    <form method="POST" action="proveedor.php">
        <li>
            <button type="submit" class="btn btn-block">Agregar proveedor</button>
        </li>
    </form>
</body>
</html>
