/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    $(".enviarFab").click(function (e) {
        e.preventDefault();
        llamadaInsertarFabrica();
    });

    $(".enviarVen").click(function (e) {
        e.preventDefault();
        llamadaInsertarVendedor();
    });
    $(".consultareportesemanalAdm").click(function (e) {
        mostrarconsultasemanalAdministrador();
        mostrarconsultasemanaldevendedoresAdministrador();
        mostrarconsultasemanaldefabricasAdministrador();
        mostargananciasemanalDueno();
    });
    $(".consultareporteventasfabricasAdm").click(function (e) {
        e.preventDefault();
        mostrarconsultaventasdeunafabricaAdministrador();
    });
    $(".consultareporteventasvendedoresAdm").click(function (e) {
        e.preventDefault();
        mostrarconsultaventasdeunvendedorAdministrador();
    });
    $("#vendedoreslistaAd").click(function (e) {
        e.preventDefault();
        mostrarconsultavendedoresconsufabricaAdministrador();
    });
    $("#vendedoresactivosAd").click(function (e) {
        e.preventDefault();
        mostrarconsultavendedoresactivosconsufabricaAdministrador();
    });
    $("#vendedoresinactivosAd").click(function (e) {
        e.preventDefault();
        mostrarconsultavendedoresinactivosconsufabricaAdministrador();
    });
    $("#fabricasactivosAd").click(function (e) {
        e.preventDefault();
        mostrarconsultafabricasactivosconsusvendedoresAdministrador();
    });
    $("#fabricasinactivosAd").click(function (e) {
        e.preventDefault();
        mostrarconsultafabricasinactivosconsusvendedoresAdministrador();
    });
    $(".guardarcambiosmodalConf").click(function (e) {
        e.preventDefault();
        llamadaEditarConfiguracion();
    });

    $('#vendedoressinUsuario').change(function (e) {
        var optionSelected = $(this);
        var valueSelected = optionSelected.val();
        datosvendedoresinUsuario(valueSelected);
    });

    $(".enviarvendedorsinUsuario").click(function (e) {
        e.preventDefault();
        llamadaIngresoNuevoUsuario();        
    });
    $('#fabricassinUsuario').change(function (e) {
        var optionSelected = $(this);
        var valueSelected = optionSelected.val();
        datosfabricasinUsuario(valueSelected);
    });
     $(".enviarFabsinUsuario").click(function (e) {
        e.preventDefault();
        llamadaIngresoNuevoUsuarioFab();        
    });

    mostrarconsultadiariaAdministrador();
    mostrarconsultadiariadevendedoresAdministrador();
    mostrarconsultasdiariadefabricasAdministrador();
    mostrarconsultavaloresdeconfiguracion();
    llamadocomboVendedoressinUsuario();
    llamadocomboFabricassinUsuario();
    mostarusuariosVendedores();
    mostargananciadiariaDueno();

});

function llamadaInsertarFabrica() {
    var valorcod = $('#codigoFab').val();
    var nombrere = $("#nombreRepre").val();
    var ci = $("#dni").val();
    var nombrefab = $("#nombreFab").val();
    var direcfab = $("#direccionFab").val();
    var celularfab = $("#cedularFab").val();
    var convencionalfab = $("#convencionalFab").val();
    var whatfab = $("#whatsappFab").val();
    var correofab = $("#correoFab").val();
    if (valorcod == '' || nombrere == '' || ci == '' || nombrefab == '' || direcfab == '' || celularfab == '' || convencionalfab == '' || whatfab == '' ||correofab =='') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 1, valor1: valorcod, valor2: nombrere, valor3: ci, valor4: nombrefab, valor5: direcfab, valor6: celularfab, valor7: convencionalfab, valor8: whatfab,valor9:correofab},
            type: 'GET',
            success: function (json) {
                alert('Fabricante Creado con Exito')
               // document.getElementById('success_message_Fab').style.display = 'block';
                //window.location = 'crearfabricanteAdministrador.php';
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'crearfabricanteAdministrador.php';
            }

        });
    }
}

