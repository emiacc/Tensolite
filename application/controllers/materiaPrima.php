<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MateriaPrima extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_materia');
	    $this->load->model('model_perfil');
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

		
		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		$this->data['stockActual'] =  $this->model_materia->getStockMateria($this->ids($materia));
		$this->data['stockMaximo'] =  $this->model_materia->getStockMateriaMaximo($this->ids($materia));

		$this->load->view('view_header', $this->data);
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
        $this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Ingreso ".$cantidad." de ".$materia);
        redirect('materiaPrima/index/'.$materia.'/1');
	}

	public function eliminar($materia)
	{
		$id_materia = $this->input->post("materia");
		$ingreso = $this->input->post("ingreso");
		if($id_materia == $this->ids($materia))
		{
			$this->model_materia->eliminar($id_materia, $ingreso);
        }
        redirect('materiaPrima/index/'.$materia.'/1');
	}

	public function editar($materia = 'nada')
	{
		if($materia == 'nada') redirect('resumen');

		$id_materia = $this->input->post('id_materia');
		$id_ingreso = $this->input->post('id_ingreso');

		$proveedor = $this->input->post('selectProveedorIngreso_edit');
		$fecha = $this->input->post('inputFechaIngreso2');
        $remito = $this->input->post('inputNroFactura_edit');
        $cantidad = $this->input->post('inputCantidadIngreso_edit');
        $precio = $this->input->post('inputPrecio_edit');

        $fecha = date('Y-m-d',strtotime($fecha));

        $this->model_materia->editar($id_materia, $id_ingreso, $fecha, $cantidad, $remito, $proveedor, $precio);
        redirect('materiaPrima/index/'.$materia.'/1');
	}

	public function ids($materia) {
		switch ($materia) {
			case 'cemento':	return 1;
			case 'arena' : return 2;	
			case 'binder' : return 3;	
			case 'acelerante' : return 4;	
			case 'plastificante' : return 5;	
			case 'triturado' : return 6;	
			case 'ceniza' : return 7;	
			case 'arena2' : return 8;	
			case 'agua' : return 9;	
			case 'acero' : return 10;	
			default: return 0;
		}
	}
	public function meses($mes) {
		switch ($mes) {
			case 1: return 'Enero';
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

	public function stock_real($materia)
	{
		$stockActual =  $this->model_materia->getStockMateria($this->ids($materia));
		$res = $this->input->post('inputCantidadIngreso') - $stockActual;
		if($res != 0)
		{
			//ingreso
			$this->model_materia->ingreso(NULL, $res, "CORRECCION STOCK", 0, 0, $this->data['data']['id_usuario'], $this->ids($materia));

		}
		redirect("materiaPrima/index/$materia");		
		

	}
}
?>