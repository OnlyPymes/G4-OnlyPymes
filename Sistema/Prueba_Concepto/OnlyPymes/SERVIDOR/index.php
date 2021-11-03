<html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OnlyPymes</title>
  <link rel="stylesheet" href="inicio.css">
  <link rel="icon" href="Only.png" />
</head>

<body>




  <header>
      <button class="registrarse" type="button" name="button">Registrarse</button>




    <div class="textos">
      <h1 class="titulo">Bienvenid@, Somos el grupo 7</h1>
      <h3 class="subtitulo">Nuestro proyecto se llama Onlypymes</h3>
      <!-- ESTE BOTON NO FUNCIONA ,REVISAR -->




      <!-- <a href="Login2.php" class="boton">Ingresar</a> -->








    </div>
    <div class="sesgoabajo"></div>
  </header>

  <main>
    <section class="acerca-de">
      <div class="contenedor">
        <a href="Login2.php" class="Boton">Registrarse</a>


        <!-- INGRESAR TEXTO CORRESPONDIENTE -->
        <h2 class="sobre-nosotros">Sobre nosotros</h2>
        <h3 class="slogan">Proyecto Onlypymes</h3>
        <p class="parrafo">Sistema de trabajo informático utilizado en los sitios web que permite a los usuarios modificar o crear su contenido de forma rápida y sencilla.
          "los sitios wiki me resultan muy interesantes porque ensalzan el espíritu colaborativo"</p>
        <p class="parrafo">Sistema de trabajo informático utilizado en los sitios web que permite a los usuarios modificar o crear su contenido de forma rápida y sencilla.
          "los sitios wiki me resultan muy interesantes porque ensalzan el espíritu colaborativo"</p>
        <!-- ESTE BOTON TE MANDA A LA PAGINA PRINCIPAL -->
        <a href="Login2.php" class="boton">Saber mas</a>
      </div>
    </section>
    <section class="galeria">
      <!-- CAMBIAR IMAGENES A UNAS MAS ADECUADAS -->
      <div class="sesgoarriba"></div>
      <div class="imagenes none">
        <img src="1.jpg" alt="">
      </div>
      <div class="imagenes">
        <img src="3.jpg" alt="">
      </div>
      <div class="imagenes">
        <img src="2.jpg" alt="">
        <div class="encima">
          <h2>OnlyPymes</h2>
          <div></div>
        </div>
      </div>
      <div class="imagenes">
        <img src="4.jpeg" alt="">

      </div>
      <div class="imagenes none">
        <img src="5.jpeg" alt="">
      </div>
      <div class="sesgoabajo"></div>
    </section>
    <section class="miembros">
      <div class="contenedor">
        <h2 class="sobre-nosotros">Nuestro equipo</h2>
        <h3 class="slogan">Conoce a nuestro equipo de trabajo</h3>
        <div class="cards">
          <div class="card">
            <!-- Cambiar los avatares e ingresar texto real -->
            <img src="Only.png" alt="">
            <h4>Bulbasur</h4>
            <p>pokemon tipo hierba</p>
          </div>
          <div class="card">
            <img src="Only.png" alt="">
            <h4>charmander</h4>
            <p>pokemon tipo fuego</p>
          </div>
          <div class="card">
            <img src="Only.png" alt="">
            <h4>piplop</h4>
            <p>pokemon tipo agua</p>
          </div>
        </div>
      </div>
    </section>
    <section class="fondo">
      <div class="sesgoarriba"></div>
      <div class="contenedor">
        <h2 class="titulo-patrocinadores">Pymes mas conocidas</h2>
        <h3 class="subtitulo-patrocinadores">Conoce las pymes con mejor reputacion</h3>
        <div class="clientes">
          <!-- DENTRO DE LAS COMILLAS DE SRC SE PONEN LOS LOGOS DE LAS PYMES MAS CONOCIDAS, OSEA UN PNG DE LOS LOGOS -->
          <div class="cliente">
            <img src="logo.png" alt="">
          </div>
          <div class="cliente">
            <img src="logo1.png" alt="">
          </div>
          <div class="cliente">
            <img src="logo2.png" alt="">
          </div>
        </div>
        <h3 class="subtitulo-patrocinadores especial">y muchas más...</h3>
      </div>
      <div class="sesgoabajo-unico"></div>
    </section>
  </main>
  <footer>
    <div class="contenedor">
      <h2 class="titulo-footer">Contactanos</h2>
      <h3 class="subtitulo-footer">Todo sirve...</h3>
      <div class="footer">
        <form action="">
          <input type="text" name="" id="" placeholder="Nombre">
          <input type="email" name="" id="" placeholder="Email">
          <textarea name="" id="" cols="30" rows="10" placeholder="Ingrese su mensaje..."></textarea>
          <input type="submit" value="Enviar">
        </form>
      </div>
    </div>
  </footer>





  <form method="post">
    <p><input type="submit"></p>
  </form>
        <?php
        include("base.php");
        ?>




</body>

</html>
