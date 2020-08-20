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

function buscandoCankeDataTxt(event) {
    if (event.keyCode == 13) {
        buscandoCanjeData();
    }
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
                //console.log(result);
                alertMessage.style.display = "block";
                alertMessage.innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Exito!</strong> Busqueda realizada con exito.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                $('#tableBusquedaCanje').show();
                $('#tableBusquedaCanje').html(result);
                document.getElementById('busquedaCanjeText').value = "";
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

function loadMensajerias() {
    $.ajax({
        url: 'http://www.opisa.com/sio/Welcome/mensajeria',
        async: 'true',
        cache: false,
        contentType: "application/x-www-form-urlencoded",
        global: true,
        dataType: "html",
        ifModified: false,
        processData: true,
        beforeSend: function() {},
        success: function(result) {
            if (result) {
                //console.log(result);
                $('#mensajerias').show();
                $('#mensajerias').html(result);
            } else {
                window.location.reload();
            }
        },
        error: function(object, error, anotherObject) {},
        /*timeout: 30000,*/
        type: "GET"
    });
}

function editInfoCanje(id) {
    let idBtn = id.id;
    let btnEditInfo = document.getElementById(idBtn);
    document.getElementById('calleTxt').disabled = false;
    document.getElementById('coloniaTxt').disabled = false;
    document.getElementById('ciudadTxt').disabled = false;
    document.getElementById('estadoTxt').disabled = false;
    document.getElementById('cpTxt').disabled = false;
    document.getElementById('paisTxt').disabled = false;
    document.getElementById('telefonoTxt').disabled = false;
    document.getElementById('emailTxt').disabled = false;
    document.getElementById('poTxt').disabled = false;
    document.getElementById('atencionTxt').disabled = false;
    document.getElementById('companyTxt').disabled = false;
    document.getElementById('empresaTxt').disabled = false;
    document.getElementById('stockTxt').disabled = false;
    document.getElementById('programacionTxt').disabled = false;
    document.getElementById('envioTxt').disabled = false;
    document.getElementById('guiaTxt').disabled = false;
    document.getElementById('statusTxt').disabled = false;
    document.getElementById('comentarioTxt').disabled = false;
    btnEditInfo.style.display = 'none';
    document.getElementById('btnSaveInfo').style.display = 'block';
}

function updateCanje() {
    let btnEditInfo = document.getElementById('btnEditInfo');
    let btnSaveInfo = document.getElementById('btnSaveInfo');
    var calleTxt = document.getElementById('calleTxt');
    var coloniaTxt = document.getElementById('coloniaTxt');
    var ciudadTxt = document.getElementById('ciudadTxt');
    var estadoTxt = document.getElementById('estadoTxt');
    var cpTxt = document.getElementById('cpTxt');
    var paisTxt = document.getElementById('paisTxt');
    var telefonoTxt = document.getElementById('telefonoTxt');
    var emailTxt = document.getElementById('emailTxt');
    var poTxt = document.getElementById('poTxt');
    var atencionTxt = document.getElementById('atencionTxt');
    var companyTxt = document.getElementById('companyTxt');
    var cantidadTxt = document.getElementById('cantidadTxt');
    var empresaTxt = document.getElementById('empresaTxt');
    var stockTxt = document.getElementById('stockTxt');
    var programacionTxt = document.getElementById('programacionTxt');
    var envioTxt = document.getElementById('envioTxt');
    var guiaTxt = document.getElementById('guiaTxt');
    var statusTxt = document.getElementById('statusTxt');
    var comentarioTxt = document.getElementById('comentarioTxt');
    if (calleTxt.value === "" || coloniaTxt.value === "" || ciudadTxt.value === "" || estadoTxt.value === "" || cpTxt.value === "" || paisTxt.value === "" || telefonoTxt.value === "" || emailTxt.value === "" || poTxt.value === "" || atencionTxt.value === "" || companyTxt.value === "" || cantidadTxt.value === "" || empresaTxt.value === "" || stockTxt.value === "" || programacionTxt.value === "" || envioTxt.value === "" || guiaTxt.value === "" || statusTxt.value === "" || comentarioTxt.value === "") {
        alert('Algun campo esta vacio');
    } else {
        let cp = cpTxt.value.length === 5 ? true : false;
        var mail = ValidateEmail(emailTxt.value);
        if (mail || cp) {
            console.log(`Calle: ${calleTxt.value} Upd: Canje`);
            console.log(`Colonia: ${coloniaTxt.value} Upd: Canje`);
            console.log(`Ciudad: ${ciudadTxt.value} Upd: Canje`);
            console.log(`Estado: ${estadoTxt.value} Upd: Canje`);
            console.log(`Cp: ${cpTxt.value} Upd: Canje`);
            console.log(`Pais: ${paisTxt.value} Upd: Canje`);
            console.log(`Telefono: ${telefonoTxt.value} Upd: Canje`);
            console.log(`Email: ${emailTxt.value} Upd: Participante`);
            console.log(`PO: ${poTxt.value} Upd: Canje`);
            console.log(`Atencion: ${atencionTxt.value} Upd: Canje`);
            console.log(`Company: ${companyTxt.value} Upd: Participante`);
            console.log(`Cantidad: ${cantidadTxt} Upd: Canje Detalle`)
            console.log(`Empresa: ${empresaTxt.value} Upd: Empresa`);
            console.log(`Stock: ${stockTxt.value} Upd: Revisar`);
            console.log(`Programacion: ${programacionTxt.value} Upd: Revisar`);
            console.log(`Envio: ${envioTxt.value} Upd: Revisar`);
            console.log(`Guia: ${guiaTxt.value} Upd: Revisar`);
            console.log(`Status: ${statusTxt.value} Upd: Revisar`);
            console.log(`Comentario: ${comentarioTxt.value} Upd: Revisar`);
            calleTxt.style.disabled = true;
            coloniaTxt.style.disabled = true;
            ciudadTxt.style.disabled = true;
            estadoTxt.style.disabled = true;
            cpTxt.style.disabled = true;
            paisTxt.style.disabled = true;
            telefonoTxt.style.disabled = true;
            emailTxt.style.disabled = true;
            poTxt.style.disabled = true;
            atencionTxt.style.disabled = true;
            companyTxt.style.disabled = true;
            empresaTxt.style.disabled = true;
            stockTxt.style.disabled = true;
            programacionTxt.style.disabled = true;
            envioTxt.style.disabled = true;
            guiaTxt.style.disabled = true;
            statusTxt.style.disabled = true;
            comentarioTxt.style.disabled = true;
            btnEditInfo.style.display = 'block';
            btnSaveInfo.style.display = 'none';
        }
    }
}

function ValidateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
        return (true);
    } else {
        return (false);
    }
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
    location.href = "http://www.opisa.com/sio/Welcome/salirSio";
}