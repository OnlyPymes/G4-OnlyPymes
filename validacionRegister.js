const Swal = require('sweetalert2')


document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
  //PRESENTAR ESTO EN EL VIDEO
  function validarFormulario(){
    
    var usuario= document.getElementById("nombrepyme").value;
    if(usuario.length == 0 )
    {
      alert("el no se ha ingresado el nombre de usuario")
      
      return false;
    }
    var pass=document.getElementById("pwd").value;
    if (pass.length == 0 && pass.length<6 )
    {
        alert("La contraseña es demasiado corta.");
        return false;
    }
    
    return true;
  }