
function mostrarValores(){
    let formulario=document.forms['formulario'];
    let rut = formulario['rut'].value;
    var bandera=true;
    if(!VerificaRut(rut)){
        
        alert("Error, se ha ingresado mal el rut");
        //buscar diseños de alerta para js
        bandera=false;
        return bandera;
    }
    let nombrepy= formulario['npyme'].value;
   
    if(nombrepy.length===0 || nombrepy.length>40)
    {
        alert("El tamaño del nombre debe ser mayor a 0 y menor a 40 caracteres");
        bandera=false;
        return bandera;
    }
    let pass=formulario['pwd'].value
    if(pass.length===0 || pass.length>40)
    {
        alert("El tamaño de la contraseña debe ser mayor a 0 y menor a 40 caracteres");
        bandera=false;
        return bandera;
    }
    if(!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(formulario['email'].value)))
    {
        alert("El correo ingresado es incorrecto");
        bandera=false;
        return bandera;
    }
    if(!(/^(\+?56)?(\s?)(0?9)(\s?)[9876543]\d{7}$/.test(formulario['numerotelefono'].value)))
    {
        alert("El numero ingresado no es valido");
        bandera=false;
        return bandera;
    }
    
    if(formulario['seleccionar'].value ==='0')
    {
        alert('No puede seleccionar el valor inicial')
        bandera=false;  
        return bandera; 
    }
    if(!bandera){
        return false;
    }
    formulario.submit();
    return true;
  }


  
  function VerificaRut(rut) {
    if (rut.toString().trim() != '' && rut.toString().indexOf('-') > 0) {
        var caracteres = new Array();
        var serie = new Array(2, 3, 4, 5, 6, 7);
        var dig = rut.toString().substr(rut.toString().length - 1, 1);
        rut = rut.toString().substr(0, rut.toString().length - 2);

        for (var i = 0; i < rut.length; i++) {
            caracteres[i] = parseInt(rut.charAt((rut.length - (i + 1))));
        }

        var sumatoria = 0;
        var k = 0;
        var resto = 0;

        for (var j = 0; j < caracteres.length; j++) {
            if (k == 6) {
                k = 0;
            }
            sumatoria += parseInt(caracteres[j]) * parseInt(serie[k]);
            k++;
        }

        resto = sumatoria % 11;
        dv = 11 - resto;

        if (dv == 10) {
            dv = "K";
        }
        else if (dv == 11) {
            dv = 0;
        }

        if (dv.toString().trim().toUpperCase() == dig.toString().trim().toUpperCase())
            return true;
        else
            return false;
    }
    else {
        return false;
    }
}