function llamadaInsertarVendedor() {
    var valorcodv = $('#codigoVen').val();
    var codigoan = $("#codigoAnf").val();
    var nombreven = $("#nombreVen").val();
    var civen = $("#dniVen").val();
    var pasven = $("#pasaporteVen").val();
    var direcven = $("#direccionVen").val();
    var celularven = $("#celularVen").val();
    var convencionalven = $("#convencionalVen").val();
    var whatven = $("#whatsappVen").val();
    var fabligven = $("#fabricaligadaVen").val();
    var correoven = $("#correoVen").val();
    if (valorcodv == '' || nombreven == '' || direcven == '' || celularven == '' || convencionalven == '' || whatven == '' || fabligven == '' || correoven == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 2, codigo: valorcodv, anfi: codigoan, nombre: nombreven, ci: civen, pasa: pasven, dire: direcven, celular: celularven, conven: convencionalven, what: whatven, fabli: fabligven, correo: correoven},
            type: 'GET',
            success: function (json) {
               // document.getElementById('success_message_Ven').style.display = 'block';
                alert('Vendedor Ingresado con Exito');
                //window.location = 'crearfabricanteAdministrador.php';
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'crearvendedorAdministrador.php';
            }

        });
    }
}

//// INICIO MOSTRAR CONSULTA DIARIA ADMINISTRADOR
function mostrarconsultadiariaAdministrador() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 26},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tabladiariaAdministrador(json);
        }
    });
}
function tabladiariaAdministrador(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].fechaCF + '</td>';
        texto2 += '<td>' + data[i].codVenF + '</td>';
        texto2 += '<td>' + data[i].cantidadPF + '</td>';
        texto2 += '<td>' + data[i].codFabF + '</td>';
        texto2 += '</tr>';
    }
    $("#tabladiariaAdministrador").html(texto2);
}
//// FIN MOSTRAR CONSULTA DIARIA ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA SEMANAL ADMINISTRADOR
function mostrarconsultasemanalAdministrador() {
    var fechainicio = $('#fechainicioAdmin').val();
    var fechafin = $('#fechafinAdmin').val();
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 27, Finicio: fechainicio, Ffin: fechafin},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablasemanalAdministrador(json);
        }
    });
}
function tablasemanalAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].fechaCF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].codVenF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].cantidadPF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].codFabF + '</td>';
        texto2 += '</tr>';
    }
    $("#tablasemanalAdministrador").html(texto2);
}
//// FIN MOSTRAR CONSULTA SEMANAL ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA GANANCIAS SEMANAL DE VENDEDORES ADMINISTRADOR
function mostrarconsultasemanaldevendedoresAdministrador() {
    var fechainicio = $('#fechainicioAdmin').val();
    var fechafin = $('#fechafinAdmin').val();
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 28, Finicio: fechainicio, Ffin: fechafin},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablasemanaldevendedoresAdministrador(json);
        }
    });
}
function tablasemanaldevendedoresAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoVende + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].ganancia + '</td>';
        texto2 += '</tr>';
    }
    $("#tablagananciasemanandvendedorAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA GANANCIAS SEMANAL DE VENDEDORES ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA GANANCIAS SEMANAL DE FABRICAS ADMINISTRADOR
function mostrarconsultasemanaldefabricasAdministrador() {
    var fechainicio = $('#fechainicioAdmin').val();
    var fechafin = $('#fechafinAdmin').val();
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 29, Finicio: fechainicio, Ffin: fechafin},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablasemanaldefabricasAdministrador(json);
        }
    });
}
function tablasemanaldefabricasAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoFab + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].ganancia + '</td>';
        texto2 += '</tr>';
    }
    $("#tablagananciasemanandfabricaAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA GANANCIAS SEMANAL DE FABRICAS ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA GANANCIAS DIARIA DE VENDEDORES ADMINISTRADOR
function mostrarconsultadiariadevendedoresAdministrador() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 30},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tabladiariadevendedoresAdministrador(json);
        }
    });
}
function tabladiariadevendedoresAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoVende + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].ganancia + '</td>';
        texto2 += '</tr>';
    }
    $("#tablagananciadiariavendedorAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA GANANCIAS DIARIA DE VENDEDORES ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA GANANCIAS DIARIA DE FABRICAS ADMINISTRADOR
function mostrarconsultasdiariadefabricasAdministrador() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 31},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tabladiariadefabricasAdministrador(json);
        }
    });
}
function tabladiariadefabricasAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoFab + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].ganancia + '</td>';
        texto2 += '</tr>';
    }
    $("#tablagananciadiariafabricaAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA GANANCIAS DIARIA DE FABRICAS ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA VENTAS DE UNA FABRICA EN UN TIEMPO ADMINISTRADOR
function mostrarconsultaventasdeunafabricaAdministrador() {
    var codfab = $('#codFabbusqueda').val();
    var fechainicio = $('#fechainicioventasFab').val();
    var fechafin = $('#fechafinventasFab').val();
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 32, codFab: codfab, Finicio: fechainicio, Ffin: fechafin},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablaventasdefabricaAdministrador(json);
        }
    });
}
function tablaventasdefabricaAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].fecha + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoFab + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].nombreF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].codven + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].cantidadPF + '</td>';
        texto2 += '</tr>';
    }
    $("#tablaconsultaventasfabricaAd").html(texto2);
}
//// FIN MOSTRAR CONSULTA GVENTAS DE UNA FABRICA EN UN TIEMPO ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA VENTAS DE UN VENDEDOR EN UN TIEMPO ADMINISTRADOR
function mostrarconsultaventasdeunvendedorAdministrador() {
    var codfab = $('#codVenbusqueda').val();
    var fechainicio = $('#fechainicioventasVen').val();
    var fechafin = $('#fechafinventasVen').val();
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 33, codVen: codfab, Finicio: fechainicio, Ffin: fechafin},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablaventasdevendedorAdministrador(json);
        }
    });
}
function tablaventasdevendedorAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].fechacompra + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].codven + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].nombreV + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].codFabF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].cantidadPF + '</td>';
        texto2 += '</tr>';
    }
    $("#tablaventasvendedoresAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA GVENTAS DE UN VENDEDOR EN UN TIEMPO ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA VENDEDORES CON SU FABRICA ADMINISTRADOR
function mostrarconsultavendedoresconsufabricaAdministrador() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 34},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablavendedoresconsufabricaAdministrador(json);
        }
    });
}
function tablavendedoresconsufabricaAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoVen + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].fabIngreso + '</td>';
        texto2 += '</tr>';
    }
    $("#tablavendedoresdesdeAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA VENDEDORES CON SU FABRICA ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA VENDEDORES ACTIVOS CON SU FABRICA ADMINISTRADOR
function mostrarconsultavendedoresactivosconsufabricaAdministrador() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 35},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablavendedoresactivosconsufabricaAdministrador(json);
        }
    });
}
function tablavendedoresactivosconsufabricaAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codVenF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].fabIngreso + '</td>';
        texto2 += '</tr>';
    }
    $("#tablavendedoresdesdeAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA VENDEDORES ACTIVO CON SU FABRICA ADMINISTRADOR

//// INICIO MOSTRAR CONSULTA VENDEDORES INACTIVOS CON SU FABRICA ADMINISTRADOR
function mostrarconsultavendedoresinactivosconsufabricaAdministrador() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 36},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablavendedoresinactivosconsufabricaAdministrador(json);
        }
    });
}
function tablavendedoresinactivosconsufabricaAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoVen + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].fabIngreso + '</td>';
        texto2 += '</tr>';
    }
    $("#tablavendedoresdesdeAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA VENDEDORES INACTIVO CON SU FABRICA ADMINISTRADOR


//// INICIO MOSTRAR CONSULTA FABRICAS ACTIVOS CON SUS VENDEDORES
function mostrarconsultafabricasactivosconsusvendedoresAdministrador() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 37},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablafabricasactivosconsusvendedoresAdministrador(json);
        }
    });
}
function tablafabricasactivosconsusvendedoresAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoFab + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].vendedores + '</td>';
        texto2 += '</tr>';
    }
    $("#tablafabricasdesdeAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA FABRICAS ACTIVOS CON SUS VENDEDORES

//// INICIO MOSTRAR CONSULTA FABRICAS INACTIVOS CON SUS VENDEDORES
function mostrarconsultafabricasinactivosconsusvendedoresAdministrador() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 38},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablafabricasinactivosconsusvendedoresAdministrador(json);
        }
    });
}
function tablafabricasinactivosconsusvendedoresAdministrador(data) {
    texto2 = '';
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoFab + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].vendedores + '</td>';
        texto2 += '</tr>';
    }
    $("#tablafabricasdesdeAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA FABRICAS ACTIVOS CON SUS VENDEDORES

//// INICIO MOSTRAR CONSULTA MOSTRAR VALORES DE CONFIGURACON DLE SISTEMA
function mostrarconsultavaloresdeconfiguracion() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 39},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablaconfiguracion(json);
        }
    });

}
function tablaconfiguracion(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].valorMinimo + '</td>';
        texto2 += '<td>' + data[i].valorMaximo + '</td>';
        texto2 += '<td>' + data[i].Categoria + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].gananciaVen + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].gananciaFab + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].gananciaDue + '</td>';
        texto2 += '<td>';
        texto2 += "<button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#modalconfiguracion' onclick='modalconfiguracion(" + data[i].id_rango + ")'>Editar<span class='glyphicon glyphicon-edit'></span></button></td>";
        texto2 += '</tr>';
    }
    $("#tablainicioAdministrador").html(texto2);
}

