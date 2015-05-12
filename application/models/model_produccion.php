<?php
class Model_produccion extends CI_Model { 

    public function __construct() {
    	parent::__construct();
   	}

   	public function getUser($usuario){
   		$this->db->select('nombre, apellido, foto');
   		return $this->db->get_where('usuarios', array('id_usuario' => $usuario))->row();
   	}

   	public function ingreso_produccion($fecha, $banco, $medida, $cantidad, $usuario, $turno) {
   		$data = array(
	               'fecha' => $fecha,
	               'nro_banco' => $banco,
	               'medida' => $medida,
	               'cantidad' => $cantidad,
	               'id_usuario' => $usuario,
	               'turno' => $turno
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

	//orden produccion
	public function ingreso_orden($fecha, $banco, $medida, $cortes, $usuario) {
   		$data = array(
	               'fecha' => $fecha,
	               'nro_banco' => $banco,
	            );
		$this->db->insert('ordenes_produccion', $data); 
		$idOrden = $this->db->insert_id();

		foreach($cortes as $key=>$val) {
            $data = array(
		               'fecha' => $fecha,
		               'nro_banco' => $banco,
		               'medida' => $medida[$key],
		               'cortes' => $val,
		               'id_usuario' => $usuario,
		               'id_orden' => $idOrden
		            );
			$this->db->insert('producciones', $data); 
        }
        return $idOrden;
	}

	public function getOrdenes() {
		return $this->db->order_by("fecha", "asc")->get_where('ordenes_produccion', array('procesado' => 0))->result();
	}
	public function getProducciones() {
		return $this->db->get_where('producciones', array('solicitud' => 0))->result();
	}

	public function update_produccion($id, $produ, $cantidad, $usuario, $turno){
		$data = array(
               'procesado' => 1
            );
		$this->db->where('id_orden', $id);
		$this->db->update('ordenes_produccion', $data);

		foreach($produ as $key=>$val) {            
			$data = array(
	               'cantidad' => $cantidad[$key],
	               'id_usuario' => $usuario,
	               'turno' => $turno,
	               'solicitud' => 1
	            );
			$this->db->where('id_produccion', $val);
			$this->db->update('producciones', $data); 
		}
	}

	//grafico perdidas
	public function resumenPerdida($mes, $anio, $tipoPerdida){
   	$query = $this->db->query("SELECT SUM(cantidad) as cant, DATE_FORMAT(fecha, '%j') as diaY, DATE_FORMAT (fecha, '%d') as dia, DATE_FORMAT (fecha, '%m') as mes, DATE_FORMAT (fecha, '%Y') as anio 
   								FROM perdidas 
									WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes AND en_playa = $tipoPerdida GROUP BY diaY ORDER BY fecha");
	   return $query->result();
   }
   public function getPerdidaWidget($mes, $anio, $tipoPerdida) {
      $query = $this->db->query("SELECT SUM(cantidad) as cant FROM perdidas
                              WHERE en_playa = $tipoPerdida AND YEAR(fecha) = $anio AND MONTH(fecha) = $mes");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }

   //grafico perdida recuperacion
	public function resumenRecuperacion($mes, $anio){
   	$query = $this->db->query("SELECT SUM(cantidad) as cant, DATE_FORMAT(fecha, '%j') as diaY, DATE_FORMAT (fecha, '%d') as dia, DATE_FORMAT (fecha, '%m') as mes, DATE_FORMAT (fecha, '%Y') as anio 
   								FROM recuperaciones 
									WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes GROUP BY diaY ORDER BY fecha");
	   return $query->result();
   }
   public function getRecuperacionWidget($mes, $anio) {
      $query = $this->db->query("SELECT SUM(cantidad) as cant FROM recuperaciones
                              WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }

   //grafico perdida despacho
	public function resumenDespacho($mes, $anio){
   	$query = $this->db->query("SELECT SUM(cantidad) as cant, DATE_FORMAT(fecha, '%j') as diaY, DATE_FORMAT (fecha, '%d') as dia, DATE_FORMAT (fecha, '%m') as mes, DATE_FORMAT (fecha, '%Y') as anio 
   								FROM despachos 
									WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes GROUP BY diaY ORDER BY fecha");
	   return $query->result();
   }
   public function getDespachoWidget($mes, $anio) {
      $query = $this->db->query("SELECT SUM(cantidad) as cant FROM despachos
                              WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }
}
?>