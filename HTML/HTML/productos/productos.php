<?php
include('conexion.php');
date_default_timezone_set("America/Santiago");

 ?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Producto</title>
    <link rel="stylesheet" href="../../css/comentarios.css">
  </head>
  <body>
    <a href="../../index.php"><img class="logo" src="../../assets/img/galeria/logo.png" ></a>

  <br>

    <div class="div-img">
    <img class ="imgn" src="../../assets/img/galeria/producto-<?php echo $_GET['foto'] ?>.png" alt="">  
    <aside><h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo strtoupper($_GET['foto']) ?></h1> </aside>
    <h1>&nbsp &nbsp &nbsp &nbsp &nbsp Valor </h1>
    
    </div>
    



    <div class="container">
      
       
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
                  $id_pr = $_GET['id_pr'];;
                  $sql = "INSERT INTO comentarios(producto_id,comentario,usuario,reply,fecha) VALUES (?,?,?,?,?)";
                  $stmt= $conn->prepare($sql);
                  if($stmt->execute([$id_pr,$text,$user,0,$date])){

                  }else{
                    print_r($stmt->errorInfo());
                  }
                }

              }

              if(isset($_POST['reply'])){
                $text = "@".$_GET['user']." ".$_POST['comentario'];
                if(!empty($text)){

                  $user = '1';
                  $id_pr=$_GET['id_pr'];
                  $date = date('Y-d-m h:i:s', time());
                  $reply = $_GET['id'];
                  $sql = "INSERT INTO comentarios(producto_id,comentario,usuario,reply,fecha) VALUES (?,?,?,?,?)";
                  $stmt= $conn->prepare($sql);
                  $foto =$_GET['foto'];
                  if($stmt->execute([$id_pr,$text,$user,$reply,$date])){
                    header("Location: productos.php?id_pr=$id_pr&foto=$foto");
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

                    $sql = "SELECT * FROM comentarios WHERE reply=? AND producto_id=? ORDER BY id DESC";
                    $resultado = $conn->prepare($sql);
                    $id_pr = $_GET['id_pr'];
                    $resultado->execute([0,$id_pr]);
                    while($row = $resultado->fetch()){
                      $id = $row['usuario'];
                      $sql = "SELECT * FROM usuarios WHERE id_usuario=? ORDER BY id_usuario DESC";
                      $res = $conn->prepare($sql);
                      $res->execute([$id]);
                      $userRes = $res->fetch();
                      $newFecha = date('m/d/Y',strtotime($row['fecha']));


                      ?>
                      <div class="texto-comentario">
                      <img id="avatar" src="../../assets/img/favicons/favicon_32x32.png" >


                        <p class="us_fe_co">


                         <a href="#"><?php echo $userRes['usuario'] ?></a>
                         <span class="fecha"><?php echo $newFecha."<br>" ?></span>
                         <span><?php echo $row['comentario']."<br>"; ?></span>


                        </p>













                  <a class="responder" href="productos.php?user=<?php echo $userRes['usuario'] ?>&id=<?php echo $row['id'] ?>&id_pr=<?php echo $row['producto_id'] ?>&foto=<?php echo $_GET['foto'] ?>">Responder</a>
                  <br><br>
                  </div>

                  <?php




                  $sql = "SELECT * FROM comentarios WHERE reply=? ORDER BY id DESC";
                  $resultadoRespuestas = $conn->prepare($sql);
                  $resultadoRespuestas->execute([$row['id']]);

                    while($rows = $resultadoRespuestas->fetch()){
                      $newFecha = date('m/d/Y',strtotime($rows['fecha']));
                  ?>

                  <div class="texto-comentario-respuesta">
                  <img id="avatar" src="../../assets/img/favicons/favicon_32x32.png" >

                  <p class="us_fe_co">


                   <a href="#"><?php echo $rows['usuario'] ?></a>
                   <span class="fecha"><?php echo $newFecha."<br>" ?></span>
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
        
    </div>
  </body>
</html>
