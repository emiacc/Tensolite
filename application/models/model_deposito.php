<?php
class Model_deposito extends CI_Model { 

  public function __construct(){
    parent::__construct();
  }

  public function getUser($usuario){
      $this->db->select('nombre, apellido, foto');
      return $this->db->get_where('usuarios', array('id_usuario' => $usuario))->row();
  }

  public function getLugares(){
   		return $this->db->query("SELECT l.id_lugar,l.cantidad,l.medida,l.fila,l.columna,l.paquetes, 
   				(
   					IFNULL(	(SELECT SUM(d.cantidad) FROM deposito d WHERE d.ingreso = 1 AND d.id_lugar = l.id_lugar GROUP BY d.id_lugar),0)
   					-
   					IFNULL(	(SELECT SUM(d.cantidad) FROM deposito d WHERE d.ingreso = 0 AND d.id_lugar = l.id_lugar GROUP BY d.id_lugar),0)
   				)
   				 as cant 
   			FROM lugares l")->result();
	}

  public function ingreso($lugar, $cantidad, $ingreso, $usuario){
    $data = array(
                 'id_lugar' => $lugar,
                 'cantidad' => $cantidad,
                 'ingreso' => $ingreso,
                 'id_usuario' => $usuario
              );
    $this->db->insert('deposito', $data); 
  }

  public function getDespachos(){
    $this->db->select('*');
    $this->db->from('despachos');
    $this->db->where('visto', 0);
    $consulta = $this->db->get()->result();
    $this->db->query('UPDATE despachos SET visto = 1');
    return $consulta;
  }

  public function getProducciones(){
    $this->db->select('*');
    $this->db->from('producciones');
    $this->db->where('visto', 0);
    $consulta = $this->db->get()->result();
    $this->db->query('UPDATE producciones SET visto = 1');
    return $consulta;
  }

}
