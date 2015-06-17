<?php
class Model_mantenimiento extends CI_Model { 

    public function __construct() {
    	parent::__construct();
   	}

   	public function getSolicitudes() 
   	{
		//return $this->db->order_by("fecha", "asc")->get_where('solicitudes_mantenimiento', array('estado' => 0))->result();
		$this->db->select('solicitudes_mantenimiento.*, usuarios.nombre, usuarios.apellido');
		$this->db->from('solicitudes_mantenimiento');
		$this->db->join('usuarios', 'usuarios.id_usuario = solicitudes_mantenimiento.id_usuario');
		return $this->db->get()->result();
	}

	public function getDetalles() 
	{
		return $this->db->get('mantenimiento_detalle')->result();
	}

	public function getSolicitudesId($id) 
   	{
		return $this->db->order_by("fecha", "asc")->get_where('solicitudes_mantenimiento', array('id_solicitud' => $id))->row();
	}

	public function getDetallesId($id) 
	{
		return $this->db->get_where('mantenimiento_detalle', array('id_solicitud' => $id))->result();
	}

	public function ingreso_orden($fecha, $descripcion, $tiempo, $origen, $id_usuario) 
	{
   		$data = array(
	               'fecha' => $fecha,
	               'id_usuario' => $id_usuario,
	               'origen' => $origen,
	            );
		$this->db->insert('solicitudes_mantenimiento', $data); 
		$idOrden = $this->db->insert_id();

		foreach($descripcion as $key=>$val) {
            $data = array(
            		   'id_mantenimiento' => ($key+1),
		               'dias' => $tiempo[$key],
		               'descripcion' => $val,
		               'id_solicitud' => $idOrden
		            );
			$this->db->insert('mantenimiento_detalle', $data); 
        }
        return $idOrden;
	}

	public function update_produccion($id, $estado, $detalle, $verificado, $fecha, $comentario, $usuario)
	{
		if($estado == 2)
		{
			$data = array(
	               'estado' => 2,
	               'fecha_cierre' => date('Y-m-d H:i:s')
	            );
			$this->db->where('id_solicitud', $id);
			$this->db->update('solicitudes_mantenimiento', $data);
		}
		else 
		{
			$data = array(
	               'estado' => 1 
	            );
			$this->db->where('id_solicitud', $id);
			$this->db->update('solicitudes_mantenimiento', $data);

		}

		foreach($detalle as $key=>$val) {            
			foreach ($verificado as $v) {
				if($val == $v){ $e = 1; break;}
				else $e=0;
			}
			
			if($fecha[$key] <> '')
				$fechaI = date('Y-m-d',strtotime($fecha[$key]));
			else
				$fechaI = NULL;

			$data = array(
	               'estado' => $e,
	               'id_usuario' => $usuario,
	               'fecha_cierre' => $fechaI,
	               'comentarios' => $comentario[$key]
	            );
			$this->db->where('id_mantenimiento', $val);
			$this->db->where('id_solicitud', $id);
			$this->db->update('mantenimiento_detalle', $data); 
		}
	}

	public function getEstado($id)
	{
		$query = $this->db->get_where('solicitudes_mantenimiento', array('id_solicitud' => $id))->row();
		return $query->estado;
	}

	public function getEstadosMantenimiento()
	{
		$estados = array();
		$this->db->select('count(*) as pendientes');
		$this->db->from('solicitudes_mantenimiento');
		$this->db->where('estado', 0);
		$estados['pendientes'] = $this->db->get()->row()->pendientes;
		
		$this->db->select('count(*) as proceso');
		$this->db->from('solicitudes_mantenimiento');
		$this->db->where('estado', 1);
		$estados['proceso'] = $this->db->get()->row()->proceso;

		$this->db->select('count(*) as cerrado');
		$this->db->from('solicitudes_mantenimiento');
		$this->db->where('estado', 2);
		$estados['cerrado'] = $this->db->get()->row()->cerrado;

		return $estados;
	}




	//CALIDAD//
	//CALIDAD//
	public function ingreso_calidad($fecha, $tipo, $sector, $deteccion, $analisis, $plan, $verificacion, $id_usuario) 
	{
   		$data = array(
	               'fecha_deteccion' => $fecha,
	               'id_usuario' => $id_usuario,
	               'tipo' => $tipo,
	               'sector' => $sector,
	               'deteccion' => $deteccion,
	               'analisis' => $analisis,
	               'plan' => $plan,
	               'verificacion' => $verificacion,
	            );
		$this->db->insert('formularios_calidad', $data); 
		$idOrden = $this->db->insert_id();
		
        return $idOrden;
	}

	public function editar_calidad($id_formulario, $fecha, $tipo, $sector, $deteccion, $analisis, $plan, $verificacion, $cerrarF, $id_usuario)
	{
		$data = array(
	               'fecha_deteccion' => $fecha,
	               'id_usuario' => $id_usuario,
	               'tipo' => $tipo,
	               'sector' => $sector,
	               'deteccion' => $deteccion,
	               'analisis' => $analisis,
	               'plan' => $plan,
	               'verificacion' => $verificacion,
	               'estado' => $cerrarF
	            );
			$this->db->where('id_formulario', $id_formulario);
			$this->db->update('formularios_calidad', $data); 
	}

	public function getFormularios()
	{
		//return $this->db->get('formularios_calidad')->result();

		$this->db->select('formularios_calidad.*, usuarios.nombre, usuarios.apellido');
		$this->db->from('formularios_calidad');
		$this->db->join('usuarios', 'usuarios.id_usuario = formularios_calidad.id_usuario');
		return $this->db->get()->result();
	}

	public function getFormulario($id)
	{
		$this->db->select('formularios_calidad.*, usuarios.nombre, usuarios.apellido');
		$this->db->from('formularios_calidad');
		$this->db->join('usuarios', 'usuarios.id_usuario = formularios_calidad.id_usuario');
		$this->db->where('id_formulario', $id);
		return $this->db->get()->row();
	}

	public function getEstados()
	{
		$estados = array();
		$this->db->select('count(*) as pendientes');
		$this->db->from('formularios_calidad');
		$this->db->where('estado', 0);
		$estados['pendientes'] = $this->db->get()->row()->pendientes;

		$this->db->select('count(*) as proceso');
		$this->db->from('formularios_calidad');
		$this->db->where('estado', 1);
		$estados['proceso'] = $this->db->get()->row()->proceso;

		$this->db->select('count(*) as cerrado');
		$this->db->from('formularios_calidad');
		$this->db->where('estado', 2);
		$estados['cerrado'] = $this->db->get()->row()->cerrado;

		return $estados;
	}

}
