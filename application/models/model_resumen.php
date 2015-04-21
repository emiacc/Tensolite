<?php
class Model_resumen extends CI_Model { 

    public function __construct() {
    	parent::__construct();
   	}

	public function resumenProduccion($mesDesde, $anioDesde, $mesHasta, $anioHasta){
   		$query = $this->db->query("SELECT SUM(cantidad) as cant, DATE_FORMAT(fecha, '%j') as diaY, DATE_FORMAT (fecha, '%d') as dia, DATE_FORMAT (fecha, '%m') as mes, DATE_FORMAT (fecha, '%Y') as anio 
   									FROM producciones 
									WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta GROUP BY diaY ORDER BY fecha");
	    return $query->result();
   	}

   	public function resumenDespacho($mesDesde, $anioDesde, $mesHasta, $anioHasta){
   		$query = $this->db->query("SELECT SUM(cantidad) as cant, DATE_FORMAT(fecha, '%j') as diaY, DATE_FORMAT (fecha, '%d') as dia, DATE_FORMAT (fecha, '%m') as mes, DATE_FORMAT (fecha, '%Y') as anio 
   									FROM despachos 
									WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta GROUP BY diaY ORDER BY fecha");
	    return $query->result();
   	}

   	public function produccionProd($mesDesde, $anioDesde, $mesHasta, $anioHasta){
   		$query = $this->db->query("SELECT SUM(cantidad) as cant, DATE_FORMAT(fecha, '%V') as semana
   									FROM producciones 
									WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
									GROUP BY semana ORDER BY fecha");
   		return $query->result();
   	}
   	public function produccionRecu($mesDesde, $anioDesde, $mesHasta, $anioHasta){
   		$query = $this->db->query("SELECT SUM(cantidad) as cant, DATE_FORMAT(fecha, '%V') as semana
   									FROM recuperaciones 
									WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
									GROUP BY semana ORDER BY fecha");
   		return $query->result();
   	}

   	public function getStockSilos($mesDesde, $anioDesde, $mesHasta, $anioHasta) {
   		$query = $this->db->query("SELECT SUM(kg_fabrica) as cant, id_silo
   									FROM ingresos_cemento
									WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
									GROUP BY id_silo ORDER BY id_silo");
   		$ingresos = $query->result();
   		$query = $this->db->query("SELECT SUM(consumo) as cant, id_silo
   									FROM egresos_cemento
									WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
									GROUP BY id_silo ORDER BY id_silo");
   		$egresos = $query->result();
		$silo1=$silo2=$silo3=0;
		foreach ($ingresos as $value) {
			if($value->id_silo == 1)
   				$silo1 = $value->cant;
   			elseif($value->id_silo == 2)
   				$silo2 = $value->cant;
   			elseif($value->id_silo == 3)
   				$silo3 = $value->cant;
		}
   		foreach ($egresos as $value) {
			if($value->id_silo == 1)
   				$silo1 = $silo1 - $value->cant;
   			elseif($value->id_silo == 2)
   				$silo2 = $silo2 - $value->cant;
   			elseif($value->id_silo == 3)
   				$silo3 = $silo3 - $value->cant;
		}
		return Array($silo1,$silo2,$silo3);
   	}
}