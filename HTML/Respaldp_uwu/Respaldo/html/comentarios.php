<?php
include('../include/conexion.php');
date_default_timezone_set("America/Santiago");

 ?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listar Producto</title>
    <link rel="stylesheet" href="../css/comentarios.css">
  </head>
  <body>
    <a href="../index.php"><img  src="../logo/Only-2.png" ></a>

    <div class="container">
      <h1>Prueba de comentarios para producto</h1>
        <center>
           <form class="formulario"  method="post" >
             <br>
             <p>
               <textarea name="comentario" rows="5" cols="80" id="textarea"></textarea>
             </p>
             <p>
               <input type="submit" <?php if (isset($_GET['id'])) { ?>name="reply"<?php } else { ?>name="comentar"<?php } ?> value="Comentar">
             </p>
             <br>
           </form>

           <?php



              if(isset($_POST['comentar']) ){

                $text = $_POST['comentario'];
                if(!empty($text)){

                  $user = '1';
                  $date = date('Y-d-m h:i:s', time());

                  $sql = "INSERT INTO comentarios(comentario,usuario,reply,fecha) VALUES (?,?,?,?)";
                  $stmt= $conn->prepare($sql);
                  if($stmt->execute([$text,$user,0,$date])){

                  }else{
                    print_r($stmt->errorInfo());
                  }
                }

              }

              if(isset($_POST['reply'])){
                $text = "@".$_GET['user']." ".$_POST['comentario'];
                if(!empty($text)){

                  $user = '1';
                  $date = date('Y-d-m h:i:s', time());
                  $reply = $_GET['id'];
                  $sql = "INSERT INTO comentarios(comentario,usuario,reply,fecha) VALUES (?,?,?,?)";
                  $stmt= $conn->prepare($sql);
                  if($stmt->execute([$text,$user,$reply,$date])){
                    header("Location: comentarios.php");
                  }else{
                    print_r($stmt->errorInfo());
                  }
                }


              }



            ?>

            <div class="com">
              <ul id="comentarios">
                <br>
                  <?php

                    $sql = "SELECT * FROM comentarios WHERE reply=? ORDER BY id DESC";
                    $resultado = $conn->prepare($sql);
                    $resultado->execute([0]);
                    while($row = $resultado->fetch()){
                      $id = $row['usuario'];
                      $sql = "SELECT * FROM usuarios WHERE id=? ORDER BY id DESC";
                      $res = $conn->prepare($sql);
                      $res->execute([$id]);
                      $userRes = $res->fetch();
                      ?>
                      <div class="texto-comentario">
                      <img id="avatar" src="../logo/Only-2.png" >


                        <p class="us_fe_co">


                         <a href="#"><?php echo $userRes['usuario'] ?></a>
                         <span class="fecha"><?php echo $row['fecha']."<br>" ?></span>
                         <span><?php echo $row['comentario']."<br>"; ?></span>


                        </p>













                  <a class="responder" href="comentarios.php?user=<?php echo $userRes['usuario'] ?>&id=<?php echo $row['id'] ?>">Responder</a>
                  <br><br>
                  </div>

                  <?php




                  $sql = "SELECT * FROM comentarios WHERE reply=? ORDER BY id DESC";
                  $resultadoRespuestas = $conn->prepare($sql);
                  $resultadoRespuestas->execute([$row['id']]);

                    while($rows = $resultadoRespuestas->fetch()){
                  ?>

                  <div class="texto-comentario-respuesta">
                  <img id="avatar" src="../logo/Only-2.png" >

                  <p class="us_fe_co">


                   <a href="#"><?php echo $rows['usuario'] ?></a>
                   <span class="fecha"><?php echo $rows['fecha']."<br>" ?></span>
                   <span><?php echo $rows['comentario']."<br><br><br>"; ?></span>


                  </p>
                  </div>


                  <?php
                   }
                   echo '<hr color="#000000">';
                   }
                   ?>



              </ul>
            </div>
        </center>
    </div>
  </body>
</html>
