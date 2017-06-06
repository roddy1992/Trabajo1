/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//ER SOLO TEXTO
function solotexto(e) {
    tecla = e.which || e.keyCode;
    patron = /[a-zA-Z\s?]/; // Solo acepta letras
    te = String.fromCharCode(tecla);
    return (patron.test(te) || tecla == 9 || tecla == 8);
}

//ER NUMERO TELEFONICO
function telefonovalido(campo) {
    //var RegExPattern = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;
    var RegExPattern = /^[0-9]{2,3}-? ?[0-9]{6,7}$/;
    if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
       document.getElementById('celularfabmal').style.display = 'none'; 
    } else {
        document.getElementById('celularfabmal').style.display = 'block';
        campo.focus();
    } 
}
//ER NUMERO TELEFONICO
function whatsappvalido(campo) {
    //var RegExPattern = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;
    var RegExPattern = /^[0-9]{2,3}-? ?[0-9]{6,7}$/;
    if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
        document.getElementById('whatfabmal').style.display = 'none'; 
    } else {
        document.getElementById('whatfabmal').style.display = 'block';
        campo.focus();
    } 
}

//ER NUMERO TELEFONICO
function telefonovalidoVen(campo) {
    //var RegExPattern = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;
    var RegExPattern = /^[0-9]{2,3}-? ?[0-9]{6,7}$/;
    if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
       document.getElementById('celularvenmal').style.display = 'none'; 
    } else {
        document.getElementById('celularvenmal').style.display = 'block';
        campo.focus();
    } 
}
//ER NUMERO TELEFONICO
function whatsappvalidoVen(campo) {
    //var RegExPattern = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;
    var RegExPattern = /^[0-9]{2,3}-? ?[0-9]{6,7}$/;
    if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
        document.getElementById('whatvenmal').style.display = 'none'; 
    } else {
        document.getElementById('whatvenmal').style.display = 'block';
        campo.focus();
    } 
}

//[a-zA-Z\s]\s[a-zA-Z\s]
//ER DESABILITA ESPACIO
function desable_sp(e) {
    tecla = e.which || e.keyCode;
    return  (tecla != 32);
}

// ER SOLO NUMEROS
function solonumeros(e) {
    tecla = e.which || e.keyCode;
    patron = /^([0-9])*$/; // Solo acepta números
    te = String.fromCharCode(tecla);
    return (patron.test(te) || tecla == 9 || tecla == 8);
}

//VALIDACION DE CAMPOS CON ER
$("#nombreRepre").keypress(function (event) {
    return solotexto(event);
});
$("#nombreVen").keypress(function (event) {
    return solotexto(event);
});
$("#dni").keypress(function (event) {
    return solonumeros(event);
});
$("#dniVen").keypress(function (event) {
    return solonumeros(event);
});
$("#cedularFab").keypress(function (event) {
    return solonumeros(event);
});
$("#celularVen").keypress(function (event) {
    return solonumeros(event);
});
$("#convencionalFab").keypress(function (event) {
    return solonumeros(event);
});
$("#whatsappFab").keypress(function (event) {
    return solonumeros(event);
    //return telefonovalido(event);
});
$("#convencionalVen").keypress(function (event) {
    return solonumeros(event);
});
$("#whatsappVen").keypress(function (event) {
    return solonumeros(event);
    //return telefonovalido(event);
});
$("#numeroProFa").keypress(function (event) {
    return solonumeros(event);
    //return telefonovalido(event);
});
function validarcedulaFab(){
                var i;
                var cedula;
                var acumulado;
                cedula = $('#dni').val();
                var instancia;
                acumulado = 0;
                for (i = 1; i <= 9; i++)
                {
                    if (i % 2 != 0)
                    {
                        instancia = cedula.substring(i - 1, i) * 2;
                        if (instancia > 9)
                            instancia -= 9;
                    }
                    else
                        instancia = cedula.substring(i - 1, i);
                    acumulado += parseInt(instancia);
                }
                while (acumulado > 0)
                    acumulado -= 10;
                if (cedula.substring(9, 10) != (acumulado * -1))
                {
                    //alert("Cedula no valida!!"); 
                     document.getElementById('celudafabmal').style.display = 'block';
                }else{
                    // alert("Cedula valida !!");
               document.getElementById('celudafabmal').style.display = 'none';
                }
               
            }
            
            function validarcedulaVen(){
                var i;
                var cedula;
                var acumulado;
                cedula = $('#dniVen').val();
                var instancia;
                acumulado = 0;
                for (i = 1; i <= 9; i++)
                {
                    if (i % 2 != 0)
                    {
                        instancia = cedula.substring(i - 1, i) * 2;
                        if (instancia > 9)
                            instancia -= 9;
                    }
                    else
                        instancia = cedula.substring(i - 1, i);
                    acumulado += parseInt(instancia);
                }
                while (acumulado > 0)
                    acumulado -= 10;
                if (cedula.substring(9, 10) != (acumulado * -1))
                {
                    //alert("Cedula no valida!!"); 
                     document.getElementById('celudavenmal').style.display = 'block';
                }else{
                    // alert("Cedula valida !!");
               document.getElementById('celudavenmal').style.display = 'none';
                }
               
            }