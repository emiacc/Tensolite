<?php
class Model_produccion extends CI_Model { 

    public function __construct() {
    	parent::__construct();
   	}

   	public function ingreso_produccion($fecha, $banco, $medida, $cantidad, $usuario) {
   		$data = array(
	               'fecha' => $fecha,
	               'nro_banco' => $banco,
	               'medida' => $medida,
	               'cantidad' => $cantidad,
	               'id_usuario' => $usuario
	            );
		$this->db->insert('producciones', $data); 
   	}

   	public function getTabla($dia, $mes, $anio){
   		$query = $this->db->query("SELECT SUM(cantidad) as cant, medida, nro_banco
									FROM producciones 
									WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes and DAY(fecha) = $dia GROUP BY nro_banco, medida");
	    $tabla = $query->result();
	    return $tabla;
	}
}
?>