function modalconfiguracion(indice) {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 40, idR: indice},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                document.getElementById("idtablaConf").value = json[i].id_rango;///////////// SETEAR DATOS EN EL FORMULARIO
                document.getElementById("valorminimoConf").value = json[i].valorMinimo;///////////// SETEAR DATOS EN EL FORMULARIO
                document.getElementById("valormaximoConf").value = json[i].valorMaximo;///////////// SETEAR DATOS EN EL FORMULARIO
                document.getElementById("categoriaConf").value = json[i].Categoria;///////////// SETEAR DATOS EN EL FORMULARIO
                document.getElementById("ganaciavendedorConf").value = json[i].gananciaVen;///////////// SETEAR DATOS EN EL FORMULARIO
                document.getElementById("ganaciafabricaConf").value = json[i].gananciaFab;///////////// SETEAR DATOS EN EL FORMULARIO
                document.getElementById("ganaciaduenoConf").value = json[i].gananciaDue;///////////// SETEAR DATOS EN EL FORMULARIO
            }
        }
    });
}
//// FIN MOSTRAR CONSULTA MOSTRAR VALORES DE CONFIGURACON DLE SISTEMA

function llamadaEditarConfiguracion() {
    var codigo = $('#idtablaConf').val();
    var minimo = $("#valorminimoConf").val();
    var maximo = $("#valormaximoConf").val();
    var categoria = $("#categoriaConf").val();
    var ganaven = $("#ganaciavendedorConf").val();
    var ganafab = $("#ganaciafabricaConf").val();
    var ganadue = $("#ganaciaduenoConf").val();
    if (codigo == '' || minimo == '' || maximo == '' || categoria == '' || ganaven == '' || ganaven == '' || ganafab == '' || ganadue == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 41, idR: codigo, vlamin: minimo, valmax: maximo, cate: categoria, ganaven: ganaven, ganafab: ganafab, ganadue: ganadue},
            type: 'GET',
            success: function (json) {
                alert('Datos cambiados con Exito');
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'inicioAdministrador.php';
            }

        });
    }
}

