<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recuperacion extends CI_Controller {

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
		$this->data['tabla'] = $this->model_produccion->getTabla_recuperacion($mes, $anio);
       	$this->data['mes'] = $this->meses($mes);
       	$this->data['diasmes'] = $this->dias_meses($mes)+1;
       	$this->data['anio'] = $anio;

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		//grafico
		$this->data["resumenRecuperacion"] = $this->model_produccion->resumenRecuperacion($mes,$anio);
		$this->data["widgetRecuperacion"] = $this->model_produccion->getRecuperacionWidget($mes,$anio);

		$this->data['historico'] = $this->model_produccion->getRecuperaciones();

		$this->load->view('view_header', $this->data);
		$this->load->view('view_recuperacion', $this->data);
	}

	public function ingreso() {		
		$fecha = $this->input->post('inputFechaRecuperacion');
		$medida = $this->input->post('selectMedida');
        $cantidad = $this->input->post('inputCantidad');
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_produccion->ingreso_recuperacion($fecha, $medida, $cantidad, $this->data['data']['id_usuario']);
        $this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Recuperación ".$cantidad." de ".number_format((($medida)/10),2));


		$this->load->model('model_deposito');
        $this->model_deposito->new_ingreso_recuperacion($cantidad, $medida, $this->data['data']['id_usuario']);

        redirect('recuperacion/index/1');
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

	public function eliminar()
	{
		$id_recuperacion = $this->input->post("id_recuperacion");
		$datos = $this->model_produccion->get_cantidad_medida_recuperacion($id_recuperacion);
		
		$datos->medida;
		$datos->cantidad;
		$this->load->model('model_deposito');
		$this->db->trans_begin();
		$this->model_deposito->new_egreso_perdida($datos->cantidad, $datos->medida, $this->data['data']['id_usuario']);
        $this->model_produccion->delete_recuperacion($id_recuperacion);
        $this->db->trans_commit();

        redirect('despacho/index/1');
	}
}
?>