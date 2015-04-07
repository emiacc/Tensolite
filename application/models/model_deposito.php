<?php
class Model_deposito extends CI_Model { 

    public function __construct() {
    	parent::__construct();
   	}

   	public function getLugares(){
   		return $this->db->query("SELECT l.id_lugar,l.cantidad,l.paquetes, 
   				(
   					IFNULL(	(SELECT SUM(d.cantidad) FROM deposito d WHERE d.ingreso = 1 AND d.id_lugar = l.id_lugar GROUP BY d.id_lugar),0)
   					-
   					IFNULL(	(SELECT SUM(d.cantidad) FROM deposito d WHERE d.ingreso = 0 AND d.id_lugar = l.id_lugar GROUP BY d.id_lugar),0)
   				)
   				 as cant 
   			FROM lugares l")->result();
	}

}
