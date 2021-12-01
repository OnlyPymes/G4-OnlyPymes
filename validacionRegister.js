const Swal = require('sweetalert2')


document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
  //PRESENTAR ESTO EN EL VIDEO
  function validarFormulario(){
    
    var usuario= document.getElementById("nombrepyme").value;
    if(usuario.length == 0 )
    {
      Swal.fire({
        title: 'Error en usuario',
        text: 'no se ha ingresado un usuario para registrar',
        icon: 'error',
        confirmButtonText: 'Cool'
      })
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