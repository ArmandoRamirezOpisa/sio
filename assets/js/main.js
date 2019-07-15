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
let salioSioWeb = document.getElementById('salioSioWeb');
/* Fin Menu SioWeb */

function cambiandoPantalla(pantalla,seccion){
    if(pantalla == "Welcome"){
        window.location.reload();
    }else{
        $.ajax({
        url: pantalla,
        async: 'true',
        cache: false,
        contentType: "application/x-www-form-urlencoded",
        dataType: "html",
        error: function(object, error, anotherObject) {
            console.log('Mensaje: ' + object.statusText + 'Status: ' + object.status);
        },
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
homeSIO.addEventListener('click',homeSIOScreen);
function homeSIOScreen(){
    cambiandoPantalla("Welcome","contenidoSio");
}

busquedaCanje.addEventListener('click',busquedaCanjeScreen);
function busquedaCanjeScreen(){
    cambiandoPantalla("Welcome/busquedaCanje","contenidoSio")
}

confirmarTarjetasEntregadas.addEventListener('click',confirmarTarjetasEntregadasScreen);
function confirmarTarjetasEntregadasScreen(){
    cambiandoPantalla("Welcome/confirmarTarjetasEntregadas","contenidoSio");
}

depositoSaldo.addEventListener('click',depositoSaldoScreen);
function depositoSaldoScreen(){
    cambiandoPantalla("Welcome/depositoSaldo","contenidoSio");
}

envioActivacionesPendientes.addEventListener('click',envioActivacionesPendientesScreen);
function envioActivacionesPendientesScreen(){
    cambiandoPantalla("Welcome/envioActivacionesPendientes","contenidoSio");
}

depositoSaldoSolicitado.addEventListener('click',depositoSaldoSolicitadoScreen);
function depositoSaldoSolicitadoScreen(){
    cambiandoPantalla("Welcome/depositoSaldoSolicitado","contenidoSio");
}

saldoLiverpool.addEventListener('click',saldoLiverpoolScreen);
function saldoLiverpoolScreen(){
    cambiandoPantalla("Welcome/saldoLiverpool","contenidoSio");
}

pendientesXProgramar.addEventListener('click',pendientesXProgramarScreen);
function pendientesXProgramarScreen(){
    cambiandoPantalla("Welcome/pendientesXProgramar","contenidoSio");
}

notificacionCanjes.addEventListener('click',notificacionCanjesScreen);
function notificacionCanjesScreen(){
    cambiandoPantalla("Welcome/notificacionCanjes","contenidoSio");
}

generarPedidos.addEventListener('click',generarPedidosScreen);
function generarPedidosScreen(){
    cambiandoPantalla("Welcome/generarPedidos","contenidoSio");
}

estatusPedidos.addEventListener('click',estatusPedidosScreen);
function estatusPedidosScreen(){
    cambiandoPantalla("Welcome/estatusPedidos","contenidoSio");
}

recepcionPedidos.addEventListener('click',recepcionPedidosScreen);
function recepcionPedidosScreen(){
    cambiandoPantalla("Welcome/recepcionPedidos","contenidoSio");
}

proveedores.addEventListener('click',proveedoresScreen);
function proveedoresScreen(){
    cambiandoPantalla("Welcome/proveedores","contenidoSio");
}

listadoPedidos.addEventListener('click',listadoPedidosScreen);
function listadoPedidosScreen(){
    cambiandoPantalla("Welcome/listadoPedidos","contenidoSio");
}

iventario.addEventListener('click',iventarioScreen);
function iventarioScreen(){
    cambiandoPantalla("Welcome/iventario","contenidoSio");
}

comprasConsolidadas.addEventListener('click',comprasConsolidadasScreen);
function comprasConsolidadasScreen(){
    cambiandoPantalla("Welcome/comprasConsolidadas","contenidoSio");
}

transferenciaPremios.addEventListener('click',transferenciaPremiosScreen);
function transferenciaPremiosScreen(){
    cambiandoPantalla("Welcome/transferenciaPremios","contenidoSio");
}

entradasSalidasDiversas.addEventListener('click',entradasSalidasDiversasScreen);
function entradasSalidasDiversasScreen(){
    cambiandoPantalla("Welcome/entradasSalidasDiversas","contenidoSio");
}

inventarioFisico.addEventListener('click',inventarioFisicoScreen);
function inventarioFisicoScreen(){
    cambiandoPantalla("Welcome/inventarioFisico","contenidoSio");
}

etiquetas.addEventListener('click',etiquetasScreen);
function etiquetasScreen(){
    cambiandoPantalla("Welcome/etiquetas","contenidoSio");
}

monitor.addEventListener('click',monitorScreen);
function monitorScreen(){
    cambiandoPantalla("Pantalla monitor");
}

seguimiento.addEventListener('click',seguimientoScreen);
function seguimientoScreen(){
    cambiandoPantalla("Pantalla seguimientos");
}

pruebasEntrega.addEventListener('click',pruebasEntregaScreen);
function pruebasEntregaScreen(){
    cambiandoPantalla("Pantalla pruebas entrega");
}

premios.addEventListener('click',premiosScreen);
function premiosScreen(){
    cambiandoPantalla("Pantalla premios");
}

visualizarCanjesFacturar.addEventListener('click',visualizarCanjesFacturarScreen);
function visualizarCanjesFacturarScreen(){
    cambiandoPantalla("Pantalla visualizar canjes");
}

facturacion.addEventListener('click',facturacionScreen);
function facturacionScreen(){
    cambiandoPantalla("Pantalla facturacion");
}

sincronizarPremios.addEventListener('click',sincronizarPremiosScreen);
function sincronizarPremiosScreen(){
    cambiandoPantalla("Pantalla sincronuizar premios");
}

participantes.addEventListener('click',participantesScreen);
function participantesScreen(){
    cambiandoPantalla("Pantalla participantes");
}

tickets.addEventListener('click',ticketsScreen);
function ticketsScreen(){
    cambiandoPantalla("Pantalla tickets");
}

correoLiverpool.addEventListener('click',correoLiverpoolScreen);
function correoLiverpoolScreen(){
    cambiandoPantalla("Pantalla correo");
}

salioSioWeb.addEventListener('click',salioSioWebScrren);
function salioSioWebScrren(){
    cambiandoPantalla("Pantalla salioSioWeb");
}