<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

	$sql="SELECT id_pyme,nombre_pyme,email,telefono_pyme,id_validacion
	from pyme";
				$result=mysqli_query($conexion,$sql);
/*
	require_once "../php/conexion.php";
	$conexion=conexion();

	$sql="SELECT id,nombre,representante,rubro,id
	from pyme";
				$result=mysqli_query($conexion,$sql);

*/
 ?>
<br><br>
<div class="row">
	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		<label>Buscador</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">Selecciona pyme</option>
			<?php
				while($aux=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $aux[0] ?>">
					<?php echo $aux[1] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tabla.php');
					}
				});
			});
		});
	</script>