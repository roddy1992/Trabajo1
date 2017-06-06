/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
// cuando pierde el foco, este valida si lo que esta en el campo de texto si es un correo o no y muestra una respuesta
    $('form').find('input[type=email]').blur(function () {
        caracteresCorreoValido($(this).val(), '#xmail')
    });
    $('.enviarnuevaclave').click(function (e){
        e.preventDefault();
        llamadaEditarClaveUsuario();
    });
});


function clavesiguales() {
    var clave1 = $('#claveusuario').val();
    var clave2 = $('#claveusuario1').val();

    if (clave1 == clave2) {
        document.getElementById('claveigual').style.display = 'block';
        document.getElementById('clavemal').style.display = 'none';
    } else {
        document.getElementById('clavemal').style.display = 'block';
        document.getElementById('claveigual').style.display = 'none';
    }
}

function  ocultar() {
    document.getElementById('clavemal').style.display = 'none';
    document.getElementById('claveigual').style.display = 'none';

}

// funcion para validar el correo
function caracteresCorreoValido(email, div) {
    console.log(email);
    //var email = $(email).val();
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

    if (caract.test(email) == false) {
        $(div).hide().removeClass('hide').slideDown('fast');

        return false;
    } else {
        $(div).hide().addClass('hide').slideDown('slow');
        //        $(div).html('');
        return true;
    }
}

//// INICIO ENVIAR MAIL NUEVA CLAVE
function correonuevaclave() {
    var usuario = $('#nombreusuario').val();
    var clave = $('#claveusuario').val();
    var correonuevo = $('#correoenviarRC').val();
    $.ajax({
        url: 'PHP/envionuevaclave.php',
        data: {co: correonuevo, usu: usuario, cla: clave},
        type: 'POST',
        dataType: 'json',
        success: function (json) {

        }
    });
}
//// FIN ENVIAR MAIL NUEVA CLAVE

function llamadaEditarClaveUsuario() {
    var usuario = $('#nombreusuario').val();
    var clave = $('#claveusuario').val();
    var clave1 = $("#claveusuario1").val();
    if (usuario == '' || clave == '' || clave1 == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        if (clave == clave1) {
            $.ajax({
                url: 'PHP/controlador.php',
                data: {opcion: 48, usu: usuario, clave: clave},
                type: 'GET',
                success: function (json) {
                    alert('Datos Cambiados con exito');
                    correonuevaclave();
                    //window.location = 'crearfabricanteAdministrador.php';
                },
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema' + status);
                },
                // código a ejecutar sin importar si la petición falló o no
                complete: function (xhr, status) {
                    //alert('Petición realizada');
                    window.location = 'index.html';
                }
            });
        }

    }
}