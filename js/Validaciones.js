function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function validaciones() {

    var retorno = false;
    try {
      
        var id = document.getElementById('id2').value;

      
        if (id == null || id.length == 0 || !(/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(id))) {
            alert('Digito mal el id, favor corregir');
            return retorno;
        }

        var Nombre = document.getElementById('Nombre2').value;
        if (Nombre == null || Nombre.length == 0 || /^\s+$/.test(Nombre)) {
            return false;
        }

       
        var apellido1 = document.getElementById("Apellidos2_1");

        if (apellido1 == null || apellido1.length == 0 || /^\s+$/.test(apellido1)) {
            return false;
        }

        var apellido2 = document.getElementById("Apellidos2_2");

        if (apellido2 == null || apellido2.length == 0 || /^\s+$/.test(apellido2)) {
            return false;
        }


        var usuario = document.getElementById("Usuario2");

        if (usuario == null || usuario.length == 0 || /^\s+$/.test(usuario)) {
            return false;
        }

        var pass = document.getElementById("pswd2");

        if (pass == null || pass.length == 0 || /^\s+$/.test(pass)) {
            return false;
        }

        

        if (retorno) {
            //Almacena la información del usuario en cookies
            setCookie("nombre", Nombre, 30);

            //Almacena la información en variables de sesion
            sessionStorage.setItem("PrimerApellido", apellido1);
            sessionStorage.setItem("SegundoApellido", apellido2);

            //Almacena la información del día y doctor en localStorage
            localStorage.setItem("Usuario", usuario);
           alert("El usuario se ingreso con exito");
        }
    } catch (error) {
        retorno = false;
    }
    //Cuando se ejecuta un evento submit y el resultado de la función javaScript es true
    //La información se envía al servidor, caso contrario no se realiza el envió al servidor.aviso
    return retorno;

}
//Validacion de Arribar--------------------------------------------------
function validacionArribar(){
    var retorno = true;

    try {
          
        var nombreBarco = document.getElementById('nombreBarco').value;

        if (nombreBarco == null || nombreBarco.length == 0 || !(/^([A-Z]{1}[a-zñáéíóú]+[\p{Space}]*)+$/.test(nombreBarco))) {
            alert('Digito mal el nombre del barco');
            return retorno = false;
        }

        var omi = document.getElementById('omi').value;

        if (omi == null || omi.length == 0 || isNaN(omi)) {
            alert('Digito mal el OMI del barco, solo se aceptan numeros');
            return retorno = false;
        }

        var cantidadContenedores = document.getElementById('cantidadContenedores').value;

        if (cantidadContenedores == null || cantidadContenedores.length == 0 || isNaN(cantidadContenedores)) {
            alert('Introdujo una cantidad incorrecta de contenedores,  solo se aceptan numeros');
            return retorno= false;
        }

        var peso = document.getElementById('peso').value;

        if (peso == null || peso.length == 0 || isNaN(peso)) {
            alert('Introdujo un peso invalido,  solo se aceptan numeros');
            return retorno = false;
        }

        var idProducto = document.getElementById("tipoProducto").value;
        if(idProducto <1 || idProducto >4 ){
            alert("Tipo de producto es invalido, favor ingresar uno correcto");
            return retorno = false;
        }
        
        if (retorno) {
            //Almacena la información del paciente en cookies
            setCookie("NombreBarco", nombreBarco, 30);

            //Almacena la información de la hora y padecimient en variables de sesion
            sessionStorage.setItem("omi", omi);
            
            //Almacena la información del día y doctor en localStorage
            localStorage.setItem("cantidadContenedores", cantidadContenedores);
            localStorage.setItem("peso", peso);
            localStorage.setItem("idProducto", idProducto);
           
        }
    } catch (error) {
        retorno = false;
        alert("Catch error "+ error);
    }
    return retorno;
}

// Validacion de Actualizar----------------------------------------------
function ValidarActualizacion(){
    var retorno = true;

    try {
         
        var nombreBarco = document.getElementById('nombreBarco').value;

        if (nombreBarco == null || nombreBarco.length == 0 || !(/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(nombreBarco))) {
            alert('Digito mal el nombre del barco');
            return retorno = false;
        }

        var omi = document.getElementById('omi').value;

        if (omi == null || omi.length == 0 || isNaN(omi)) {
            alert('Digito mal el OMI del barco, solo se aceptan numeros');
            return retorno = false;
        }

        var cantidadContenedores = document.getElementById('cantidadContenedores').value;

        if (cantidadContenedores == null || cantidadContenedores.length == 0 || isNaN(cantidadContenedores)) {
            alert('Introdujo una cantidad incorrecta de contenedores,  solo se aceptan numeros');
            return retorno= false;
        }

        var peso = document.getElementById('peso').value;

        if (peso == null || peso.length == 0 || isNaN(peso)) {
            alert('Introdujo un peso invalido,  solo se aceptan numeros');
            return retorno = false;
        }

        var idProducto = document.getElementById("tipoProducto").value;
        if(idProducto < 1 || idProducto > 4 ){
            alert("Tipo de producto es invalido, favor ingresar uno correcto");
            return retorno = false;
        }
        
        if (retorno) {
            //Almacena la información del paciente en cookies
            setCookie("NombreBarco", nombreBarco, 30);

            //Almacena la información de la hora y padecimient en variables de sesion
            sessionStorage.setItem("omi", omi);
            
            //Almacena la información del día y doctor en localStorage
            localStorage.setItem("cantidadContenedores", cantidadContenedores);
            localStorage.setItem("peso", peso);
            localStorage.setItem("idProducto", idProducto);
           
        }
    } catch (error) {
        retorno = false;
        alert("Catch error: "+ error);
    }
    //Cuando se ejecuta un evento submit y el resultado de la función javaScript es true
    //La información se envía al servidor, caso contrario no se realiza el envió al servidor.aviso
    return retorno;
}