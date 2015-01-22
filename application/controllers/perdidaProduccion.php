<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PerdidaProduccion extends CI_Controller {

	public function index()
	{
		$this->load->view('view_header');
		$this->load->view('view_perdida_produccion');
	}
}
?>