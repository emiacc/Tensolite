<?php
class Model_materia extends CI_Model { 

    public function __construct() {
    	parent::__construct();
   	}

   	public function egreso($fecha, $cantidad, $usuario, $materia) {   	
	   	//obtengo el numero de egreso para la materia prima actual
	   	$this->db->select('MAX(id_egreso) as max');
	    $this->db->from('egresos_aridos');
	    $this->db->where('id_materia', $materia);
	    $consulta = $this->db->get();
		$fila = $consulta->row_array();
		$egreso = 1 + $fila['max'];   		
		//insert en la base de datos
		$data = array(
	               'id_materia' => $materia,
	               'id_egreso' => $egreso,
	               'fecha' => $fecha,
	               'consumo' => $cantidad,
	               'id_usuario' => $usuario
	            );
		$this->db->insert('egresos_aridos', $data); 
    }

   	public function ingreso($fecha, $cantidad, $remito, $proveedor, $precio ,$usuario, $materia) {   	
	   	//obtengo el numero de ingreso para la materia prima actual
	   	$this->db->select('MAX(id_ingreso) as max');
	    $this->db->from('ingresos_aridos');
	    $this->db->where('id_materia', $materia);
	    $consulta = $this->db->get();
		$fila = $consulta->row_array();
		$ingreso = 1 + $fila['max'];   		
		//insert en la base de datos
		$data = array(
	               'id_materia' => $materia,
	               'id_ingreso' => $ingreso,
	               'id_proveedor' => $proveedor,
	               'nro_remito' => $remito,
	               'cantidad' => $cantidad,
	               'fecha' => $fecha,
	               'precio' => $precio,
	               'id_usuario' => $usuario
	            );
		$this->db->insert('ingresos_aridos', $data); 
   	}

   	public function getProveedores(){
   		return $this->db->get('proveedores')->result();		
   	}

   	public function getTabla($materia, $mes, $anio, $proveedor){
   		$prov = '';
   		if($proveedor != -1) $prov = " AND i.id_proveedor = ".$proveedor;
		$query = $this->db->query("SELECT DATE_FORMAT(i.fecha,'%e') as dia, p.nombre, i.nro_remito, i.cantidad 
									FROM ingresos_aridos i, proveedores p 
									WHERE i.id_proveedor = p.id_proveedor AND i.id_materia = $materia AND YEAR(i.fecha) = $anio AND MONTH(i.fecha) = $mes".$prov." ORDER BY i.fecha");
	    $tabla = $query->result();
	    $query = $this->db->query("SELECT DATE_FORMAT(e.fecha,'%e') as dia, e.consumo 
									FROM egresos_aridos e
									WHERE e.id_materia = $materia AND YEAR(e.fecha) = $anio AND MONTH(e.fecha) = $mes ORDER BY e.fecha");
	    $tabla = array_merge($tabla,$query->result());
	    foreach ($tabla as $key => $row) {
    		$aux[$key] = $row->dia;
		}
		if(isset($aux))		
			array_multisort($aux, SORT_ASC, $tabla);
	    return $tabla;
	}
}
?>