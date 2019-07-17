<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('Sio_model');

	}

	public function index(){
		$this->load->view('home_login_view');
	}

	public function loginSio(){
		$loginUserDataSio = array(
			"userSio"=>$this->input->post('userSio'),
			"passwordSio"=>$this->input->post('passwordSio')
		);
		$loginSio['result'] = $this->Sio_model->loginSIO($loginUserDataSio);
		if ($loginSio['result'][0]){
			$userData = array(
				'logged_in'      => TRUE,
				'idUsuario'      => $loginSio['result'][0]->idUsuario,
				'nombreUsuario'  	  => $loginSio['result'][0]->nombreUsuario,
				'pwd'	  => $loginSio['result'][0]->pwd
			);
			$this->session->set_userdata($userData);
			$this->output->set_output(json_encode($loginSio['result'][0]));
		}else{
			$this->output->set_output(json_encode(0));
		}
	}

	public function home(){
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

	public function iventario(){
		$this->load->view('iventario_view');
		$this->load->view('modales/modalInventario');
	}

	public function comprasConsolidadas(){
		$this->load->view('comprasConsolidadas_view');
		$this->load->view('modales/modalComprasConsolidadas');
	}

	public function transferenciaPremios(){
		$this->load->view('transferenciaPremios_view');
		$this->load->view('modales/modalTransferenciadePremios');
	}

	public function entradasSalidasDiversas(){
		$this->load->view('entradasSalidasDiversas_view');
	}

	public function inventarioFisico(){
		$this->load->view('inventarioFisico_view');
	}

	public function etiquetas(){
		$this->load->view('etiquetas_view');
	}

	public function monitor(){
		$this->load->view('monitor_view');
		$this->load->view('modales/modalMonitor');
	}

	public function seguimiento(){
		$this->load->view('seguimiento_view');
	}

	public function pruebasEntrega(){
		$this->load->view('pruebasEntrega_view');
	}

	public function premios(){
		$this->load->view('premios_view');
	}

	public function visualizarCanjesFacturar(){
		$this->load->view('visualizarCanjesFacturar_view');
		$this->load->view('modales/modalVisualCanjeFac');
	}

	public function facturacion(){
		$this->load->view('facturacion_view');
	}

	public function sincronizarPremios(){
		$this->load->view('sincronizarPremios_view');
	}

	public function participantes(){
		$this->load->view('participantes_view');
	}

	public function tickets(){
		$this->load->view('tickets_view');
	}

	public function correoLiverpool(){
		$this->load->view('correoLiverpool_view');
	}

	public function salirSio(){
		$userData = array('logged_in','idUsuario','nombreUsuario','pwd');
		$this->session->unset_userdata($userData);
		redirect('Welcome');
	}
}