//// INICIO MOSTRAR COMBO VENDEDORES SIN USUARIO
function llamadocomboVendedoressinUsuario() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 42},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            comboVendedoressinUsuario(json);
        }
    });
}
//cargar combo
function comboVendedoressinUsuario(data) {
    text = "";
    text += '<option  value="">Seleccione a un vendedor</option>';
    for (i = 0; i < data.length; i++) {
        text += "<option  value=" + data[i].codigoVen + "  >" + data[i].codigoVen + "</option>";
    }
    text += "</select>";
    $("#vendedoressinUsuario").html(text);
}
//// FIN MOSTRAR COMBO VENDEDORES SIN USUARIO

//// INICIO MOSTRAR DATOS DE VENDEDORES SIN USUARIO
function datosvendedoresinUsuario(dato) {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 43, codven: dato},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                document.getElementById("nombrevendedorsinUsuario").value = json[i].nombrev;///////////// SETEAR DATOS EN EL FORMULARIO
                document.getElementById("civendedorsinUsuario").value = json[i].ci;///////////// SETEAR DATOS EN EL FORMULARIO               
            }
        }
    });
}
//// FIN MOSTRAR DATOS DE VENDEDORES SIN USUARIO


//// INICIO ENVIAR MAIL VENDEDOR
function correo() {
    var usuarionuevoVen = $('#usuariovendedorsinUsuario').val();
    var clavenuevoVen = $('#clavevendedorsinUsuario').val();
    var correonuevoVen = $('#correovendedorsinUsuario').val();
    $.ajax({
        url: 'PHP/enviomailprueba.php',
        data: {co: correonuevoVen, usu: usuarionuevoVen, cla: clavenuevoVen},
        type: 'POST',
        dataType: 'json',
        success: function (json) {

        }
    });
}
//// FIN ENVIAR MAIL VENDEDOR

