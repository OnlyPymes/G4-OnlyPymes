

function agregardatos(nombre_pyme,email,telefono_pyme){

	cadena="nombre_pyme=" + nombre_pyme + 
			"&email=" + email +
			"&telefono_pyme=" + telefono_pyme;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("Agregado con exito");
			}else{
				alertify.error("Fallo el servidor");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idpyme').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#emailu').val(d[2]);
	$('#telefonou').val(d[3]);	
}

function actualizaDatos(){


	id=$('#idpyme').val();
	nombre_pyme=$('#nombreu').val();
	email=$('#emailu').val();
	telefono_pyme=$('#telefonou').val();

	cadena= "id=" + id +
			"&nombre_pyme=" + nombre_pyme + 
			"&email=" + email +
			"&telefono_pyme=" + telefono_pyme;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con éxito");
			}else{
				alertify.error("Fallo el servidor");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con éxito!");
				}else{
					alertify.error("Fallo el servidor");
				}
			}
		});
}