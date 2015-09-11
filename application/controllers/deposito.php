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
		/*$this->data['lugares'] = $this->model_deposito->getLugares();
		$this->data['sector'] = $sector;*/

		/*$this->data['despachos'] = $this->model_deposito->getDespachos();
		$this->data['producciones'] = $this->model_deposito->getProducciones();*/

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		/*$this->data['aster'] = $this->model_deposito->getAS();
		$this->data['a1'] = $this->model_deposito->getA1();
		$this->data['a2'] = $this->model_deposito->getA2();
		$this->data['b1'] = $this->model_deposito->getB1();
		$this->data['b2'] = $this->model_deposito->getB2();
		$this->data['c'] = $this->model_deposito->getC();
		$this->data['d'] = $this->model_deposito->getD();
		$this->data['e'] = $this->model_deposito->getE();*/





		$this->data['medidas_aster'] = array("2.00", "2.20", "2.40", "2.60", "2.80", "3.00"); 
		$this->data['medidas_a1'] = array("3.20", "3.40"); 
		$this->data['medidas_a2'] = array("3.50", "3.60", "3.80"); 
		$this->data['medidas_b1'] = array("4.00", "4.20"); 
		$this->data['medidas_b2'] = array("4.40", "4.50", "4.60"); 
		$this->data['medidas_c'] = array("4.80", "5.00", "5.20", "5.40"); 
		$this->data['medidas_d'] = array("5.60", "5.80", "6.00", "6.20"); 
		$this->data['medidas_e'] = array("6.40", "6.60", "6.80", "7.00", "7.20", "7.40", "7.60", "7.80", "8.00", "8.20");

		$this->data['cantidades_aster'] = array($this->get_stock_x_medida(20), $this->get_stock_x_medida(22), $this->get_stock_x_medida(24), $this->get_stock_x_medida(26), $this->get_stock_x_medida(28), $this->get_stock_x_medida(30)); 
		$this->data['cantidades_a1'] = array($this->get_stock_x_medida(32), $this->get_stock_x_medida(34)); 
		$this->data['cantidades_a2'] = array($this->get_stock_x_medida(35), $this->get_stock_x_medida(36), $this->get_stock_x_medida(38)); 
		$this->data['cantidades_b1'] = array($this->get_stock_x_medida(40), $this->get_stock_x_medida(42)); 
		$this->data['cantidades_b2'] = array($this->get_stock_x_medida(44), $this->get_stock_x_medida(45), $this->get_stock_x_medida(46)); 
		$this->data['cantidades_c'] = array($this->get_stock_x_medida(48), $this->get_stock_x_medida(50), $this->get_stock_x_medida(52), $this->get_stock_x_medida(54)); 
		$this->data['cantidades_d'] = array($this->get_stock_x_medida(56), $this->get_stock_x_medida(58), $this->get_stock_x_medida(60), $this->get_stock_x_medida(62)); 
		$this->data['cantidades_e'] = array($this->get_stock_x_medida(64), $this->get_stock_x_medida(66), $this->get_stock_x_medida(68), $this->get_stock_x_medida(70), $this->get_stock_x_medida(72), $this->get_stock_x_medida(74), $this->get_stock_x_medida(76), $this->get_stock_x_medida(78), $this->get_stock_x_medida(80), $this->get_stock_x_medida(82));






		
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

	public function get_stock_x_medida($medida)
	{
		return $this->model_deposito->get_stock_x_medida($medida);
	}
}
?>