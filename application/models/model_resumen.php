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

      public function getConsumoMateriaPrima($mesDesde, $anioDesde, $mesHasta, $anioHasta ,$materia) {
         $query = $this->db->query("SELECT SUM(consumo) as cant, DATE_FORMAT(fecha, '%V') as semana
                              FROM egresos_aridos
                              WHERE id_materia = $materia AND YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                              GROUP BY semana ORDER BY fecha");
         return $query->result();

      }

      public function getConsumoArena($mesDesde, $anioDesde, $mesHasta, $anioHasta) {
         $query = $this->db->query("SELECT SUM(consumo) as cant, DATE_FORMAT(fecha, '%V') as semana
                              FROM egresos_aridos
                              WHERE (id_materia = 2 || id_materia = 8) AND YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                              GROUP BY semana ORDER BY fecha");
         return $query->result();

      }

      public function getConsumoCemento($mesDesde, $anioDesde, $mesHasta, $anioHasta) {
         $query = $this->db->query("SELECT SUM(consumo) as cant, DATE_FORMAT(fecha, '%V') as semana
                              FROM egresos_cemento 
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                              GROUP BY semana ORDER BY fecha");
         return $query->result();
      }

      public function getProduccionCategoria($mesDesde, $anioDesde, $mesHasta, $anioHasta){
         $resultado = "[";
         $query = $this->db->query("SELECT SUM(cantidad) as cant
                              FROM producciones 
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                                    AND medida BETWEEN 10 AND 30");
         $resultado .= $query->row()->cant.",";
         $query = $this->db->query("SELECT SUM(cantidad) as cant
                              FROM producciones 
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                                    AND medida BETWEEN 31 AND 34");
         $resultado .= $query->row()->cant.",";
         $query = $this->db->query("SELECT SUM(cantidad) as cant
                              FROM producciones 
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                                    AND medida BETWEEN 35 AND 38");
         $resultado .= $query->row()->cant.",";
         $query = $this->db->query("SELECT SUM(cantidad) as cant
                              FROM producciones 
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                                    AND medida BETWEEN 39 AND 42");
         $resultado .= $query->row()->cant.",";
         $query = $this->db->query("SELECT SUM(cantidad) as cant
                              FROM producciones 
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                                    AND medida BETWEEN 43 AND 46");
         $resultado .= $query->row()->cant.",";
         $query = $this->db->query("SELECT SUM(cantidad) as cant
                              FROM producciones 
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                                    AND medida BETWEEN 48 AND 54");
         $resultado .= $query->row()->cant.",";
         $query = $this->db->query("SELECT SUM(cantidad) as cant
                              FROM producciones 
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                                    AND medida BETWEEN 56 AND 62");
         $resultado .= $query->row()->cant.",";
         $query = $this->db->query("SELECT SUM(cantidad) as cant
                              FROM producciones 
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta
                                    AND medida BETWEEN 64 AND 72");
         $resultado .= $query->row()->cant;

         $resultado .= "]";
         return $resultado;
      }

   public function getStock() {
      $query = $this->db->query("SELECT l.id_lugar,l.cantidad,l.medida,l.paquetes,l.vigas_x_paq, 
         ( IFNULL( (SELECT SUM(d.cantidad) FROM deposito d WHERE d.ingreso = 1 AND d.id_lugar = l.id_lugar GROUP BY d.id_lugar),0) 
         - IFNULL( (SELECT SUM(d.cantidad) FROM deposito d WHERE d.ingreso = 0 AND d.id_lugar = l.id_lugar GROUP BY d.id_lugar),0) ) as cant 
         FROM lugares l");
      $resultado = $query->result();
      $suma = 0;
      foreach ($resultado as $value) {
         $suma += $value->cant*($value->vigas_x_paq*$value->paquetes)*($value->medida/10);
      }
      return $suma;
   }

   public function getProduccionWidget($mesDesde, $anioDesde, $mesHasta, $anioHasta) {
      $query = $this->db->query("SELECT SUM(cantidad) as cant FROM producciones
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }
   public function getDespachoWidget($mesDesde, $anioDesde, $mesHasta, $anioHasta) {
      $query = $this->db->query("SELECT SUM(cantidad) as cant FROM despachos
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }
   public function getPerdidaWidget($mesDesde, $anioDesde, $mesHasta, $anioHasta, $tipoPerdida) {
      $query = $this->db->query("SELECT SUM(cantidad) as cant FROM perdidas
                              WHERE en_playa = $tipoPerdida AND YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }
   public function getRecuperacionWidget($mesDesde, $anioDesde, $mesHasta, $anioHasta) {
      $query = $this->db->query("SELECT SUM(cantidad) as cant FROM recuperaciones
                              WHERE YEAR(fecha) BETWEEN $anioDesde AND $anioHasta AND MONTH(fecha) BETWEEN $mesDesde AND $mesHasta");
      $res = $query->row()->cant;
      if($res == '') $res = 0;
      return $res;
   }

}