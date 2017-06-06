/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {


    mostrarconsultarangoVendedor();

    $('.vertablacolaboradores').click(function (e) {
        mostrarconsultavcolaboradoresVendedor();
    });
    $('.guardargananciaVen').click(function (e) {
        llamadaingresogananciaVendedor();
    });
    $('.consultareportesemanalVendedor').click(function (e) {
        mostrarconsultaganaciaVendedor();
    });
    $('.guardarpedidoVendedor').click(function (e) {
        llamadaingresopedidoVendedor();
        llamadaEditarStockFabricaconPedido();
    });
    $('.solicituddepago').click(function (e) {
        llamadaingresosolicituddepagoVendedor();
    });
    llamadocomboFabricasconStock();
    llamadocomboFabricasAliadas();
    mostrarconsultastockgeneralFabrica();
    mostrarconsultavaloracobrarVendedor();

    $('#fabricasconstock').change(function (e) {
        var optionSelected = $(this);
        var valueSelected = optionSelected.val();
        mostrarconsultastockFabrica(valueSelected);
    });
     $('#fabricasaliadas').change(function (e) {
        var optionSelected = $(this);
        var valueSelected = optionSelected.val();
        mostrarconsultafabricasaliadasVendedor(valueSelected);
    });
});


//// INICIO MOSTRAR CONSULTA COLABORADORES VENDEDOR
function mostrarconsultavcolaboradoresVendedor() {
    var codigoVendedor = $('#codigoVendedor').val(); //// valor que  se puede capturar directo
    var categoria = $('#categoriadelVendedor').val();
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 10, codVen: codigoVendedor, cate: categoria},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablacolaboradoresVendedor(json);
        }
    });

}
function tablacolaboradoresVendedor(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].codVenF + '</td>';
        texto2 += '<td>' + data[i].nombreVen + '</td>';
        texto2 += '<td>' + data[i].cantidad + '</td>';
        texto2 += '<td>' + data[i].ganancia + '</td>';
        texto2 += '</tr>';
    }
    $("#tablaVendedorCol").html(texto2);
}
//// FIN MOSTRAR CONSULTA COLABORADORES VENDEDOR

//// INICIO MOSTRAR CONSULTA  RANGO VENDEDOR
function mostrarconsultarangoVendedor() {
    var codigoVendedor = $('#codigoVendedor').val(); //// valor que  se puede capturar directo
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 11, codVen: codigoVendedor},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                document.getElementById("categoriadelVendedor").value = json[i].categoriaVenF;
            }
        }
    });

}
//// FIN MOSTRAR CONSULTA  RANGO VENDEDOR

//// INICIO MOSTRAR COMBO FABRICAS CON STOCK
function llamadocomboFabricasconStock() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 12},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            comboFabricasconStock(json);
        }
    });
}
//cargar combo
function comboFabricasconStock(data) {
    text = "";
    text += '<option  value="">Fabricas Disponibles</option>';
    for (i = 0; i < data.length; i++) {
        text += "<option  value=" + data[i].codFabrica + "  >" + data[i].nombre_fabrica + "</option>";
    }
    text += "</select>";
    $("#fabricasconstock").html(text);
}
//// FIN MOSTRAR COMBO FABRICAS CON STOCK


//// INICIO MOSTRAR COMBO FABRICAS ALIADAS
function llamadocomboFabricasAliadas() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 14},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            comboFabricasAliadas(json);
        }
    });
}
//cargar combo
function comboFabricasAliadas(data) {
    text = "";
    text += '<option  value="">Seleccione una de las Fabricas Aliadas</option>';
    for (i = 0; i < data.length; i++) {
        text += "<option  value=" + data[i].codigoFab + "  >" + data[i].nombreFab + "</option>";
    }
    text += "</select>";
    $("#fabricasaliadas").html(text);
}
//// FIN MOSTRAR COMBO FABRICAS ALIADAS


function llamadaingresogananciaVendedor() {
    var condven = $('#codigoVendedor').val();
    var ganacia = $("#mostragananciaVen").text();
    if (condven == '' || ganacia == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 16, codven: condven, ganancia: ganacia},
            type: 'GET',
            success: function (json) {
                alert('Registro de Ganancia Ingresado');
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'inicioVendedor.php';
            }

        });
    }
}

//// INICIO MOSTRAR CONSULTA GANANCIAS DE VENDEDOR
function mostrarconsultaganaciaVendedor() {
    var codigoVendedor = $('#codigoVendedor').val(); //// valor que  se puede capturar directo
    var fechainicioven = $('#fechainicioreportesemanalVendedor').val();
    var fechafinven = $('#fechafinreportesemanalVendedor').val();
    if (fechainicioven == '' || fechafinven == '') {
        alert('Datos incompletos, por favor selecciones  fechas');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 17, codven: codigoVendedor, finicioVen: fechainicioven, ffinVen: fechafinven},
            type: 'GET',
            dataType: 'json',
            success: function (json) {
                tablagananciaVendedor(json);
            }
        });
    }


}
function tablagananciaVendedor(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].fecharegistro + '</td>';
        texto2 += '<td>' + data[i].ganancia + '</td>';
        texto2 += '</tr>';
    }
    $("#tablasemanalVendedor").html(texto2);
}
//// FIN MOSTRAR CONSULTA  GANANCIAS DE VENDEDOR

