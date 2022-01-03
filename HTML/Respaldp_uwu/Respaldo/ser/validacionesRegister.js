document.addEventListener("DOMContentLoaded",function(){
    document.getElementById("formulario").addEventListener('submit',validarFormulario);
});

function validarFormulario(evento){
 evento.preventDefault();
 var nombrepyme= document.getElementById("nombrepyme").value;
 if(nombrepyme.length == 0)
 {
     alert('No se ha ingresado valores en el campo de usuario');
 }

 this.sub
}
