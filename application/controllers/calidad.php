<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calidad extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_mantenimiento');
		$this->load->model('model_perfil');
  	}

  	public function index($mensaje = 0)	{
		$this->data['mensaje'] = $mensaje;
		
		$this->data['formularios'] = $this->model_mantenimiento->getFormularios();

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		$this->load->view('view_header', $this->data);
		$this->load->view('view_calidad', $this->data);
	}

	public function nuevoFormulaio() {
		$fecha = $this->input->post('inputFechaOrden');
        $fecha = date('Y-m-d',strtotime($fecha));
        $tipo = $this->input->post('selectTipo');
        $sector = $this->input->post('selectSector');
        $deteccion = $this->input->post('deteccion');
        $analisis = $this->input->post('analisis');
        $plan = $this->input->post('plan');
        $verificacion = $this->input->post('verificacion');
        
        $nroSolicitud = $this->model_mantenimiento->ingreso_calidad($fecha, $tipo, $sector, $deteccion, $analisis, $plan, $verificacion, $this->data['data']['id_usuario']);
        redirect('calidad/index/'.$nroSolicitud);
	}	
}