<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MateriaPrima extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_materia');
  	}

	public function index($materia = 'nada', $mensaje = 0) {
		if($materia == 'nada' || $this->ids($materia) == 0) redirect('resumen');


		$this->data['materia'] = $materia;
		$this->data['mensaje'] = $mensaje;
		$this->data['proveedores'] = $this->model_materia->getProveedores();
		
		//talba ingresos y egresos
		$mes = $this->input->post('selectMes');
        $anio = $this->input->post('inputAnio');
        $proveedor = $this->input->post('selectProveedorTabla');
       	if($mes == '') $mes = date('n'); 
       	if($anio == '')	$anio = date('Y');
       	if($proveedor == '') $proveedor = -1; 
       	$this->data['tabla'] = $this->model_materia->getTabla($this->ids($materia), $mes, $anio, $proveedor);
       	$this->data['mes'] = $this->meses($mes);
       	$this->data['anio'] = $anio;

		$this->load->view('view_header');
		$this->load->view('view_materia', $this->data);		
	}

	public function egreso($materia = 'nada') {
		if($materia == 'nada') redirect('resumen');

		$fecha = $this->input->post('inputFechaEgreso');
        $cantidad = $this->input->post('inputConsumo');
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_materia->egreso($fecha, $cantidad, $this->data['data']['id_usuario'], $this->ids($materia));
        redirect('materiaPrima/index/'.$materia.'/1');
	}

	public function ingreso($materia = 'nada') {
		if($materia == 'nada') redirect('resumen');

		$fecha = $this->input->post('inputFechaIngreso');
		$proveedor = $this->input->post('selectProveedorIngreso');
        $remito = $this->input->post('inputNroFactura');
        $cantidad = $this->input->post('inputCantidadIngreso');
        $precio = $this->input->post('inputPrecio');
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_materia->ingreso($fecha, $cantidad, $remito, $proveedor, $precio,$this->data['data']['id_usuario'], $this->ids($materia));
        redirect('materiaPrima/index/'.$materia.'/1');
	}

	public function ids($materia) {
		switch ($materia) {
			case 'cemento':	return 1; break;
			case 'arena' : return 2; break;	
			case 'binder' : return 3; break;	
			case 'acelerante' : return 4; break;	
			case 'plastificante' : return 5; break;	
			case 'triturado' : return 6; break;	
			case 'ceniza' : return 7; break;	
			default: return 0; break;
		}
	}
	public function meses($mes) {
		switch ($mes) {
			case 1: return 'Enereo';
			case 2: return 'Febrero';
			case 3: return 'Marzo';
			case 4: return 'Abril';
			case 5: return 'Mayo';
			case 6: return 'Junio';
			case 7: return 'Julio';
			case 8: return 'Agosto';
			case 9: return 'Septiembre';
			case 10: return 'Octubre';
			case 11: return 'Noviembre';
			case 12: return 'Diciemrbe';
		}
	}
}
?>