function valreg(){
    let registro = document.forms['registro'];
    let usuario = registro['Usuario'].value;
    var aux = true;
    if(usuario.length===0 || usuario.length>40)
    {
        alert("El nombre de usuario debe contener entre 0 y 40 caracteres");
        aux=false;   
    }
    let contraseña = registro['Contraseña'].value;
    if(contraseña.length===0 || contraseña.length>40)
    {
        alert("Debe ingresar una contraseña valida");
        aux=false;   
    }
    let email = registro['email'].value;
    if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}.){1,125}[A-Z]{2,63}$/i.test(registro ['email'].value)))
    {
        alert("Debe ingresar un correo valido");
        aux=false;   
    }
    let telefono = registro['telefono'].value;
    if(!(/^(+?56)?(\s?)(0?9)(\s?)[9876543]\d{7}$/.test(registro ['telefono'].value)))
    {
        alert("Debe ingresar un numero valido");
        aux=false;
    }
}