<?php
class Model_perfil extends CI_Model { 

    public function __construct() {
    	parent::__construct();
   	}

   	public function getUser($usuario){
   		$this->db->select('nombre, apellido, foto');
   		return $this->db->get_where('usuarios', array('id_usuario' => $usuario))->row();
   	}

   	public function update($nombre, $apellido, $usuario) {
   		$data = array(
	               'nombre' => $nombre,
	               'apellido' => $apellido
	            );
   		$this->db->where('id_usuario', $usuario);
		$this->db->update('usuarios', $data); 
   	}
   	
   	public function updateImg($nombre, $apellido, $img, $usuario) {
   		$data = array(
	               'nombre' => $nombre,
	               'apellido' => $apellido,
	               'foto' => $img
	            );
   		$this->db->where('id_usuario', $usuario);
		$this->db->update('usuarios', $data); 
   	}

   	public function editar_pass($pass, $usuario) {
   		$data = array(
	               'password' => $pass,
	            );
   		$this->db->where('id_usuario', $usuario);
		$this->db->update('usuarios', $data); 
   	}
}
?>