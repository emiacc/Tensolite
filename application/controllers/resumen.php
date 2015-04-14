<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resumen extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
		$this->load->model('model_perfil');
  	}

	public function index()	{
		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		$this->load->view('view_header', $this->data);
		$this->load->view('view_resumen', $this->data);
	}
}