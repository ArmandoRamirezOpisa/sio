/* Menu SioWeb */
let homeSIO = document.getElementById('homeSIO');
let busquedaCanje = document.getElementById('busquedaCanje');
let confirmarTarjetasEntregadas = document.getElementById('confirmarTarjetasEntregadas');
let depositoSaldo = document.getElementById('depositoSaldo');
let envioActivacionesPendientes = document.getElementById('envioActivacionesPendientes');
let depositoSaldoSolicitado = document.getElementById('depositoSaldoSolicitado');
let saldoLiverpool = document.getElementById('saldoLiverpool');
let pendientesXProgramar = document.getElementById('pendientesXProgramar');
let notificacionCanjes = document.getElementById('notificacionCanjes');
let generarPedidos = document.getElementById('generarPedidos');
let estatusPedidos = document.getElementById('estatusPedidos');
let recepcionPedidos = document.getElementById('recepcionPedidos');
let proveedores = document.getElementById('proveedores');
let listadoPedidos = document.getElementById('listadoPedidos');
let iventario = document.getElementById('iventario');
let comprasConsolidadas = document.getElementById('comprasConsolidadas');
let transferenciaPremios = document.getElementById('transferenciaPremios');
let entradasSalidasDiversas = document.getElementById('entradasSalidasDiversas');
let inventarioFisico = document.getElementById('inventarioFisico');
let etiquetas = document.getElementById('etiquetas');
let monitor = document.getElementById('monitor');
let seguimiento = document.getElementById('seguimiento');
let pruebasEntrega = document.getElementById('pruebasEntrega');
let premios = document.getElementById('premios');
let visualizarCanjesFacturar = document.getElementById('visualizarCanjesFacturar');
let facturacion = document.getElementById('facturacion');
let sincronizarPremios = document.getElementById('sincronizarPremios');
let participantes = document.getElementById('participantes');
let tickets = document.getElementById('tickets');
let correoLiverpool = document.getElementById('correoLiverpool');
let configUserSio = document.getElementById('configUserSio');
let salioSioWeb = document.getElementById('salioSioWeb');
/* Fin Menu SioWeb */

function cambiandoPantalla(pantalla, seccion) {
    if (pantalla == "Welcome") {
        window.location.reload();
    } else {
        $.ajax({
            url: pantalla,
            async: 'true',
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            dataType: "html",
            error: function(object, error, anotherObject) {},
            global: true,
            ifModified: false,
            processData: true,
            success: function(result) {
                if (result == "0") {
                    window.location.reload();
                } else {
                    $('#' + seccion).html(result);
                }
            },
            timeout: 30000,
            type: "GET"
        });
    }
}

/* Acciones para el cambio de pantalla */
homeSIO.addEventListener('click', homeSIOScreen);

function homeSIOScreen() {
    window.location.reload();
}

busquedaCanje.addEventListener('click', busquedaCanjeScreen);

function busquedaCanjeScreen() {
    cambiandoPantalla("busquedaCanje", "contenidoSio");
}

