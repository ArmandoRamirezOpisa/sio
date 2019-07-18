<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>SIO</title>
</head>

<body>
    <!--Menu principal-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a id="homeSIO" class="navbar-brand" href="#">
            <img src="../assets/img/sioLogo.jpg" width="50" height="30" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarCanjes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-angle-double-right"></i> Canjes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarCanjes">
                        <a href="#" id="busquedaCanje" class="dropdown-item">Busqueda de canje </i></a>
                        <a href="#" class="dropdown-item dropdown-toggle" id="actiTarjeta" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activacion de tarjetas</a>
                        <div class="dropdown-menu" aria-labelledby="actiTarjeta">
                            <a href="#" id="confirmarTarjetasEntregadas" class="dropdown-item">Confirmar tajetas entregadas</a>
                            <a href="#" id="depositoSaldo" class="dropdown-item">Deposito de saldo</a>
                            <a href="#" id="envioActivacionesPendientes" class="dropdown-item">Envio de activaciones pendientes</a>
                            <a href="#" id="depositoSaldoSolicitado" class="dropdown-item">Deposito de saldo solicitado</a>
                            <a href="#" id="saldoLiverpool" class="dropdown-item">Saldo liverpool</a>
                        </div>
                        <a href="#" id="pendientesXProgramar" class="dropdown-item">Pendientes por programar</a>
                        <a href="#" id="notificacionCanjes" class="dropdown-item">Notificacion de canjes</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Pedidos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-folder"></i> Pedidos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Pedidos">
                        <a href="#" id="generarPedidos" class="dropdown-item">Generar pedidos </i></a>
                        <a href="#" id="estatusPedidos" class="dropdown-item">Estatus de pedidos </i></a>
                        <a href="#" id="recepcionPedidos" class="dropdown-item">Recepcion de pedidos </i></a>
                        <a href="#" id="proveedores" class="dropdown-item">Proveedores </i></a>
                        <a href="#" id="listadoPedidos" class="dropdown-item">Listado de pedidos </i></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="almacen" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-industry"></i> Almacen
                    </a>
                    <div class="dropdown-menu" aria-labelledby="almacen">
                        <a id="iventario" class="dropdown-item" href="#">Inventario</a>
                        <a id="comprasConsolidadas" class="dropdown-item" href="#">Compras consolidadas</a>
                        <a id="transferenciaPremios" class="dropdown-item" href="#">Transferencia de premios</a>
                        <a id="entradasSalidasDiversas" class="dropdown-item" href="#">Entradas y salidas diversas</a>
                        <a id="inventarioFisico" class="dropdown-item" href="#">Inventario fisico</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a id="etiquetas" class="nav-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-ticket-alt"></i> Etiquetas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Tracking" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-truck-moving"></i> Tracking
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Tracking">
                        <a id="monitor" class="dropdown-item" href="#">Monitor</a>
                        <a id="seguimiento" class="dropdown-item" href="#">Seguimiento</a>
                        <a id="pruebasEntrega" class="dropdown-item" href="#">Pruebas de entrega</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a id="premios" class="nav-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-award"></i> Premios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Facturacion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-money-bill"></i> Facturacion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Facturacion">
                        <a id="visualizarCanjesFacturar" class="dropdown-item" href="#">Visualizar canjes por facturar</a>
                        <a id="facturacion" class="dropdown-item" href="#">Facturacion</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Programas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-th"></i> Programas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Programas">
                        <a id="sincronizarPremios" class="dropdown-item" href="#">Sincronizar premios</a>
                        <a id="participantes" class="dropdown-item" href="#">Participantes</a>
                        <a id="tickets" class="dropdown-item" href="#">Tickets</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Explorador" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-file-export"></i> Explorador
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Explorador">
                        <a id="correoLiverpool" class="dropdown-item" href="#">Correo liverpool</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary my-2 my-sm-0 dropdown-toggle" type="button" id="userSession" data-toggle="dropdown"> 
                            <i class="fas fa-user"></i> <?php echo $this->session->userdata('usuario'); ?>
                        </button>
                    <div class="dropdown-menu" aria-labelledby="userSession">
                        <a id="configUserSio" class="dropdown-item" href="#"><i class="fa fa-cog"></i> Configuracion</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalCerrarSesion">Cerrar Sesion</a>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <!--Fin Menu principal-->