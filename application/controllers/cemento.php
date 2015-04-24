<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cemento extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_materia');
		$this->load->model('model_perfil');
  	}

	public function index($mensaje = 0)	{

		$this->data['mensaje'] = $mensaje;
		$this->data['proveedores'] = $this->model_materia->getProveedores();
		$this->data['silos'] = $this->model_materia->getSilos();

		$mes = $this->input->post('selectMes');
        $anio = $this->input->post('inputAnio');
        $silo = $this->input->post('selectSiloTabla');
       	if($mes == '') $mes = date('n'); 
       	if($anio == '')	$anio = date('Y');
       	if($silo == '')	$silo = 1;
       	$this->data['tabla'] = $this->model_materia->getTablaCemento($mes, $anio, $silo);
       	$this->data['mes'] = $this->meses($mes);
       	$this->data['anio'] = $anio;

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		$this->data['stockActual1'] =  $this->model_materia->getStockCemento(1);
		$this->data['stockActual2'] =  $this->model_materia->getStockCemento(2);
		$this->data['stockActual3'] =  $this->model_materia->getStockCemento(3);


		$this->load->view('view_header', $this->data);
		$this->load->view('view_cemento', $this->data);
	}

	public function egreso() {		
		$fecha = $this->input->post('inputFechaEgreso');
        $cantidad = $this->input->post('inputConsumo');
        $silo = $this->input->post('selectSiloEgreso');
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_materia->egresoCemento($fecha, $cantidad, $silo, $this->data['data']['id_usuario']);
        redirect('cemento/index/1');
	}

	public function ingreso() {
		$fecha = $this->input->post('inputFechaIngreso');
		$silo = $this->input->post('selectSiloIngreso');
        $remito = $this->input->post('inputNroFactura');
        $origen = $this->input->post('inputKgOrigen');
        $fabrica = $this->input->post('inputKgFabrica');
        $precio = $this->input->post('inputPrecio');
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_materia->ingresoCemento($fecha, $origen, $fabrica, $remito, $silo, $precio,$this->data['data']['id_usuario']);
        $this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Ingreso ".$fabrica." de cemento");
        redirect('cemento/index/1');
	}
	
	public function meses($mes) {
		switch ($mes) {
			case 1: return 'Enereo';
			case 2: return 'Febrero';
			case 3: return 'Marzo';
			case 4: return 'Abril';
			case 5: return 'Mayo';
			case 6: return 'Junio';
			case 7: return 'Julio';
			case 8: return 'Agosto';
			case 9: return 'Septiembre';
			case 10: return 'Octubre';
			case 11: return 'Noviembre';
			case 12: return 'Diciemrbe';
		}
	}
}
?>