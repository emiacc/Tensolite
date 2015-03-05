<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()	{
		redirect('login/logueado');
		//$this->load->view('view_login');
	}

	public function iniciar_sesion($state = 0) {
      $data['state'] = $state;
		$this->load->view('view_login', $data);
	}

	public function iniciar_sesion_post() {
      if ($this->input->post()) {
         //si el usuario desea que se mantenga iniciada la sesion
         $mantener = $this->input->post('mantener');
         if($mantener) $this->session->sess_expire_on_close = FALSE;
         else $this->session->sess_expire_on_close = TRUE;
         
         //tomo los datos del formulario y realizo la consulta
         $nombre_usuario = $this->input->post('nombre_usuario');
         $password = $this->input->post('password');
         $this->load->model('model_login');
         $usuario = $this->model_login->login($nombre_usuario, $password);
         
         //guardo los datos del usuario
         if ($usuario) {
            $usuario_data = array(
               'logueado' => TRUE,
               'user_data' => array(
                  'id_usuario' => $usuario->id_usuario,
                  'nombre' => $usuario->nombre_usuario,
                  'rol' => $usuario->rol
               )
            );
            $this->session->set_userdata($usuario_data);
            redirect('login/logueado');
         } 
         else {
            //si el usuario o pass son incorrectos redirecciono
            redirect('login/iniciar_sesion/1');
         }
      } 
      else {
         $this->iniciar_sesion();
      }
   }

   public function logueado() {
      if($this->session->userdata('logueado'))
         redirect('resumen');
      else
         redirect('login/iniciar_sesion');
      
   }

   public function cerrar_sesion() {
      $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      redirect('login/iniciar_sesion');
   }
}
?>