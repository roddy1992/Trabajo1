/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    mostrarconsultadiariaFabrica();
    mostrarconsultastockFabrica();

    $(".enviarVenFa").click(function (e) {
        e.preventDefault();
        llamadaInsertarVendedor();
    });
    $(".enviarcompraFa").click(function (e) {
        e.preventDefault();
        llamadaInsertarCompra();
        llamadaEditarStockconCompraFabrica();
    });
    $(".consultareportesemanalFab").click(function (e) {
        e.preventDefault();
        mostrarconsultasemanalFabrica();
    });
    $(".guardarcambiosmodalFa").click(function (e) {
        e.preventDefault();
        llamadaEditarStockFabrica();
    });
    $(".consultapagoVendedorFa").click(function (e) {
        e.preventDefault();
        mostrarconsultapagosvendedoresFabrica();
    });
    $(".guardarstockfabrica").click(function (e) {
        e.preventDefault();
        llamadaIngresaStockFabrica();
    });
    mostrarconsultapedidosFabrica();

});

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
    var fabligven = $("#codcompraFab").val();
    var correoven = $("#correoVen").val();
    if (valorcodv == '' || nombreven == '' || direcven == '' || celularven == '' || convencionalven == '' || whatven == '' || fabligven == '' || correoven == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 2, codigo: valorcodv, anfi: codigoan, nombre: nombreven, ci: civen, pasa: pasven, dire: direcven, celular: celularven, conven: convencionalven, what: whatven, fabli: fabligven, correo: correoven},
            type: 'GET',
            success: function (json) {
                document.getElementById('success_message_Ven').style.display = 'block';
                alert('Vendedor Ingresado con Exito');
                //window.location = 'crearfabricanteAdministrador.php';
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'crearvendedorFabrica.php';
            }

        });
    }
}

function llamadaInsertarCompra() {
    var conveF = $('#codigoVenFa').val();
    var cantidadF = $("#numeroProFa").val();
    var fabircaF = $("#codcompraFab").val();   //// valor que  se puede capturar directo
    var categoriavF = $("#categoriaVenFa").val();
    if (conveF == '' || cantidadF == '' || fabircaF == '' || categoriavF == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 3, codv: conveF, cantp: cantidadF, codf: fabircaF, catv: categoriavF},
            type: 'GET',
            success: function (json) {
                document.getElementById('success_message_CompraFa').style.display = 'block';
                //window.location = 'crearfabricanteAdministrador.php';
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'comprasFabrica.php';
            }

        });
    }
}

function llamadaEditarStockFabrica() {
    var condF = $('#codFabmodalFa').val();
    var cantidadnuevaPF = $("#nuevacantidadProFa").val();
    if (condF == '' || cantidadnuevaPF == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 8, nuevacant: cantidadnuevaPF, codFab: condF},
            type: 'GET',
            success: function (json) {
                alert('Datos Cambiados con exito')
                //window.location = 'crearfabricanteAdministrador.php';
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'stockFabrica.php';
            }

        });
    }
}

function llamadaEditarStockconCompraFabrica() {
    var condF = $('#codcompraFab').val();
    var cantidadcomprada = $("#numeroProFa").val();
    if (condF == '' || cantidadcomprada == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 9, nuevacant: cantidadcomprada, codFab: condF},
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
                window.location = 'stockFabrica.php';
            }

        });
    }
}


function tipovendedor() {
    var cantidad = $('#numeroProFa').val(); //// valor que  se puede capturar directo
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 15, canticompra: cantidad},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                document.getElementById('categoriaVenFa').value = json[i].Categoria;
            }
        }
    });

}

//// INICIO MOSTRAR CONSULTA DIARIA FABRICA
function mostrarconsultadiariaFabrica() {
    var fabircaF = $("#codcompraFab").val();   //// valor que  se puede capturar directo
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 4, codFab: fabircaF},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tabladiariaFabrica(json);
        }
    });
}
function tabladiariaFabrica(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].fechav + '</td>';
        texto2 += '<td>' + data[i].nombreF + '</td>';
        texto2 += '<td>' + data[i].codigoV + '</td>';
        texto2 += '<td>' + data[i].cantidad + '</td>';
        texto2 += '<td>' + data[i].categoriaV + '</td>';
        texto2 += '<td>' + data[i].ganancia + '</td>';
        texto2 += '</tr>';
    }
    $("#tabladiariaFab").html(texto2);
}
//// FIN MOSTRAR CONSULTA DIARIA FABRICA

