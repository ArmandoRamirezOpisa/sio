/* Menu SioWeb */
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

function cambiandoPantalla(pantalla){
    console.log(`Aqui la va la ${ pantalla }`);
}

/* Acciones para el cambio de pantalla */
busquedaCanje.addEventListener('click',busquedaCanjeScreen);
function busquedaCanjeScreen(){
    cambiandoPantalla("Pantalla busqueda del canje");
}

confirmarTarjetasEntregadas.addEventListener('click',confirmarTarjetasEntregadasScreen);
function confirmarTarjetasEntregadasScreen(){
    cambiandoPantalla("Pantalla confirmar tarjetas");
}

depositoSaldo.addEventListener('click',depositoSaldoScreen);
function depositoSaldoScreen(){
    cambiandoPantalla("Pantalla deposito saldo");
}

envioActivacionesPendientes.addEventListener('click',envioActivacionesPendientesScreen);
function envioActivacionesPendientesScreen(){
    cambiandoPantalla("Pantalla envioActivaciones");
}

depositoSaldoSolicitado.addEventListener('click',depositoSaldoSolicitadoScreen);
function depositoSaldoSolicitadoScreen(){
    cambiandoPantalla("Pantalla deposito saldo solicitado");
}

saldoLiverpool.addEventListener('click',saldoLiverpoolScreen);
function saldoLiverpoolScreen(){
    cambiandoPantalla("Pantalla saldo Liverpool");
}

pendientesXProgramar.addEventListener('click',pendientesXProgramarScreen);
function pendientesXProgramarScreen(){
    cambiandoPantalla("Pantalla pendientes por programar");
}

notificacionCanjes.addEventListener('click',notificacionCanjesScreen);
function notificacionCanjesScreen(){
    cambiandoPantalla("Pantalla notificacion de canhes");
}

generarPedidos.addEventListener('click',generarPedidosScreen);
function generarPedidosScreen(){
    cambiandoPantalla("Pantalla generar pedidos");
}

estatusPedidos.addEventListener('click',estatusPedidosScreen);
function estatusPedidosScreen(){
    cambiandoPantalla("Pantalla estatus pedidos");
}

recepcionPedidos.addEventListener('click',recepcionPedidosScreen);
function recepcionPedidosScreen(){
    cambiandoPantalla("Pantalla recepcion Pedidos");
}

proveedores.addEventListener('click',proveedoresScreen);
function proveedoresScreen(){
    cambiandoPantalla("Pantalla cambiando pantalla");
}

listadoPedidos.addEventListener('click',listadoPedidosScreen);
function listadoPedidosScreen(){
    cambiandoPantalla("Pantalla listado de pedidos");
}

iventario.addEventListener('click',iventarioScreen);
function iventarioScreen(){
    cambiandoPantalla("Pantalla inventario");
}

comprasConsolidadas.addEventListener('click',comprasConsolidadasScreen);
function comprasConsolidadasScreen(){
    cambiandoPantalla("Pantalla compras consolidadas");
}

transferenciaPremios.addEventListener('click',transferenciaPremiosScreen);
function transferenciaPremiosScreen(){
    cambiandoPantalla("Pantalla transferencia de premios");
}

entradasSalidasDiversas.addEventListener('click',entradasSalidasDiversasScreen);
function entradasSalidasDiversasScreen(){
    cambiandoPantalla("Pantalla entradas y salidas diversas");
}

inventarioFisico.addEventListener('click',inventarioFisicoScreen);
function inventarioFisicoScreen(){
    cambiandoPantalla("Pantalla inventario fisico");
}

etiquetas.addEventListener('click',etiquetasScreen);
function etiquetasScreen(){
    cambiandoPantalla("Pantalla etiquetas");
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