//// INICIO MOSTRAR CONSULTA FABRICAS CON STOCK GENERAL
function modalpedido(indice) {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 19, codFab: indice},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                document.getElementById("codFabmodalPedidoVendedor").value = json[i].codFabrica;///////////// SETEAR DATOS EN EL FORMULARIO
            }
        }
    });
}
function mostrarconsultastockgeneralFabrica() {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 18},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablafabricaconstockgeneral(json);
        }
    });

}
function tablafabricaconstockgeneral(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].codFabrica + '</td>';
        texto2 += '<td>' + data[i].stock + '</td>';
        texto2 += '<td>';
        texto2 += "<button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#Modalpedido' onclick='modalpedido(" + data[i].id + ")'>Realizar Pedido  <span class='glyphicon glyphicon-plus-sign'></span></button></td>";
        texto2 += '</tr>';
    }
    $("#tablapedidoVendedor").html(texto2);
}
//// FIN MOSTRAR CONSULTA FABRICAS CON STOCK GENERAL

//// INICIO MOSTRAR CONSULTA FABRICAS CON STOCK
function mostrarconsultastockFabrica(dato) {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 13, codFab: dato},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablafabricaconstock(json);
        }
    });

}
function tablafabricaconstock(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].codFabrica + '</td>';
        texto2 += '<td>' + data[i].stock + '</td>';
        texto2 += '<td>';
        texto2 += "<button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#Modalpedido' onclick='modalpedido(" + data[i].id + ")'>Realizar Pedido  <span class='glyphicon glyphicon-plus-sign'></span></button></td>";
        texto2 += '</tr>';
    }
    $("#tablapedidoVendedor").html(texto2);
}
//// FIN MOSTRAR CONSULTA FABRICAS CON STOCK

function llamadaingresopedidoVendedor() {
    var condven = $('#codigoVendedor').val();
    var codigofeb = $("#codFabmodalPedidoVendedor").val();
    var cantidadp = $("#cantidadpedidoVendedor").val();

    if (condven == '' || codigofeb == '' || cantidadp == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 20, codven: condven, codFab: codigofeb, cantp: cantidadp},
            type: 'GET',
            success: function (json) {
                alert('Su Pedido fue Realizado con Exito');
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'pedidoVendedor.php';
            }

        });
    }
}

function llamadaEditarStockFabricaconPedido() {
    var condF = $('#codFabmodalPedidoVendedor').val();
    var cantidadnuevaPF = $("#cantidadpedidoVendedor").val();
    if (condF == '' || cantidadnuevaPF == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 21, nuevacant: cantidadnuevaPF, codFab: condF},
            type: 'GET',
            success: function (json) {
                //alert('Datos Cambiados con exito')
                //window.location = 'crearfabricanteAdministrador.php';
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                //window.location = 'stockFabrica.php';
            }

        });
    }
}

//// INICIO MOSTRAR CONSULTA  VALOR A PAGAR VENDEDOR
function mostrarconsultavaloracobrarVendedor() {
    var codigoVendedor = $('#codigoVendedor').val(); //// valor que  se puede capturar directo
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 22, codVen: codigoVendedor},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                document.getElementById("valoracobrarVendedor").value = json[i].ganancia;
            }
        }
    });

}
//// FIN MOSTRAR CONSULTA  VALOR A PAGAR VENDEDOR

//// INICIO MOSTRAR CONSULTA  INFORMACION FABRICA ALIADA
function mostrarconsultafabricasaliadasVendedor(dato) {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 23, codFab: dato},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                document.getElementById("codigoFabricaVen").value = json[i].codigoFab;
                document.getElementById("nombreRepresentanteFaVen").value = json[i].nombre_representante;
                document.getElementById("nombreFabricaVen").value = json[i].nombre_fabrica;
                document.getElementById("direccionFabricaVen").value = json[i].direccion;
                document.getElementById("cedularFabricaVen").value = json[i].telefono_celular;
                document.getElementById("convencionalFabricaVen").value = json[i].convencional;
                document.getElementById("whatsappFabricaVen").value = json[i].whatsapp;
            }
        }
    });

}
//// FIN  MOSTRAR CONSULTA  INFORMACION FABRICA ALIADA

function llamadaingresosolicituddepagoVendedor() {
    var condven = $('#codigoVendedor').val();
    var codigofab = $("#fabricasaliadas").val();
    var ganacia = $("#valoracobrarVendedor").val();
    if (condven == '' || codigofab == '' || ganacia == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 24, codven: condven,codFab:codigofab, valor: ganacia},
            type: 'GET',
            success: function (json) {
                alert('Solicitud de Pago Ingresada');
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'pagoVendedor.php';
            }

        });
    }
}