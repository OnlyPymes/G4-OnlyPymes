<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<style type="text/css">
.boton {
  background-color: red;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
}
.green {
  background-color: #199319;
}

.red {
  background-color: red;
}
</style>

<div class="row" >
	<div class="col-sm-12 bg-holder">
	<h2>Panel de control - PYMES</h2>
		<table class="table table-hoaux table-condensed table-bordered oauxlay oauxlay-light"
        style="background-color:white">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nueva pyme
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td>Nombre</td>
				<td>Representante</td>
				<td>Rubro</td>
				<td>Estado</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id,nombre,representante,rubro,estado
						from pym where id='$idp'";
					}else{
						$sql="SELECT id,nombre,representante,rubro,estado
						from pym";
					}
				}else{
					$sql="SELECT id,nombre,representante,rubro,estado
						from pym";
				}

				$result=mysqli_query($conexion,$sql);
				while($aux=mysqli_fetch_row($result)){ 

					$datos=$aux[0]."||".
						   $aux[1]."||".
						   $aux[2]."||".
						   $aux[3]."||".
						   $aux[4]."||";

			 ?>

			<tr>
				<td><?php echo $aux[1] ?></td>
				<td><?php echo $aux[2] ?></td>
				<td><?php echo $aux[3] ?></td>
					<td><?php $estado = $aux[4]; 
				if($estado=="0"){
					echo
					"<a href=desactivar_pyme.php?id=" . $aux[0] . " class='boton red'>Deshabilitada</a>";
				}else{
					echo
					"<a href=activar_pyme.php?id=" . $aux[0] . " class='boton green' >Habilitada</a>";
				}
				?> 
	
	
</td>

				
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $aux[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>