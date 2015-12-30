<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Despacho extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_produccion');
		$this->load->model('model_perfil');
  	}

	public function index($mensaje = 0)	{
		$this->data['mensaje'] = $mensaje;
		
		$mes = $this->input->post('selectMes');
        $anio = $this->input->post('inputAnio');
        if($mes == '') $mes = date('n'); 
       	if($anio == '')	$anio = date('Y');
		$this->data['tabla'] = $this->model_produccion->getTabla_despacho($mes, $anio);
       	$this->data['mes'] = $this->meses($mes);
       	$this->data['diasmes'] = $this->dias_meses($mes)+1;
       	$this->data['anio'] = $anio;

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		//grafico
		$this->data["resumenDespacho"] = $this->model_produccion->resumenDespacho($mes,$anio);
		$this->data["widgetDespacho"] = $this->model_produccion->getDespachoWidget($mes,$anio);


		$this->data['solicitudes'] = $this->model_produccion->getSolicitudesDespacho();
        

		$this->load->view('view_header', $this->data);
		$this->load->view('view_despacho', $this->data);
	}

	public function ingreso() {		
		$fecha = $this->input->post('inputFechaDespacho');
		$medida = $this->input->post('selectMedida');
        $cantidad = $this->input->post('inputCantidad');
        if($cantidad < 1) {
			redirect('despacho/index/2');
			return;
		}
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_produccion->ingreso_despacho($fecha, $medida, $cantidad, $this->data['data']['id_usuario']);
        $this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Despacho ".$cantidad." de ".number_format((($medida)/10),2));

        //resto en deposito
        $sector = $this->input->post('selectSector');
		$fila = $this->input->post('selectFila');
		$columna = $this->input->post('selectColumna');
		if($sector == 1)
			$lugar = (($fila-1)*5)+$columna;
		elseif ($sector == 2) 			
			$lugar = 40+(($fila-1)*11)+$columna;		
		else {//sector 3
			if($fila < 4 )
				$lugar = 128+(($fila-1)*12)+$columna;
			elseif ($fila == 4)
				$lugar = 128+(($fila-1)*12)+$columna+1;
			elseif ($fila < 8) 
				$lugar = 128+(($fila-1)*12)+$columna+2;
			else
				$lugar = 128+(($fila-1)*12)+$columna+3;
		}

		$this->load->model('model_deposito');
        $this->model_deposito->ingreso($lugar, $cantidad, 0, $this->data['data']['id_usuario']);
       
        
        redirect('despacho/index/1');
	}

	public function ingresoNuevo() {

		$bandera = true;		
		$fecha = $this->input->post('inputFechaDespacho');
		$medida = $this->input->post('selectMedida');
        $cantidad = $this->input->post('inputCantidad');
		$filas = $this->input->post('selectFila');
        /*if($cantidad < 1) {
			redirect('despacho/index/2');
			return;
		}*/

        $fecha = date('Y-m-d',strtotime($fecha));



		$ordendecarga = $this->input->post("ordendecarga");
		$cliente = $this->input->post("cliente");
		$transporte = $this->input->post("transporte");
		$entro = $this->input->post("entro");
		$salio = $this->input->post("salio");
		$puentista = $this->input->post("puentista");
		$oppinza = $this->input->post("oppinza");
		$opcamion = $this->input->post("opcamion");
		$observaciones = $this->input->post("observaciones");

		$this->db->trans_begin();

        $this->model_produccion->ingreso_despacho_orden($fecha, $medida, $cantidad, $filas, $ordendecarga, $cliente, $transporte, $entro, $salio, $puentista, $oppinza, $opcamion, $observaciones, $this->data['data']['id_usuario']);


        $this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Despacho el ".$fecha);

        
        //resto en deposito
		$this->load->model('model_deposito');
        $sectores = $this->input->post('selectSector');
		$columnas = $this->input->post('selectColumna');
		
		foreach($sectores as $key=>$sector) {
			$columna = $columnas[$key];
			$fila = $filas[$key];

			if($sector == 1)
				$lugar = (($fila-1)*5)+$columna;
			elseif ($sector == 2) 			
				$lugar = 40+(($fila-1)*11)+$columna;		
			else 
			{//sector 3
				if($fila < 4 )
					$lugar = 128+(($fila-1)*12)+$columna;
				elseif ($fila == 4)
					$lugar = 128+(($fila-1)*12)+$columna+1;
				elseif ($fila < 8) 
					$lugar = 128+(($fila-1)*12)+$columna+2;
				else
					$lugar = 128+(($fila-1)*12)+$columna+3;
			}

			if( ( $this->model_deposito->hayDisponibles($lugar) - $cantidad[$key]  ) < 0 )
			{
				$bandera = false;
				//redirect('despacho/index/2');	
				//return;
			}
			else
			{

        		$this->model_deposito->ingreso($lugar, $cantidad[$key], 0, $this->data['data']['id_usuario']);
			}
       	}
       	
        if($bandera == true)
        {
        	$this->db->trans_commit();
        	redirect('despacho/index/1');
        }
        else{

        	$this->db->trans_rollback();
			redirect('despacho/index/2');	
        }
        
	}

	public function ingresoNuevo2() {

		$bandera = true;		
		$fecha = $this->input->post('inputFechaDespacho');
		$medida = $this->input->post('selectMedida');
        $cantidad = $this->input->post('inputCantidad');
		$filas = $this->input->post('selectFila');
   
        $fecha = date('Y-m-d',strtotime($fecha));

		$ordendecarga = $this->input->post("ordendecarga");
		$cliente = $this->input->post("cliente");
		$transporte = $this->input->post("transporte");
		$entro = $this->input->post("entro");
		$salio = $this->input->post("salio");
		$puentista = $this->input->post("puentista");
		$oppinza = $this->input->post("oppinza");
		$opcamion = $this->input->post("opcamion");
		$observaciones = $this->input->post("observaciones");

		$this->db->trans_begin();

        $this->model_produccion->ingreso_despacho_orden($fecha, $medida, $cantidad, $filas, $ordendecarga, $cliente, $transporte, $entro, $salio, $puentista, $oppinza, $opcamion, $observaciones, $this->data['data']['id_usuario']);


        $this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Despacho el ".$fecha);

        
        //resto en deposito
		$this->load->model('model_deposito');
        $medidas = $this->input->post('selectMedida');
		$cantidades = $this->input->post('inputCantidad');
		
		foreach($medidas as $key=>$medida) 
		{
			if( ( $this->model_deposito->get_stock_x_medida($medida) - $cantidades[$key]  ) < 0 )
				$bandera = false;
       	}
       	
        if($bandera == true)
        {
        	$this->model_deposito->new_egreso($cantidades, $medidas, $this->data['data']['id_usuario']);
        	$this->db->trans_commit();
        	redirect('despacho/index/1');
        }
        else{

        	$this->db->trans_rollback();
			redirect('despacho/index/2');	
        }
        
	}

	public function eliminar()
	{
		$id_orden = $this->input->post("id_orden");
		$this->load->model('model_deposito');
		$sumar = $this->model_produccion->get_cantidad_medida($id_orden);
		
		$this->db->trans_begin();
		foreach ($sumar as $item) 
		{
			$this->model_deposito->new_ingreso_delete_despacho($item->cantidad, $item->medida, $this->data['data']['id_usuario']);
		}
        $this->model_produccion->delete_orden_despacho($id_orden);
        $this->db->trans_commit();
        redirect('despacho/index/1');
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
	
	public function dias_meses($mes) {
		switch ($mes) {
			case 1: return 31;
			case 2: return 28;
			case 3: return 31;
			case 4: return 30;
			case 5: return 31;
			case 6: return 30;
			case 7: return 31;
			case 8: return 31;
			case 9: return 30;
			case 10: return 31;
			case 11: return 30;
			case 12: return 31;
		}
	}

	public function imprimir($id = 0)
	{
		$this->data['solicitud'] = $this->model_produccion->getSolicitudesDespachoId($id);
        $this->data['detalles'] = $this->model_produccion->getDetallesDespachoId($id);

		$this->load->view('impresion/despacho_print_view', $this->data);
	}

	public function hayDisponibles($id_lugar)
	{
		$this->load->model('model_deposito');
		echo $this->model_deposito->hayDisponibles($id_lugar);
	}
}
?>