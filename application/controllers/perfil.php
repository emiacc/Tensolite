<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_perfil');
  	}

	public function index($mensaje = 0)	{
		$this->data['mensaje'] = $mensaje;
		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->load->view('view_header', $this->data);
		$this->load->view('view_perfil', $this->data);
	}

	public function do_upload(){		

		$image_path = realpath(APPPATH . '../uploads/profile/');
		$config['upload_path'] = $image_path;
		$config['file_name'] = $this->data['data']['id_usuario']."-0";
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']    = '200000';
	    $config['max_width']  = '1200';
	    $config['max_height']  = '1200';
	 
	    $this->load->library('upload',$config);

	    if ( ! $this->upload->do_upload())
	    {
	        $error = $this->upload->display_errors();
	 		if (!isset($_FILES['image'])){
	 			$this->model_perfil->update($this->input->post('inputNombre'),$this->input->post('inputApellido'),$this->data['data']['id_usuario']);
	 			redirect('perfil/index/1');
	 		}
	 		else
	 			redirect('perfil/index/2');
	    }
	    else
	    {
	        $file_info = $this->upload->data();
            $this->model_perfil->updateImg($this->input->post('inputNombre'),$this->input->post('inputApellido'),$file_info['file_name'],$this->data['data']['id_usuario']);
            $this->data['data']['img'] = $file_info['file_name'];
	 		redirect('perfil/index/1');	        
	    }
    }

    public function editar_pass(){
    	$pass1 = $this->input->post('inputPass1');
		$pass2 = $this->input->post('inputPass2');
		if($pass1 != $pass2)
        	redirect('perfil/index/3');
		else{
        	$this->model_perfil->editar_pass($pass1, $this->data['data']['id_usuario']);
       		redirect('perfil/index/1');
		}	
    }
}
?>