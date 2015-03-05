<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
    parent::__construct();   
    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
    $this->data = array();       
    $this->data['data'] = $this->session->userdata('user_data');
    //$this->data['alldata'] = $this->session->all_userdata();
  }

	public function index()	{
		$this->load->view('view_header', $this->data);
		$this->load->view('view_home', $this->data);
	}
}