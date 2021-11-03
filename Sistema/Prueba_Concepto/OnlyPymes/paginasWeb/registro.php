<?php
require_once '../vendor/autoload.php';
require_once '../googleAuth/config.php';
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
$email ='';
$name ='';


if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;


 }





 ?>


<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="descripcion" content="Inicio o registro de usuarios"/>
        <link rel="stylesheet" href="../estilos/registro.css">
        <link  rel="icon"   href="../icon/Only.png"/>
    </head>

    <body>
      <a href="index.php"><img class="icon" src="../icon/Only.png" width="95" height="auto"></a>
      <form class="formulario-login" method="post">

          <h5>Registro Only Pymes</h5>




          <?php

          echo "  <a href='".$client->createAuthUrl()."'>Google Login</a>"?>

          <br>
          <?php
          echo 'Bienvenido '.$name .' a Only Pymes<br>';
          echo $email ;


           ?>



          <!-- <input class="usser" type="text" name="name" value="" placeholder="Nombre">
          <input class="usser" type="text" name="apell" value="" placeholder="Apellido">
          <input class="usser" type="password" name="pass1" value="" placeholder="Contraseña">
          <input class="usser" type="password" name="pass2" value="" placeholder="Contraseña"> -->
          <!-- <imput class="buttom" type="submit"  name ="registrar" value= "Registrarse"/> -->
          <!-- <button name="registrar">Registrar</button> -->
          <!-- <input class="usser" type="submit" name="registrar" > -->

          <!-- <p><a href="#">¿Olvidaste tu contraseña?</a></p>
          <p><a href="ingreso.php">Ingresar</a></p> -->
      </form>
        <!-- <?php
        include('../BaseDatos/insert_user_bdd.php');
        ?> -->
    </body>

</html>
