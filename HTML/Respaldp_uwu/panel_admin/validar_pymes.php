<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>

<?php
$con = mysqli_connect("localhost", "raygh", "4172", "pymes_test");
$sql = "SELECT * FROM `pym`";
$Sql_query = mysqli_query($con, $sql);
$all_pymes = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Panel Administrador</title>

  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon_32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon_16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
  <link rel="manifest" href="../assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <link href="../assets/css/temas.css" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
  <link rel="stylesheet" href="componentes/estilos.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<body>


    <section class="py-11 bg-light-gradient border-bottom">
      
      <div class="bg-holder overlay overlay-light"
        style="background-image:url(../assets/img/galeria/admin_panel.png);background-size:cover;">
      </div>  

    </section>
	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva pyme</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Representante</label>
        	<input type="text" name="" id="representante" class="form-control input-sm">
        	<label>Rubro</label>
        	<input type="text" name="" id="rubro" class="form-control input-sm">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idpyme" name="">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombreu" class="form-control input-sm">
        	<label>Representante</label>
        	<input type="text" name="" id="representanteu" class="form-control input-sm">
        	<label>Rubro</label>
        	<input type="text" name="" id="rubrou" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
  
</div>
</section>
      <!-- FOOTER -->

          <div class="col-md-6">
          <div class="text-center text-md-end"><h5 class="lh-lg fw-bold text-negrita-titulos"><img src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/64/000000/external-admin-computer-and-laptop-itim2101-lineal-color-itim2101-1.png"/><span class="me-4" >MODO ADMINISTRADOR</span></h5>
          </div>
        </div>

    </section>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          nombre=$('#nombre').val();
          representante=$('#representante').val();
          rubro=$('#rubro').val();
            agregardatos(nombre,representante,rubro);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>