function llamadaIngresoNuevoUsuario() {
    var codigonuevoVen = $('#vendedoressinUsuario').val();
    var nombrenuevoVen = $("#nombrevendedorsinUsuario").val();
    var cinuevoVen = $("#civendedorsinUsuario").val();
    var usuarionuevoVen = $('#usuariovendedorsinUsuario').val();
    var clavenuevoVen = $('#clavevendedorsinUsuario').val();
    var tiponuevoVen = $("#tipovendedorsinUsuario").val();
    if (codigonuevoVen == '' || nombrenuevoVen == '' || usuarionuevoVen == '' || clavenuevoVen == '' || tiponuevoVen == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 44, cedu: cinuevoVen, nombre: nombrenuevoVen, usu: usuarionuevoVen, clave: clavenuevoVen, tipo: tiponuevoVen, codven: codigonuevoVen},
            type: 'GET',
            success: function (json) {
                alert('Datos Ingresados: \n Sus Credenciales Fueron enviadas al Correo suministrado');
                correo();
                window.location = 'NuevoUsuarioVendedor.php';
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                
            }

        });
    }
}

//// INICIO MOSTRAR COMBO FABRICAS SIN USUARIO
function llamadocomboFabricassinUsuario() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 45},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            comboFabricassinUsuario(json);
        }
    });
}
//cargar combo
function comboFabricassinUsuario(data) {
    text = "";
    text += '<option  value="">Seleccione a una Fabrica</option>';
    for (i = 0; i < data.length; i++) {
        text += "<option  value=" + data[i].codigoFab  + "  >" + data[i].codigoFab  + "</option>";
    }
    text += "</select>";
    $("#fabricassinUsuario").html(text);
}
//// FIN MOSTRAR COMBO VENDEDORES SIN USUARIO

//// INICIO MOSTRAR DATOS DE FABRICA SIN USUARIO
function datosfabricasinUsuario(dato) {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 46, codfab: dato},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                document.getElementById("nombrerepreFabsinUsuario").value = json[i].nombref;///////////// SETEAR DATOS EN EL FORMULARIO
                document.getElementById("cirepreFabsinUsuario").value = json[i].ci;///////////// SETEAR DATOS EN EL FORMULARIO               
            }
        }
    });
}
//// FIN MOSTRAR DATOS DE FABRICA SIN USUARIO

//// INICIO ENVIAR MAIL FABRICA
function correo1() {
    var usuarionuevoVen = $('#usuarioFabsinUsuario').val();
    var clavenuevoVen = $('#claveFabsinUsuario').val();
    var correonuevoVen = $('#correoFabsinUsuario').val();
    $.ajax({
        url: 'PHP/enviomailprueba.php',
        data: {co: correonuevoVen, usu: usuarionuevoVen, cla: clavenuevoVen},
        type: 'POST',
        dataType: 'json',
        success: function (json) {

        }
    });
}
//// FIN ENVIAR MAIL FABRICA

