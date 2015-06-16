<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mantenimiento extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_mantenimiento');
		$this->load->model('model_perfil');
  	}

  	public function index($mensaje = 0, $sector = 1)	{
		$this->data['mensaje'] = $mensaje;
		

		$this->data['solicitudes'] = $this->model_mantenimiento->getSolicitudes();
        $this->data['detalles'] = $this->model_mantenimiento->getDetalles();

        $this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		

		$this->load->view('view_header', $this->data);
		$this->load->view('view_mantenimiento', $this->data);
	}

	public function ingresoSolicitud()
	{
		$fecha = $this->input->post('inputFechaOrden');
        $fecha = date('Y-m-d',strtotime($fecha));
        $descripcion = $this->input->post('inputDescripcion');
        $tiempo = $this->input->post('selectTiempo');
        $nroSolicitud = $this->model_mantenimiento->ingreso_orden($fecha, $descripcion, $tiempo, $this->data['data']['id_usuario']);
        redirect('mantenimiento/index/'.$nroSolicitud);
	}

	public function ingresoUpdate()
	{
		$id = $this->input->post('id_solicitud');
        $detalle = $this->input->post('id_detalle');
        $verificado = $this->input->post('inputVerificado');
        $fecha = $this->input->post('inputFechaCierre');       
        $comentario = $this->input->post('inputComentario');
        
        $this->model_mantenimiento->update_produccion($id, $detalle, $verificado, $fecha, $comentario, $this->data['data']['id_usuario']);
        redirect('mantenimiento/index/1');
	}

	public function imprimir($id = 0)
	{
		$this->data['solicitud'] = $this->model_mantenimiento->getSolicitudesId($id);
        $this->data['detalles'] = $this->model_mantenimiento->getDetallesId($id);

		$this->load->view('impresion/mantenimiento_print_view', $this->data);
	}
}