<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PerdidaPlaya extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_produccion');
  	}

	public function index($mensaje = 0)	{
		$this->data['mensaje'] = $mensaje;
		
		$mes = $this->input->post('selectMes');
        $anio = $this->input->post('inputAnio');
        if($mes == '') $mes = date('n'); 
       	if($anio == '')	$anio = date('Y');
		$this->data['tabla'] = $this->model_produccion->getTabla_perdida_playa($mes, $anio);
       	$this->data['mes'] = $this->meses($mes);
       	$this->data['diasmes'] = $this->dias_meses($mes)+1;
       	$this->data['anio'] = $anio;


		$this->load->view('view_header');
		$this->load->view('view_perdida_playa', $this->data);
	}

	public function ingreso() {		
		$fecha = $this->input->post('inputFechaPerdida');
		$medida = $this->input->post('selectMedida');
        $cantidad = $this->input->post('inputCantidad');
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_produccion->ingreso_perdida_playa($fecha, $medida, $cantidad, $this->data['data']['id_usuario']);
        redirect('PerdidaPlaya/index/1');
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
	
	public function dias_meses($mes) {
		switch ($mes) {
			case 1: return 31;
			case 2: return 28;
			case 3: return 31;
			case 4: return 30;
			case 5: return 31;
			case 6: return 30;
			case 7: return 31;
			case 8: return 31;
			case 9: return 30;
			case 10: return 31;
			case 11: return 30;
			case 12: return 31;
		}
	}
}
?>