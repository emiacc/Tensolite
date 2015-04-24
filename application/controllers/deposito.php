<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deposito extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_deposito');
		$this->load->model('model_perfil');
  	}

	public function index($mensaje = 0, $sector = 1)	{
		$this->data['mensaje'] = $mensaje;
		$this->data['lugares'] = $this->model_deposito->getLugares();
		$this->data['sector'] = $sector;

		$this->data['despachos'] = $this->model_deposito->getDespachos();
		$this->data['producciones'] = $this->model_deposito->getProducciones();

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		$this->data['aster'] = $this->model_deposito->getAS();
		$this->data['a1'] = $this->model_deposito->getA1();
		$this->data['a2'] = $this->model_deposito->getA2();
		$this->data['b1'] = $this->model_deposito->getB1();
		$this->data['b2'] = $this->model_deposito->getB2();
		$this->data['c'] = $this->model_deposito->getC();
		$this->data['d'] = $this->model_deposito->getD();
		$this->data['e'] = $this->model_deposito->getE();
		
		$this->load->view('view_header', $this->data);
		$this->load->view('view_deposito', $this->data);
	}

	public function ingreso() {		
		$lugar = $this->input->post('lugar');
		$cantidad = $this->input->post('cant');
		if($cantidad < 1) {
			redirect('deposito/index/2');
			return;
		}
        $this->model_deposito->ingreso($lugar, $cantidad, 1, $this->data['data']['id_usuario']);
        if($lugar<41) $s = 1;
        elseif($lugar<129) $s = 2;
        else $s = 3;
        redirect('deposito/index/1/'.$s);
	}

	public function egreso() {		
		$lugar = $this->input->post('lugar');
		$cantidad = $this->input->post('cant');
		if($cantidad < 1) {
			redirect('deposito/index/2');
			return;
		}
        $this->model_deposito->ingreso($lugar, $cantidad, 0, $this->data['data']['id_usuario']);
        if($lugar<41) $s = 1;
        elseif($lugar<129) $s = 2;
        else $s = 3;
        redirect('deposito/index/1/'.$s);
	}
}
?>