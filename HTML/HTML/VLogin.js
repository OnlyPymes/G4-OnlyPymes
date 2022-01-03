function vallog()
{
    let formulario = document.forms['formulario'];
    let usuario = formulario['Usuario'].value;
    var aux = true;
    if(usuario.length===0 || usuario.length>40)
    {
        alert("El nombre de usuario debe contener entre 0 y 40 caracteres");
        aux=false;   
    }
    let contraseña = formulario['Contraseña'].value;
    if(contraseña.length===0 || contraseña.length>40)
    {
        alert("Debe ingresar una contraseña valida");
        aux=false;   
    }
    formulario.submit();
    return true;
}