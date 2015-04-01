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

	//perdida
	public function ingreso_perdida_playa($fecha, $medida, $cantidad, $usuario) {
		$data = array(
	               'fecha' => $fecha,
	               'en_playa' => 1,
	               'medida' => $medida,
	               'cantidad' => $cantidad,
	               'id_usuario' => $usuario
	            );
		$this->db->insert('perdidas', $data); 
	}

	public function ingreso_perdida_produccion($fecha, $banco, $medida, $cantidad, $usuario) {
		$data = array(
	               'fecha' => $fecha,
	               'en_playa' => 0,
	               'medida' => $medida,
	               'cantidad' => $cantidad,
	               'nro_banco' => $banco,
	               'id_usuario' => $usuario
	            );
		$this->db->insert('perdidas', $data); 
	}

	public function getTabla_perdida_playa($mes, $anio){
   		$query = $this->db->query("SELECT SUM(cantidad) as cant, medida, DAY(fecha) as dia
									FROM perdidas 
									WHERE en_playa = 1 and YEAR(fecha) = $anio AND MONTH(fecha) = $mes GROUP BY fecha, medida");
	    $tabla = $query->result();
	    return $tabla;
	}

	public function getTabla_perdida_produccion($dia, $mes, $anio){
   		$query = $this->db->query("SELECT SUM(cantidad) as cant, medida, nro_banco
									FROM perdidas 
									WHERE en_playa = 0 and YEAR(fecha) = $anio AND MONTH(fecha) = $mes and DAY(fecha) = $dia GROUP BY nro_banco, medida");
	    $tabla = $query->result();
	    return $tabla;
	}

	//recuperacion
	public function ingreso_recuperacion($fecha, $medida, $cantidad, $usuario) {
		$data = array(
	               'fecha' => $fecha,
	               'medida' => $medida,
	               'cantidad' => $cantidad,
	               'id_usuario' => $usuario
	            );
		$this->db->insert('recuperaciones', $data); 
	}

	public function getTabla_recuperacion($mes, $anio){
   		$query = $this->db->query("SELECT SUM(cantidad) as cant, medida, DAY(fecha) as dia
									FROM recuperaciones 
									WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes GROUP BY fecha, medida");
	    $tabla = $query->result();
	    return $tabla;
	}

	//despacho
	public function ingreso_despacho($fecha, $medida, $cantidad, $usuario) {
		$data = array(
	               'fecha' => $fecha,
	               'medida' => $medida,
	               'cantidad' => $cantidad,
	               'id_usuario' => $usuario
	            );
		$this->db->insert('despachos', $data); 
	}

	public function getTabla_despacho($mes, $anio){
   		$query = $this->db->query("SELECT SUM(cantidad) as cant, medida, DAY(fecha) as dia
									FROM despachos 
									WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes GROUP BY fecha, medida");
	    $tabla = $query->result();
	    return $tabla;
	}
}
?>