function buscandoCanjeData() {
    const alertMessage = document.getElementById('alertMessage');
    const modoBusquedaCanje = document.getElementById('modoBusquedaCanje');
    const busquedaCanjeText = document.getElementById('busquedaCanjeText');

    if (busquedaCanjeText.value) {
        buscandoInfoCanjeData(modoBusquedaCanje.value, busquedaCanjeText.value);
    } else {
        alertMessage.style.display = "block";
        alertMessage.innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Advertencia!</strong> El campo se encuentra vacio, debes escribir algo para que la busqueda se realize correctamente.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
}

function buscandoInfoCanjeData(busquedaModo, textoBuscar) {
    switch (busquedaModo) {
        case 'vacio':
            alertMessage.style.display = "block";
            alertMessage.innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Advertencia!</strong> Debes de buscar algo de la lista.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            break;
        case 'folio':
            sendData('buscandoCanje', 'folio', textoBuscar);
            break;
        case 'nombreParticipante':
            sendData('buscandoCanje', 'nombreParticipante', textoBuscar);
            break;
        case 'po':
            sendData('buscandoCanje', 'po', textoBuscar);
            break;
        case 'cp':
            sendData('buscandoCanje', 'cp', textoBuscar);
            break;
        case 'guia':
            sendData('buscandoCanje', 'guia', textoBuscar);
            break;
        case 'company':
            sendData('buscandoCanje', 'company', textoBuscar);
            break;
    }
}

function sendData(url, opcion, info) {
    $.ajax({
        url: url,
        async: 'true',
        cache: false,
        contentType: "application/x-www-form-urlencoded",
        global: true,
        ifModified: false,
        processData: true,
        data: {
            opcion: opcion,
            info: info
        },
        beforeSend: function() {
            alertMessage.innerHTML = '<i class="fas fa-sync fa-spin icon-spin"></i>';
        },
        success: function(result) {
            if (result) {
                console.log(result);
                alertMessage.style.display = "block";
                alertMessage.innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Exito!</strong> Busqueda realizada con exito.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            } else {
                alertMessage.style.display = "block";
                alertMessage.innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Error al realizar la busqueda.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }
        },
        error: function(object, error, anotherObject) {},
        /*timeout: 30000,*/
        type: "POST"
    });
}

confirmarTarjetasEntregadas.addEventListener('click', confirmarTarjetasEntregadasScreen);

function confirmarTarjetasEntregadasScreen() {
    cambiandoPantalla("confirmarTarjetasEntregadas", "contenidoSio");
}

depositoSaldo.addEventListener('click', depositoSaldoScreen);

function depositoSaldoScreen() {
    cambiandoPantalla("depositoSaldo", "contenidoSio");
}

envioActivacionesPendientes.addEventListener('click', envioActivacionesPendientesScreen);

function envioActivacionesPendientesScreen() {
    cambiandoPantalla("envioActivacionesPendientes", "contenidoSio");
}

depositoSaldoSolicitado.addEventListener('click', depositoSaldoSolicitadoScreen);

function depositoSaldoSolicitadoScreen() {
    cambiandoPantalla("depositoSaldoSolicitado", "contenidoSio");
}

saldoLiverpool.addEventListener('click', saldoLiverpoolScreen);

function saldoLiverpoolScreen() {
    cambiandoPantalla("saldoLiverpool", "contenidoSio");
}

pendientesXProgramar.addEventListener('click', pendientesXProgramarScreen);

function pendientesXProgramarScreen() {
    cambiandoPantalla("pendientesXProgramar", "contenidoSio");
}

notificacionCanjes.addEventListener('click', notificacionCanjesScreen);

function notificacionCanjesScreen() {
    cambiandoPantalla("notificacionCanjes", "contenidoSio");
}

generarPedidos.addEventListener('click', generarPedidosScreen);

function generarPedidosScreen() {
    cambiandoPantalla("generarPedidos", "contenidoSio");
}

estatusPedidos.addEventListener('click', estatusPedidosScreen);

function estatusPedidosScreen() {
    cambiandoPantalla("estatusPedidos", "contenidoSio");
}

recepcionPedidos.addEventListener('click', recepcionPedidosScreen);

function recepcionPedidosScreen() {
    cambiandoPantalla("recepcionPedidos", "contenidoSio");
}

proveedores.addEventListener('click', proveedoresScreen);

function proveedoresScreen() {
    cambiandoPantalla("proveedores", "contenidoSio");
}

listadoPedidos.addEventListener('click', listadoPedidosScreen);

function listadoPedidosScreen() {
    cambiandoPantalla("listadoPedidos", "contenidoSio");
}

iventario.addEventListener('click', iventarioScreen);

function iventarioScreen() {
    cambiandoPantalla("iventario", "contenidoSio");
}

comprasConsolidadas.addEventListener('click', comprasConsolidadasScreen);

function comprasConsolidadasScreen() {
    cambiandoPantalla("comprasConsolidadas", "contenidoSio");
}

transferenciaPremios.addEventListener('click', transferenciaPremiosScreen);

function transferenciaPremiosScreen() {
    cambiandoPantalla("transferenciaPremios", "contenidoSio");
}

entradasSalidasDiversas.addEventListener('click', entradasSalidasDiversasScreen);

function entradasSalidasDiversasScreen() {
    cambiandoPantalla("entradasSalidasDiversas", "contenidoSio");
}

inventarioFisico.addEventListener('click', inventarioFisicoScreen);

function inventarioFisicoScreen() {
    cambiandoPantalla("inventarioFisico", "contenidoSio");
}

etiquetas.addEventListener('click', etiquetasScreen);

function etiquetasScreen() {
    cambiandoPantalla("etiquetas", "contenidoSio");
}

monitor.addEventListener('click', monitorScreen);

function monitorScreen() {
    cambiandoPantalla("monitor", "contenidoSio");
}

seguimiento.addEventListener('click', seguimientoScreen);

function seguimientoScreen() {
    cambiandoPantalla("seguimiento", "contenidoSio");
}

pruebasEntrega.addEventListener('click', pruebasEntregaScreen);

function pruebasEntregaScreen() {
    cambiandoPantalla("pruebasEntrega", "contenidoSio");
}

premios.addEventListener('click', premiosScreen);

function premiosScreen() {
    cambiandoPantalla("premios", "contenidoSio");
}

visualizarCanjesFacturar.addEventListener('click', visualizarCanjesFacturarScreen);

function visualizarCanjesFacturarScreen() {
    cambiandoPantalla("visualizarCanjesFacturar", "contenidoSio");
}

facturacion.addEventListener('click', facturacionScreen);

function facturacionScreen() {
    cambiandoPantalla("facturacion", "contenidoSio");
}

sincronizarPremios.addEventListener('click', sincronizarPremiosScreen);

function sincronizarPremiosScreen() {
    cambiandoPantalla("sincronizarPremios", "contenidoSio");
}

participantes.addEventListener('click', participantesScreen);

function participantesScreen() {
    cambiandoPantalla("participantes", "contenidoSio");
}

tickets.addEventListener('click', ticketsScreen);

function ticketsScreen() {
    cambiandoPantalla("tickets", "contenidoSio");
}

correoLiverpool.addEventListener('click', correoLiverpoolScreen);

function correoLiverpoolScreen() {
    cambiandoPantalla("correoLiverpool", "contenidoSio");
}

configUserSio.addEventListener('click', configUserSioScreen);

function configUserSioScreen() {
    cambiandoPantalla("configUserSio", "contenidoSio");
}

function cambiarUserNameSio() {
    let messageAlertConfig = document.getElementById('messageAlertConfig');
    let newNameUserSio = document.getElementById('newNameUserSio');
    if (newNameUserSio.value == "") {
        messageAlertConfig.style.display = 'block';
    } else {
        $.ajax({
            url: 'updateUserNameSio',
            async: 'true',
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            global: true,
            ifModified: false,
            processData: true,
            data: {
                'newUserSio': newNameUserSio.value
            },
            beforeSend: function() {},
            success: function(result) {
                if (result) {
                    window.location.reload();
                } else {
                    messageAlertConfig.style.display = 'block'
                }
            },
            error: function(object, error, anotherObject) {},
            timeout: 30000,
            type: "POST"
        });
    }
}

function cambiarPassword() {
    let messageAlertConfig = document.getElementById('messageAlertConfig');
    let newPassword = document.getElementById('newPassword');
    let newPwd = newPassword.value;
    let newPasswordConfirm = document.getElementById('newPasswordConfirm');
    if (newPassword.value == "" || newPasswordConfirm.value == "") {
        messageAlertConfig.style.display = 'block'
    } else if (newPassword.value = !newPasswordConfirm.value) {
        messageAlertConfig.style.display = 'block'
    } else if (newPassword.value.length < 8 && newPasswordConfirm.value.length < 8) {
        messageAlertConfig.style.display = 'block'
    } else {
        $.ajax({
            url: 'updatePasswordSio',
            async: 'true',
            cache: false,
            contentType: "application/x-www-form-urlencoded",
            global: true,
            ifModified: false,
            processData: true,
            data: {
                'newPassword': newPwd
            },
            beforeSend: function() {},
            success: function(result) {
                if (result) {
                    window.location.reload();
                } else {
                    messageAlertConfig.style.display = 'block'
                }
            },
            error: function(object, error, anotherObject) {},
            timeout: 30000,
            type: "POST"
        });
    }
}

salioSioWeb.addEventListener('click', salioSioWebScrren);

function salioSioWebScrren() {
    location.href = "http://" + location.hostname + "/opisio.com.mx/Welcome/salirSio";
}