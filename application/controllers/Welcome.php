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
				'logged_in' => TRUE,
				'idUsuario' => $loginSio['result'][0]->idUsuario,
				'nombreUsuario' => $loginSio['result'][0]->nombreUsuario,
				'pwd' => $loginSio['result'][0]->pwd,
				'usuario' => $loginSio['result'][0]->usuario
			);
			$this->session->set_userdata($userData);
			$this->output->set_output(json_encode($loginSio['result'][0]));
		}else{
			$this->output->set_output(json_encode(0));
		}
	}

	public function home(){

		if($this->session->userdata('nombreUsuario')){
			$this->load->view('includes/home_view_header');
			$this->load->view('home_view');
			$this->load->view('includes/home_view_footer');
		}else{
			redirect("Welcome");
		}
	}

	public function busquedaCanje(){
		$this->load->view('busquedaCanje_view');
		$this->load->view('modales/modalBuscarCanje');
	}

	/*
		La siguiente funcion, es para llevar a cabo la busqueda del Canje por Folio
		En los siguientes comentarios podras ver como funciona la logina.
		Entonces sigue leyendo para que sigas viendo como funciona
	*/

	public function buscandoCanje(){
		/*
			Aqui inicia la funcion, recibiendo dos parametros como la opcion de la busqueda
			que ya esta delimitada con un switch case, para que sea una unica funcion;
			el segundo parametro que recibe es la informacion que se escribio en la caja de texto;
			tal vez seria mas conveniente que la variable de info se cambiara por algo que se entendiera
			mucho mas y que sea mas general
		*/
		$opcion = $this->input->post('opcion');
		$info = $this->input->post('info');
		/*
			Aqui el switch empieza a verificar que opcion es para que haga diferentes tipo de acciones.
			Una forma importante es cuando se termine de escribir todas las acciones de cada una de las
			opciones, hay que buscar cual es la que se repite mas, para poder realizar una funcion y
			que se pueda reducir el numero de lineas que se esta ocupando.
		*/
		switch ($opcion) {
			/*
				Este es la opcion cuando se selecciona folio
			*/
			case "folio":
				/*
					La siguiente linea va al modelo para extraer el codigo de premio y el codigo de programa
					del folio del caje que se esta buscando, esta busqueda se esta realizando por que
					se facilia los querys que se van a llevar y los resultados obtenidos se van a juntar para
					que el query mas grande pueda obtener toda la informacion que se necesita.
				*/
				$dataCanje = $this->Sio_model->codPremioCodProgramaCanje($info);
				/*
					El siguiente if unicamente verifica si la informacion existe
				*/
				if($dataCanje){
					/*
						la siguiente consulta unicamente obtiene la cantidad que se tiene en la tbl de
						pedidoDetalle, usando el codigo de premio, previamente obtenido
					*/
					$dataPedidoDetalleCantidad = $this->Sio_model->cantidadPedidoDetalle($dataCanje[0]['premio']);
					/*
						de igual forma que la anterior linea, esta obtiene la cantidad de la tabla esDiversas
					*/
					$dataESDivCantidad = $this->Sio_model->cantidadEsDiversas($dataCanje[0]['premio']);
					/*
						La siguiente linea obtiene la cantidad de la tbl canjeDetalle
					*/
					$dataCanjeCDetalleCantidad = $this->Sio_model->cantidadCanjeDetalle($dataCanje[0]['premio']);
					/*
						Aqui se realiza la comparacion, para verificar si las tres consultas antes realizadas,
						obtuvieron la informacion correctamente
					*/
					if($dataPedidoDetalleCantidad && $dataESDivCantidad && $dataCanjeCDetalleCantidad){
						/*
							La siguiente linea de codigo, obtiene informacion de la tabla de activaciones, usando
							dos parametros, el primero es el codigo de programa obtenido anteriormente y el folio del
							canje.
						*/
						$dataActivacionesCanjes = $this->Sio_model->infoActivacionesCanje($dataCanje[0]['programa'],$info);
						/*
							EL if funciona para revisar que si el arreglo esta vacio o no, en caso de que este vacio,
							unicamente va a reescribir la variable por otro arreglo
						*/
						if (empty($dataActivacionesCanjes)) {
							$dataActivacionesCanjes=array("Activacion"=>"NULL");
						}
						/*
							La siguiente linea de codigo es la parte central de toda la busqueda, ya que esta linea de codigo,
							ya realiza toda la busqueda del query papa para traer toda la data que se necesita.
							Actualmente ya esta todo armando, solo que mando un error 500, ya que parece que algo en la sintaxis
							esta mal, lo unico que faltaria seria ver el por que esta fallando; una vez que se haya solucionado
							bsucar todas las similitudes que se tenga con las otras opciones y crear una funcion unica para
							no esta repitiendo codigo a lo pendejo.
						*/
						/*
							Una vez que tengas la soluciones realizada, puedes borrar todas las lineas de codigo que escribiste
						*/
						$dataBusquedaCanjeTotal = $this->Sio_model->busquedaCanjeXFolio($dataPedidoDetalleCantidad[0]['cantidad'],$dataESDivCantidad[0]['cantidad'],$dataCanjeCDetalleCantidad[0]['cantidad'],$dataActivacionesCanjes['Activacion'],$info);
						if($dataBusquedaCanjeTotal){
							$this->output->set_output(json_encode($dataBusquedaCanjeTotal));
						}
					}
				}else{
					$this->output->set_output(json_encode(0));
				}
				break;
			case "nombreParticipante":
				echo "Your favorite color is blue!";
				break;
			case "po":
				echo "Your favorite color is green!";
				break;
			case "cp":
				echo "asdasd";
				break;
			case "guia":
				echo "asdasd";
				break;
			case "company":
				echo "company";
				break;
		}
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

	public function configUserSio(){
		$this->load->view('configUserSio_view');
	}

	public function updateUserNameSio(){
		$nameUserDataSio = array(
			"newUserSio"=>$this->input->post('newUserSio')
		);
		$userUpdated = $this->Sio_model->updateNameUser($nameUserDataSio);
		if($userUpdated){
			$this->session->set_userdata('usuario', $nameUserDataSio['newUserSio']);
			$this->output->set_output(json_encode($nameUserDataSio));
		}else{
			$this->output->set_output(json_encode(0));
		}
	}

	public function updatePasswordSio(){
		$pwsDataSio = array(
			"newPassword"=>$this->input->post('newPassword')
		);
		$pwdUpdated = $this->Sio_model->updatePwd($pwsDataSio);
		if($pwdUpdated){
			$this->session->set_userdata('pwd', $pwsDataSio['newPassword']);
			$this->output->set_output(json_encode($pwsDataSio));
		}else{
			$this->output->set_output(json_encode(0));
		}
	}

	public function salirSio(){
		$userData = array('logged_in','idUsuario','nombreUsuario','pwd');
		$this->session->unset_userdata($userData);
		redirect('Welcome');
	}
}