document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
  //PRESENTAR ESTO EN EL VIDEO
  function validarFormulario(evento){
    evento.preventDefault();
    var usuario= document.getElementById("nombrepyme").value;
    if(usuario.length == 0 )
    {
        alert("No se ha ingresado nada en el campo de nombre de pyme.");
    }
    var pass=document.getElementById("pwd").value;
    if (pass.length == 0 && pass.length<6 )
    {
        alert("La contraseña es demasiado corta.");
    }
    
    this.submit();
  }