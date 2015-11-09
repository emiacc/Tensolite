<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insumos extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_insumos');
		$this->load->model('model_perfil');
  	}

  	public function index($mensaje = 0)	{
		$this->data['mensaje'] = $mensaje;
		

		$this->data['solicitudes'] = $this->model_insumos->getSolicitudes();
        $this->data['detalles'] = $this->model_insumos->getDetalles();
        $this->data['estados'] = $this->model_insumos->getEstadosMantenimiento();

        $this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		

		$this->load->view('view_header', $this->data);
		$this->load->view('view_insumos', $this->data);
	}

	public function ingresoSolicitud()
	{
		$fecha = $this->input->post('inputFechaOrden');
        $fecha = date('Y-m-d',strtotime($fecha));
        $descripcion = $this->input->post('inputDescripcion');
        $tiempo = $this->input->post('selectTiempo');
        $origen = $this->input->post('origen');
        $nroSolicitud = $this->model_insumos->ingreso_orden($fecha, $descripcion, $tiempo, $origen, $this->data['data']['id_usuario']);
        redirect('insumos/index/'.$nroSolicitud);
	}

	public function ingresoUpdate()
	{
		$cerrarF = $this->input->post('cerrarF');
        if($cerrarF == 'on') $cerrarF = 2;
        else $cerrarF = 1;

		$id = $this->input->post('id_solicitud');
        $detalle = $this->input->post('id_detalle');
        $verificado = $this->input->post('inputVerificado');
        $fecha = $this->input->post('inputFechaCierre');       
        $comentario = $this->input->post('inputComentario');
        
		$this->model_insumos->update_produccion($id, $cerrarF, $detalle, $verificado, $fecha, $comentario, $this->data['data']['id_usuario']);
        
        redirect('insumos/index/1');
	}

	public function imprimir($id = 0)
	{
		$this->data['solicitud'] = $this->model_insumos->getSolicitudesId($id);
        $this->data['detalles'] = $this->model_insumos->getDetallesId($id);

		$this->load->view('impresion/insumo_print_view', $this->data);
	}

	public function nuevaSolicitud()
	{
		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		$this->load->view('view_header', $this->data);
		$this->load->view('view_insumos_nuevo_form', $this->data);

	}

	public function form($id = 0, $mensaje = 0)
	{
		if($id == 0) redirect('insumos');
		$this->data['id_solicitud'] = $id;
		
		$this->data['estado_solicitud'] = $this->model_insumos->getEstado($id);;
		
		$this->data['detalles'] = $this->model_insumos->getDetallesId($id);

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		$this->load->view('view_header', $this->data);
		$this->load->view('view_insumos_form', $this->data);

	}

	public function eliminar()
	{
		$this->model_insumos->eliminar_insumos($this->input->post('solicitud'));
		redirect('insumos');
	}
}