<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Despacho extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_produccion');
		$this->load->model('model_perfil');
  	}

	public function index($mensaje = 0)	{
		$this->data['mensaje'] = $mensaje;
		
		$mes = $this->input->post('selectMes');
        $anio = $this->input->post('inputAnio');
        if($mes == '') $mes = date('n'); 
       	if($anio == '')	$anio = date('Y');
		$this->data['tabla'] = $this->model_produccion->getTabla_despacho($mes, $anio);
       	$this->data['mes'] = $this->meses($mes);
       	$this->data['diasmes'] = $this->dias_meses($mes)+1;
       	$this->data['anio'] = $anio;

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		//grafico
		$this->data["resumenDespacho"] = $this->model_produccion->resumenDespacho($mes,$anio);
		$this->data["widgetDespacho"] = $this->model_produccion->getDespachoWidget($mes,$anio);

		$this->load->view('view_header', $this->data);
		$this->load->view('view_despacho', $this->data);
	}

	public function ingreso() {		
		$fecha = $this->input->post('inputFechaDespacho');
		$medida = $this->input->post('selectMedida');
        $cantidad = $this->input->post('inputCantidad');
        if($cantidad < 1) {
			redirect('despacho/index/2');
			return;
		}
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_produccion->ingreso_despacho($fecha, $medida, $cantidad, $this->data['data']['id_usuario']);
        $this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Despacho ".$cantidad." de ".number_format((($medida)/10),2));

        //resto en deposito
        $sector = $this->input->post('selectSector');
		$fila = $this->input->post('selectFila');
		$columna = $this->input->post('selectColumna');
		if($sector == 1)
			$lugar = (($fila-1)*5)+$columna;
		elseif ($sector == 2) 			
			$lugar = 40+(($fila-1)*11)+$columna;		
		else {//sector 3
			if($fila < 4 )
				$lugar = 128+(($fila-1)*12)+$columna;
			elseif ($fila == 4)
				$lugar = 128+(($fila-1)*12)+$columna+1;
			elseif ($fila < 8) 
				$lugar = 128+(($fila-1)*12)+$columna+2;
			else
				$lugar = 128+(($fila-1)*12)+$columna+3;
		}

		$this->load->model('model_deposito');
        $this->model_deposito->ingreso($lugar, $cantidad, 0, $this->data['data']['id_usuario']);
       
        
        redirect('despacho/index/1');
	}

	public function meses($mes) {
		switch ($mes) {
			case 1: return 'Enero';
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