//// INICIO MOSTRAR CONSULTA SEMANAL FABRICA
function mostrarconsultasemanalFabrica() {
    var fabircaF = $("#codcompraFab").val();   //// valor que  se puede capturar directo
    var fechainicio = $('#fechainicioreportesemanalFab').val();
    var fechafin = $('#fechafinreportesemanalFab').val();
    if (fechainicio == '' || fechafin == '') {
        alert('Datos incompletos')
    }
    else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 5, codFab: fabircaF, inicioF: fechainicio, finF: fechafin},
            type: 'GET',
            dataType: 'json',
            success: function (json) {
                tablasemanalFabrica(json);
            }
        });
    }
}
function tablasemanalFabrica(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].fechav + '</td>';
        texto2 += '<td>' + data[i].nombreF + '</td>';
        texto2 += '<td>' + data[i].codigoV + '</td>';
        texto2 += '<td>' + data[i].cantidad + '</td>';
        texto2 += '<td>' + data[i].categoriaV + '</td>';
        texto2 += '<td>' + data[i].ganancia + '</td>';
        texto2 += '</tr>';
    }
    $("#tablasemanalFab").html(texto2);
}
//// FIN MOSTRAR CONSULTA SEMANAL FABRICA

//// INICIO MOSTRAR CONSULTA STOCK FABRICA
function modalstock(indice) {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 7, codFab: indice},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                document.getElementById("codFabmodalFa").value = json[i].codFabrica;///////////// SETEAR DATOS EN EL FORMULARIO
                document.getElementById("nuevacantidadProFa").value = json[i].stock;///////////// SETEAR DATOS EN EL FORMULARIO
            }
        }
    });
}
function mostrarconsultastockFabrica() {
    var fabircaF = $("#codcompraFab").val();   //// valor que  se puede capturar directo
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 6, codFab: fabircaF},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tablastockFabrica(json);
        }
    });

}
function tablastockFabrica(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].nombreF + '</td>';
        texto2 += '<td>' + data[i].stock + '</td>';
        texto2 += '<td>';
        texto2 += "<button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#myModal' onclick='modalstock(" + data[i].id + ")'>Editar<span class='glyphicon glyphicon-edit'></span></button></td>";
        texto2 += '</tr>';
    }
    $("#tablastockFab").html(texto2);
}
//// FIN MOSTRAR CONSULTA STOCK FABRICA


//// INICIO MOSTRAR CONSULTA PAGOS A VENDEDORES
function mostrarconsultapagosvendedoresFabrica() {
    var vendedor = $("#codVenbusqueda").val();
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 25, codVen: vendedor},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            for (var i = 0; i < json.length; i++) {
                var codven = json[i].codven;
            }
            if (vendedor == codven) {
                tablapagosavendedoresFabrica(json);
            } else {
                alert('Vendedor no registrado para Pagos')
            }
        }
    });
}
function tablapagosavendedoresFabrica(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].codven + '</td>';
        texto2 += '<td>' + data[i].nombreven + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].codFabrica + '</td>';
        texto2 += '<td>' + data[i].fecha_solicitud + '</td>';
        texto2 += '<td style="text-align: center;">' + data[i].valordepago + '</td>';
        texto2 += '</tr>';
    }
    $("#tablapagoFab").html(texto2);
}
//// FIN MOSTRAR CONSULTA PAGOS A VENDEDORES


function llamadaIngresaStockFabrica() {
    var condF = $('#codcompraFab').val();
    var cantidadcomprada = $("#cantidadstock").val();
    if (condF == '' || cantidadcomprada == '') {
        alert('Datos incompletos, intente nuevamente.');
    } else {
        $.ajax({
            url: 'PHP/controlador.php',
            data: {opcion: 53, cant: cantidadcomprada, cofFab: condF},
            type: 'GET',
            success: function (json) {
                alert('Datos Ingresados con exito')
                //window.location = 'crearfabricanteAdministrador.php';
            },
            error: function (xhr, status) {
                alert('Disculpe, existió un problema' + status);
            },
            // código a ejecutar sin importar si la petición falló o no
            complete: function (xhr, status) {
                //alert('Petición realizada');
                window.location = 'stockFabrica.php';
            }

        });
    }
}


//// INICIO FUNCION  MOSTARR PEDIDOS EN FABRICA
function mostrarconsultapedidosFabrica() {
    var fabircaF = $("#codcompraFab").val();   //// valor que  se puede capturar directo
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 54, codFab: fabircaF},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            tabladepedidosFabrica(json);
        }
    });

}
function tabladepedidosFabrica(data) {
    texto2 = "";
    for (i = 0; i < data.length; i++) {
        texto2 += '<tr>';
        texto2 += '<td>' + data[i].fechaP + '</td>';
        texto2 += '<td>' + data[i].codven + '</td>';
        texto2 += '<td>' + data[i].cantidadP + '</td>';
        texto2 += '<td>';
        texto2 += "<button type='button' class='btn btn-danger btn-xs'  onclick='eliminarpedidosFabrica(" + data[i].id_pedido + ")'>Eliminar <span class='glyphicon glyphicon-remove-circle'></span></button></td>";
        texto2 += '</tr>';
    }
    $("#tablapedidosfabrica").html(texto2);
}

function eliminarpedidosFabrica(dato) {
    $.ajax({
        url: 'PHP/controlador.php',
        data: {opcion: 55, id: dato},
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            
        }
    });
    alert('Pedido Eliminado');
    window.location ='stockFabrica.php';
} 
//// FIN FUNCION  MOSTARR PEDIDOS EN FABRICA