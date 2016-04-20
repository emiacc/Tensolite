<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PerdidaProduccion extends CI_Controller {

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
		$fecha = new Datetime($this->input->post('inputFechaPerdidaProduccion2'));
		$dia = $fecha->format('d');
		$mes = $fecha->format('m');
		$anio = $fecha->format('Y');
		//$dia = $this->input->post('inputDia');
		//$mes = $this->input->post('selectMes');
        //$anio = $this->input->post('inputAnio');
        
        if($dia == '') $dia = date('j'); 
        if($mes == '') $mes = date('n'); 
       	if($anio == '')	$anio = date('Y');
       	$this->data['tabla'] = $this->model_produccion->getTabla_perdida_produccion($dia, $mes, $anio);
       	$this->data['dia'] = $dia;
       	$this->data['mes'] = $this->meses($mes);
       	$this->data['anio'] = $anio;

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		//grafico
		$this->data["resumenPerdida"] = $this->model_produccion->resumenPerdida($mes,$anio,0);
		$this->data["widgetPerdida"] = $this->model_produccion->getPerdidaWidget($mes,$anio,0);

		$this->data['historico'] = $this->model_produccion->getPerdidasProduccion();

		$this->load->view('view_header', $this->data);
		$this->load->view('view_perdida_produccion', $this->data);
	}

	public function ingreso() {		
		$fecha = $this->input->post('inputFechaPerdidaProduccion');
		$banco = $this->input->post('selectBanco');
        $medida = $this->input->post('selectMedida');
        $cantidad = $this->input->post('inputCantidad');
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_produccion->ingreso_perdida_produccion($fecha, $banco, $medida, $cantidad, $this->data['data']['id_usuario']);
        $this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Perdida en producción ".$cantidad." de ".number_format((($medida)/10),2));
        
		$this->load->model('model_deposito');
        $this->model_deposito->new_egreso_perdida($cantidad, $medida, $this->data['data']['id_usuario']);
        redirect('perdidaProduccion/index/1');
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

	public function eliminar()
	{
		$id_perdida = $this->input->post("id_perdida");
		
		$this->model_produccion->delete_perdida($id_perdida);

        redirect('perdidaProduccion/index/1');
	}
}
?>