function llamadaIngresoNuevoUsuarioFab() {
    var codigonuevoVen = $('#fabricassinUsuario').val();
    var nombrenuevoVen = $("#nombrerepreFabsinUsuario").val();
    var cinuevoVen = $("#cirepreFabsinUsuario").val();
    var usuarionuevoVen = $('#usuarioFabsinUsuario').val();
    var clavenuevoVen = $('#claveFabsinUsuario').val();
    var tiponuevoVen = $("#tipoFabsinUsuario").val();
    if (codigonuevoVen == '' || nombrenuevoVen == '' || usuarionuevoVen == '' || clavenuevoVen == '' || tiponuevoVen == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 47, cedu: cinuevoVen, nombre: nombrenuevoVen, usu: usuarionuevoVen, clave: clavenuevoVen, tipo: tiponuevoVen, codven: codigonuevoVen},
            type: 'GET',
            success: function (json) {
                        correo1();
                alert('Datos Ingresados: \n Sus Credenciales Fueron enviadas al Correo suministrado');
        
                window.location = 'NuevoUsuarioFabrica.php';
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                
            }

        });
    }
}



//// INICIO MOSTRAR CONSULTA MOSTRAR VENDEDORES CON USUARIO
function mostarusuariosVendedores() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 49},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablaconvendedoresUsuarios(json);
        }
    });

}
function tablaconvendedoresUsuarios(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].codigoV + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].nombreu + '</td>';
        texto2 += '<td>';
        texto2 += "<button type='button' class='btn btn-primary btn-xs'  onclick='llamadaresetearclaveVendedor(" + data[i].id + ")'>Resetear<span class='glyphicon glyphicon-edit'></span></button></td>";
        texto2 += '</tr>';
    }
    $("#tablaconusuarioaResetear").html(texto2);
}

//// FUNCION RESETEAR CLAVE VENDEDOR
function llamadaresetearclaveVendedor(dato) {
    var codigoven = dato;
    var nuevaclave = '12345678';
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 50,clave:nuevaclave,codven:codigoven},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
                    
        }
    });
     alert('La Clave fue Reseteada');   
}

//// FIN MOSTRAR CONSULTA MOSTRAR VENDEDORES CON USUARIO

//// INICIO MOSTRAR CONSULTA GANANCIA DEL DUENO SEMANAL
function mostargananciasemanalDueno() {
    var fechainicio = $('#fechainicioAdmin').val();
    var fechafin = $('#fechafinAdmin').val();
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 51, Finicio: fechainicio, Ffin: fechafin},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablagananciasemanalDueno(json);
        }
    });

}
function tablagananciasemanalDueno(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].fechaCF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].codVenF + '</td>'; 
        texto2 += '<td style="text-align: center;">' + data[i].cantidadPF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].categoriaVenF + '</td>'; 
        texto2 += '<td style="text-align: center;">' + data[i].ganancia  + '</td>';        
        texto2 += '</tr>';
    }
    $("#tablagananciasemanalempresaAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA GANANCIA DEL DUENO SEMANAL

//// INICIO MOSTRAR CONSULTA GANANCIA DEL DUENO DIARA
function mostargananciadiariaDueno() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 52},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablagananciadiariaDueno(json);
        }
    });

}
function tablagananciadiariaDueno(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td style="text-align: center;">' + data[i].fechaCF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].codVenF + '</td>'; 
        texto2 += '<td style="text-align: center;">' + data[i].cantidadPF + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].categoriaVenF + '</td>'; 
        texto2 += '<td style="text-align: center;">' + data[i].ganancia  + '</td>';        
        texto2 += '</tr>';
    }
    $("#tablagananciadiariaempresaAdm").html(texto2);
}
//// FIN MOSTRAR CONSULTA GANANCIA DEL DUENO DIARIA