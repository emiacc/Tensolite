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
	public function ingreso_orden($fecha, $banco, $medida, $cortes, $confeccionado, $supervisor, $medidor, $cosechador, $jefe, $usuario, $unidades) {
   		$data = array(
	               'fecha' => $fecha,
	               'confeccionado' => $confeccionado, 
	               'supervisor' => $supervisor, 
	               'medidor' => $medidor, 
	               'cosechador' => $cosechador, 
	               'jefe' => $jefe,
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
		               'unidades' => $unidades[$key],
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
	public function getOrdenesProcesadas() {
		return $this->db->order_by("fecha", "DESC")->get_where('ordenes_produccion', array('procesado' => 1))->result();
	}
	public function getProducciones() {
		return $this->db->get_where('producciones', array('solicitud' => 0))->result();
	}
	public function getProduccion($id_orden) {
		return $this->db->get_where('producciones', array('id_orden' => $id_orden))->result();
	}
	public function getAnotherProduccion($id_orden) {
		$consulta = $this->db->query("select * from producciones 
		where fecha = (select fecha from ordenes_produccion where id_orden = $id_orden)
		and id_orden <> $id_orden
		and solicitud = 1")->result();

		$id_produccion_con_consumo = 0;
		foreach ($consulta as $value) {
			$id = $value->id_orden;
			//var_dump($this->db->get_where('egresos_cemento', array('id_orden_produccion' => $id, "consumo !=" => 0))->result());
			$egresos_cemento = $this->db->get_where('egresos_cemento', array('id_orden_produccion' => $id, "consumo !=" => 0))->row();
			if(!empty($egresos_cemento))
			{
				$id_produccion_con_consumo = $egresos_cemento->id_produccion;  
			} 
		}


		$medida_original = $this->db->get_where('producciones', array('id_orden' => $id_orden))->row()->medida;
		
		$medida_con_consumo = $this->db->get_where('producciones', array('id_produccion' => $id_produccion_con_consumo))->row();
		if(!empty($medida_con_consumo)) $medida_con_consumo = $medida_con_consumo->medida;
		 $bandera = FALSE;
								switch(true)
									{
										case $medida_original <= 30 && $medida_con_consumo <= 30:
											$bandera = TRUE;
											break;

										case $medida_original <= 30 && $medida_con_consumo <= 30:
											$bandera = TRUE;
											break;

										case $medida_original <= 30 && $medida_con_consumo <= 30:
											$bandera = TRUE;
											break;

										case $medida_original <= 30 && $medida_con_consumo <= 30:
											$bandera = TRUE;
											break;

										case $medida_original <= 30 && $medida_con_consumo <= 30:
											$bandera = TRUE;
											break;

										case $medida_original <= 30 && $medida_con_consumo <= 30:
											$bandera = TRUE;
											break;

							}



		if($bandera == FALSE) return NULL;
		if($id_produccion_con_consumo != 0)
		{
			$egreso_cemento = $this->db->get_where('egresos_cemento', array('id_produccion' => $id_produccion_con_consumo))->row();
			$egresos_aridos = $this->db->get_where('egresos_aridos', array('id_produccion' => $id_produccion_con_consumo))->result();
			
			array_push($egresos_aridos, $egreso_cemento);
			return $egresos_aridos;
		}
		return NULL;

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
	               'turno' => $turno[$key],
	               'solicitud' => 1
	            );
			$this->db->where('id_produccion', $val);
			$this->db->update('producciones', $data); 
		}
	}

	
	public function ingreso_despacho_orden($fecha, $medida, $cantidad, $filas, $ordendecarga, $cliente, $transporte, $entro, $salio, $puentista, $oppinza, $opcamion, $observaciones, $usuario) {
   		$data = array(
	               'fecha' => $fecha,
	               'ordendecarga' => $ordendecarga, 
	               'cliente' => $cliente, 
	               'transporte' => $transporte, 
	               'entro' => $entro, 
	               'salio' => $salio, 
	               'puentista' => $puentista, 
	               'oppinza' => $oppinza, 
	               'opcamion' => $opcamion, 
	               'observaciones' => $observaciones,
	               'id_usuario' => $usuario,
	            );
		$this->db->insert('ordenes_despacho', $data); 
		$idOrden = $this->db->insert_id();

		foreach($cantidad as $key=>$val) {
            if($filas[$key] == 'A' || $filas[$key] == 'A' || $filas[$key] == 'C' || $filas[$key] == 'D')
            	$nave = 1;
            else
            	$nave = 2;
            $data = array(
		               'fecha' => $fecha,
		               'medida' => $medida[$key],
		               'cantidad' => $val,
		               'id_usuario' => $usuario,
		               'id_orden' => $idOrden,
		               'nave' => $nave
		            );
			$this->db->insert('despachos', $data); 
        }
        return $idOrden;
	}

	public function delete_orden_despacho($id_orden)
	{
		$this->db->delete('ordenes_despacho', array('id_orden' => $id_orden));
		$this->db->delete('despachos', array('id_orden' => $id_orden));
	}

	public function get_cantidad_medida($id_orden)
	{
		return $this->db->get_where('despachos', array('id_orden' => $id_orden))->result();
	}

	//grafico perdidas
	public function resumenPerdida($mes, $anio, $tipoPerdida){
   	$query = $this->db->query("SELECT SUM(cantidad*medida/10) as cant, DATE_FORMAT(fecha, '%j') as diaY, DATE_FORMAT (fecha, '%d') as dia, DATE_FORMAT (fecha, '%m') as mes, DATE_FORMAT (fecha, '%Y') as anio 
   								FROM perdidas 
									WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes AND en_playa = $tipoPerdida GROUP BY diaY ORDER BY fecha");
	   return $query->result();
   }
   public function getPerdidaWidget($mes, $anio, $tipoPerdida) {
      $query = $this->db->query("SELECT TRUNCATE(SUM(cantidad*medida/10),2) as cant FROM perdidas
                              WHERE en_playa = $tipoPerdida AND YEAR(fecha) = $anio AND MONTH(fecha) = $mes");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }

   //grafico perdida recuperacion
	public function resumenRecuperacion($mes, $anio){
   	$query = $this->db->query("SELECT SUM(cantidad*medida/10) as cant, DATE_FORMAT(fecha, '%j') as diaY, DATE_FORMAT (fecha, '%d') as dia, DATE_FORMAT (fecha, '%m') as mes, DATE_FORMAT (fecha, '%Y') as anio 
   								FROM recuperaciones 
									WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes GROUP BY diaY ORDER BY fecha");
	   return $query->result();
   }
   public function getRecuperacionWidget($mes, $anio) {
      $query = $this->db->query("SELECT TRUNCATE(SUM(cantidad*medida/10),2) as cant FROM recuperaciones
                              WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }

   //grafico perdida despacho
	public function resumenDespacho($mes, $anio){
   	$query = $this->db->query("SELECT SUM(cantidad*medida/10) as cant, DATE_FORMAT(fecha, '%j') as diaY, DATE_FORMAT (fecha, '%d') as dia, DATE_FORMAT (fecha, '%m') as mes, DATE_FORMAT (fecha, '%Y') as anio 
   								FROM despachos 
									WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes GROUP BY diaY ORDER BY fecha");
	   return $query->result();
   }
   public function getDespachoWidget($mes, $anio) {
      $query = $this->db->query("SELECT TRUNCATE(SUM(cantidad*medida/10),2) as cant FROM despachos
                              WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }


	public function getSolicitudesId($id) 
    {
   		return $this->db->get_where('ordenes_produccion', array('id_orden' => $id))->row();
	}

	public function getDetallesId($id) 
	{
		return $this->db->get_where('producciones', array('id_orden' => $id))->result();
	}



	public function delete_orden_produccion($id_orden)
	{
		$this->db->delete('ordenes_produccion', array('id_orden' => $id_orden));
		$this->db->delete('producciones', array('id_orden' => $id_orden));
	}
	
	public function update_orden($id_orden, $fecha, $banco, $confeccionado, $supervisor, $medidor, $cosechador, $jefe)
	{
		$data = array(
	               'nro_banco' => $banco,
	               'fecha' => $fecha,
	               'confeccionado' => $confeccionado,
	               'supervisor' => $supervisor,
	               'medidor' => $medidor,
	               'cosechador' => $cosechador,
	               'jefe' => $jefe
	            );
			$this->db->where('id_orden', $id_orden);
			$this->db->update('ordenes_produccion', $data);
	}

	public function update_produ($id_produccion, $cortes, $medida, $unidades)
	{
		$data = array(
	               'cortes' => $cortes,
	               'medida' => $medida,
	               'unidades' => $unidades
	            );
			$this->db->where('id_produccion', $id_produccion);
			$this->db->update('producciones', $data);

	}



	//despachos
	public function getSolicitudesDespacho() 
   	{
		$this->db->select('ordenes_despacho.*, usuarios.nombre, usuarios.apellido');
		$this->db->from('ordenes_despacho');
		$this->db->join('usuarios', 'usuarios.id_usuario = ordenes_despacho.id_usuario');
		return $this->db->get()->result();
	}
	
	public function getSolicitudesDespachoId($id) 
   	{
		return $this->db->order_by("fecha", "asc")->get_where('ordenes_despacho', array('id_orden' => $id))->row();
	}

	public function getDetallesDespachoId($id) 
	{
		return $this->db->get_where('despachos', array('id_orden' => $id))->result();
	}
	

	public function getRecuperaciones()
	{
		return $this->db->get('recuperaciones')->result();
	}

	public function get_cantidad_medida_recuperacion($id_recuperacion)
	{
		return $this->db->get_where('recuperaciones', array('id_recuperacion' => $id_recuperacion))->row();
	}

	public function delete_recuperacion($id_recuperacion)
	{
		$this->db->delete('recuperaciones', array('id_recuperacion' => $id_recuperacion));
	}


	public function getPerdidasPlaya()
	{
		return $this->db->order_by("fecha", "desc")->get_where('perdidas', array('en_playa' => 1))->result();
	}

	public function get_cantidad_medida_perdida($id_perdida)
	{
		return $this->db->get_where('perdidas', array('id_perdida' => $id_perdida))->row();
	}

	public function delete_perdida($id_perdida)
	{
		$this->db->delete('perdidas', array('id_perdida' => $id_perdida));
	}
	
	public function getPerdidasProduccion()
	{
		return $this->db->order_by("fecha", "desc")->get_where('perdidas', array('en_playa' => 0))->result();
	}

}
?>