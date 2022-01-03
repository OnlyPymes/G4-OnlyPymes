
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Only Pymes</title>


  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon_32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon_16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="assets/css/temas.css" rel="stylesheet" />

</head>


<body>

  <!-- ===============================================-->
  <!--   HEADER -->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block"
      data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand d-inline-flex" href="index.php"><img class="d-inline-block"
            src="assets/img/galeria/logo.png" alt="logo" /><span
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
            <!-- ICONO USUARIO -->

            <a class="text-negrita-titulos" href="./HTML/iniciarsesion.php">
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
        style="background-image:url(assets/img/galeria/banner-fondo2.png);background-size:cover;">
      </div>


      <!-- TEXTO SOBRE IMAGEN PRINCIPAL-->

      <div class="container">
        <div class="row flex-center">
          <div class="col-12 mb-10">
            <div class="d-flex align-items-center flex-column">
              <h1 class="fw-normal">Vendedores como tú, para gente como tú</h1>
              <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Only Pymes</h1>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- PRIMERA SECCION || BANNER DE USUARIOS-->
    <section class="py-0" id="header" style="margin-top: -23rem !important;">

      <div class="container">
        <div class="row g-0">
          <div class="col-md-6">
            <div class="card card-span h-100 text-white"> <img class="img-fluid" src="assets/img/galeria/main_mujer.png"
                width="790"  />
            </div>
          </div>

          <div class="col-md-6">
            <div class="card card-span h-100 text-white"> <img class="img-fluid"
                src="assets/img/galeria/main_hombre.png" width="790" />
            </div>
          </div>
        </div>
      </div>
      <!-- FIN CONTENEDOR HEADER-->

    </section>




    <!-- ============================================-->
    <!-- SECCION MEJORES PRODUCTOS VENDIDOS-->
    <section class="py-0">

      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Productos más vendidos</h5>
          </div>
          <div class="col-12">

            <!-- CARRUSEL DE PRODUCTOS -->

            <div class="carousel slide" id="carouselBestDeals" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">

                  <!-- PANTUNFLAS OVEJA -->
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                          src="assets/img/galeria/producto-pantunflas.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-negrita-titulos text-truncate">Pantunflas Oveja</h5>
                          <div class="fw-bold"><span class="text-primary">$39.990</span></div>
                        </div><a class="stretched-link" href="HTML/productos/productos.php?id_pr=1&foto=pantunflas"></a>
                      </div>
                    </div>
                    <!-- MANJAR DE CAMPO -->

                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                          src="assets/img/galeria/producto-manjar.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-negrita-titulos text-truncate">Manjar De Campo</h5>
                          <div class="fw-bold"><span class="text-primary">$5.990</span></div>
                        </div><a class="stretched-link" href="HTML/productos/productos.php?id_pr=2&foto=manjar"></a>
                      </div>
                    </div>
                    <!-- DELANTAL -->

                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                          src="assets/img/galeria/producto-delantal.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-negrita-titulos text-truncate">Delantal Pingüino Magallánico</h5>
                          <div class="fw-bold"><span class="text-primary">$18.990</span></div>
                        </div><a class="stretched-link" href="HTML/productos/productos.php?id_pr=3&foto=delantal"></a>
                      </div>
                    </div>
                    <!-- HUMUS -->

                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                          src="assets/img/galeria/producto-humus.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-negrita-titulos text-truncate">Pack Hummus Variedades</h5>
                          <div class="fw-bold"><span class="text-primary">$11.990</span></div>
                        </div><a class="stretched-link" href="HTML/productos/productos.php?id_pr=4&foto=humus"></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- GORRO -->

                <div class="carousel-item" data-bs-interval="5000">
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                          src="assets/img/galeria/producto-gorro.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-negrita-titulos text-truncate">Gorro Lana</h5>
                          <div class="fw-bold"><span class="text-primary">$5.990</span></div>
                        </div><a class="stretched-link" href="HTML/productos/productos.php?id_pr=5&foto=gorro"></a>
                      </div>
                    </div>
                    <!-- BOLSA  -->

                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                          src="assets/img/galeria/producto-bolsa.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-negrita-titulos text-truncate">Bolsa Zorro Culpeo</h5>
                          <div class="fw-bold"><span class="text-primary">$10.990</span></div>
                        </div><a class="stretched-link" href="HTML/productos/productos.php?id_pr=6&foto=bolsa"></a>
                      </div>
                    </div>

                    <!-- JABON  -->

                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                          src="assets/img/galeria/producto-jabon.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-negrita-titulos text-truncate">Jabón De Ruda</h5>
                          <div class="fw-bold"><span class="text-primary">$4.490</span></div>
                        </div><a class="stretched-link" href="HTML/productos/productos.php?id_pr=7&foto=jabon"></a>
                      </div>
                    </div>
                    <!-- MORTERO  -->

                    <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                          src="assets/img/galeria/producto-mortero.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-negrita-titulos text-truncate">Mortero Piedra De Río</h5>
                          <div class="fw-bold"><span class="text-primary">$30.990</span></div>
                        </div><a class="stretched-link" href="HTML/productos/productos.php?id_pr=8&foto=mortero"></a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- FLECHAS CARRUSEL -->

                <div class="row">
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselBestDeals"
                    data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselBestDeals"
                    data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></button>
                </div>
              </div>
            </div>
          </div>

          <!-- BOTON VER PRODUCTOS -->
          <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">Ver
              productos</a></div>
        </div>
      </div>

    </section>

    <!-- SECCION DE MOSTRAR PYME DESTACADA Y PRODUCTOS-->
    <section>
      <div class="container">
        <div class="row h-100 g-0">
          <div class="col-md-6">
            <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
              <h4 class="texto-footer">Vendedor destacado</h4>
              <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Textiles NatuChile</h1>
              <p class="mb-5 fs-1">Emprendedora dedicada a fabricación de textiles junto a bellas ilustrasiones de flora
                y fauna chilena ¡¡Felicitaciones!!</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-span h-100 text-white"><img class="card-img h-100"
                src="assets/img/galeria/emprendedor-destacado.png" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1"
                    href="#!" role="button">Ir a perfil
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                      fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row h-100 g-2 py-1">
          <div class="col-md-4">
            <div class="card card-span h-100 text-white"><img class="card-img h-100"
                src="assets/img/galeria/emprendedor-textiles.png" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1"
                    role="button">Textiles</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-span h-100 text-white"><img class="card-img h-100"
                src="assets/img/galeria/emprendedor-tienda.png" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1"
                    role="button">Arte</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-span h-100 text-white"><img class="card-img h-100"
                src="assets/img/galeria/emprendedor-natural.png" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1"
                    role="button">Natural</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
      <!-- FOOTER -->

    <div class="container">
      <div class="row">
        <div class="col-6">
          <h5 class="lh-lg fw-bold text-negrita-titulos">OnlyPymes</h5>
            <a class="texto-footer text-decoration-none" >Todos los derechos reservados ®</a></li>
          </ul>
        </div>
 <!-- FOOTER ANTIGUO
        <div class="col-6 col-lg-2 mb-3">
          <h5 class="lh-lg fw-bold text-negrita-titulos">Empresa</h5>
          <ul class="list-unstyled mb-md-4 mb-lg-0">
            <li class="lh-lg"><a class="texto-footer text-decoration-none" href="#!">Acerca de nosotros</a></li>
            <li class="lh-lg"><a class="texto-footer text-decoration-none" href="#!">Vendedores asociados</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5 class="lh-lg fw-bold text-negrita-titulos">Ayuda y soporte</h5>
          <ul class="list-unstyled mb-md-4 mb-lg-0">
            <li class="lh-lg"><a class="texto-footer text-decoration-none" href="#!">Información Envío</a></li>
            <li class="lh-lg"><a class="texto-footer text-decoration-none" href="#!">Reembolsos</a></li>
            <li class="lh-lg"><a class="texto-footer text-decoration-none" href="#!">Tarifas</a></li>
            <li class="lh-lg"><a class="texto-footer text-decoration-none" href="#!">Reclamos</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5 class="lh-lg fw-bold text-negrita-titulos">Únete a nosotros</h5>
          <ul class="list-unstyled mb-md-4 mb-lg-0">
            <li class="lh-lg"><a class="texto-footer text-decoration-none" href="#!">Formulario</a></li>
            <li class="lh-lg"><a class="texto-footer text-decoration-none" href="#!">Preguntas Frecuentes</a></li>
          </ul>
        </div>
-->

        <div class="col-sm-6 col-lg-auto ms-auto">
          <p class="texto-footer">
            <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
              </path>
            </svg><span class="texto-footer">+123456789</span>
          </p>
          <p class="texto-footer">
            <svg class="feather feather-mail me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg><span class="texto-footer">onlypymes@gmail.com</span>
          </p>
        </div>
      </div>

            <!-- REDES SOCIALES -->

      <div class="border-bottom border-3"></div>
      <div class="row flex-center my-3">
        <div class="col-md-6 order-1 order-md-0">
        </div>
        <div class="col-md-6">
          <div class="text-center text-md-end"><a href="#!"><span class="me-4" data-feather="facebook"></span></a><a
              href="#!"> <span class="me-4" data-feather="instagram"></span></a><a href="#!"> <span class="me-4"
                data-feather="youtube"></span></a><a href="#!"> <span class="me-4" data-feather="twitter"></span></a>
          </div>
        </div>
      </div>
    </div>

    </section>


  </main>



  <!--    JavaScripts-->
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
