<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deposito extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_deposito');
  	}

	public function index($mensaje = 0)	{
		$this->data['mensaje'] = $mensaje;
		$this->data['lugares'] = $this->model_deposito->getLugares();
		
		$this->load->view('view_header');
		$this->load->view('view_deposito', $this->data);
	}
}
?>