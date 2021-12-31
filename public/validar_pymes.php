<?php
$con = mysqli_connect("localhost", "raygh", "4172", "pymes_test");
$sql = "SELECT * FROM `pym`";
$Sql_query = mysqli_query($con, $sql);
$all_pymes = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Only Pymes</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon_32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon_16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="assets/css/theme.css" rel="stylesheet" />

</head>


<body>

  <!-- ===============================================-->
  <!--   HEADER -->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block"
      data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block"
            src="assets/img/gallery/logo.png" alt="logo" /><span
            class="text-negrita-titulos fs-0 fw-bold ms-2">OnlyPymes</span></a>
        <button class="navbar-toggler collapsed" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-2"><a class="nav-link fw-medium active" href="index_prueba.html">Principal</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-medium" href="tiendas.html">Tiendas</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-medium" href="categorias.html">Categorías</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-medium" href="contactanos.html">Contáctanos</a></li>
            <li>
              <!-- BARRA BUSQUEDA -->
              <div class="box">
                <div>
                  <input type="search" id="search" placeholder="Busca productos..." />
                </div>
              </div>
            </li>
          </ul>
          <form class="d-flex">
            <!-- ICONO CARRITO -->
            <a class="text-negrita-titulos" href="#!">
              <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg></a>
            <!-- ICONO LUPA -->
            <a class="text-negrita-titulos" href="#!">
              <svg class="feather feather-search me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg></a>
            <!-- ICONO CARRITO -->

            <a class="text-negrita-titulos" href="#!">
              <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg></a><a class="text-negrita-titulos" href="#!">
            </a>
          </form>
        </div>
      </div>
    </nav>
    <section class="py-11 bg-light-gradient border-bottom">
      <div class="bg-holder overlay overlay-light"
        style="background-image:url(assets/img/gallery/banner-fondo2.png);background-size:cover;">
      </div>


      <!-- TEXTO SOBRE IMAGEN PRINCIPAL-->

      <div class="container">
        <div class="row flex-center">
          <div class="col-12 mb-10">
            <div class="d-flex align-items-center flex-column">
            <table style="background-color: #F2F5FD">

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
                                if ($pyme['estado'] == "0")
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
          </div>
        </div>
      </div>
    </section>


    </section>





    </section>


  </main>



  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/feather-icons/feather.min.js"></script>
  <script>
    feather.replace();
  </script>
  <script src="assets/js/theme.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600texto-footer;900&amp;display=swap"
    rel="stylesheet">
</body>

</html>