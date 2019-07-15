<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/home_view_header');
		$this->load->view('home_view');
		$this->load->view('includes/home_view_footer');
	}

	public function busquedaCanje(){
		$this->load->view('busquedaCanje_view');
		$this->load->view('modales/modalBuscarCanje');
	}

	public function confirmarTarjetasEntregadas(){
		$this->load->view('confirmarTarjetasEntregadas_view');
		$this->load->view('modales/modalTarjetasEntregadas');
	}

	public function depositoSaldo(){
		$this->load->view('depositoSaldo_view');
		$this->load->view('modales/modalDepositoSaldo');
	}

	public function envioActivacionesPendientes(){
		$this->load->view('envioActivacionesPendientes_view');
	}

	public function depositoSaldoSolicitado(){
		$this->load->view('depositoSaldoSolicitado_view');
	}

	public function saldoLiverpool(){
		$this->load->view('saldoLiverpool_view');
	}

	public function pendientesXProgramar(){
		$this->load->view('pendientesXProgramar_view');
	}

	public function notificacionCanjes(){
		$this->load->view('notificacionCanjes_view');
		$this->load->view('modales/modalNotificacionCanjes');
	}

	public function generarPedidos(){
		$this->load->view('generarPedidos_view');
		$this->load->view('modales/modalGenerarPedidos');
	}

	public function estatusPedidos(){
		$this->load->view('estatusPedidos_view');
		$this->load->view('modales/modalEstatusPedidos');
	}

	public function recepcionPedidos(){
		$this->load->view('recepcionPedidos_view');
		$this->load->view('modales/modalRecepcionPedidos');
	}

	public function proveedores(){
		$this->load->view('proveedores_view');
	}

	public function listadoPedidos(){
		$this->load->view('listadoPedidos_view');
		$this->load->view('modales/modalListadoPedidos');
	}
}
