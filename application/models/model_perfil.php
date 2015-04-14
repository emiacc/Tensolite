<?php
class Model_perfil extends CI_Model { 

    public function __construct() {
    	parent::__construct();
   	}

   	public function getUser($usuario){
   		$this->db->select('id_usuario, nombre, apellido, foto');
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

      public function getNotificaciones($usuario){
         return $this->db->query('SELECT * FROM notificaciones n, destinatarios_notificaciones d, usuarios u WHERE u.id_usuario = n.id_usuario and d.id_notificacion=n.id_notificacion and d.id_usuario<>n.id_usuario and d.visto=0 and d.id_usuario = '.$usuario)->result();
      }

      public function leerNotificaciones($usuario){
         $data = array(
                  'visto' => 1
               );
         $this->db->where('id_usuario', $usuario);
         $this->db->update('destinatarios_notificaciones', $data); 
      }

      public function insertarNotificacion($usuario, $descripcion){
         //guardo notificacion
         $data = array(
                  'descripcion' => $descripcion,
                  'id_usuario' => $usuario                  
               );
         $this->db->insert('notificaciones', $data); 
         $id = $this->db->insert_id();
      
         $this->db->select('id_usuario');
         $this->db->from('usuarios');
         $consulta = $this->db->get()->result();
         foreach ($consulta as $usuario) {
         $data = array(
                  'id_notificacion' => $id,
                  'id_usuario' => $usuario->id_usuario              
               );
         $this->db->insert('destinatarios_notificaciones', $data);

         }
      }
}
?>