<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produccion extends CI_Controller {
	
	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
	    $this->load->model('model_produccion');
		$this->load->model('model_perfil');
		$this->load->model('model_materia');
  	}

	public function index($mensaje = 0)	{
		$this->data['mensaje'] = $mensaje;

		$dia = $this->input->post('inputDia');
		$mes = $this->input->post('selectMes');
        $anio = $this->input->post('inputAnio');
        if($dia == '') $dia = date('j'); 
        if($mes == '') $mes = date('n'); 
       	if($anio == '')	$anio = date('Y');
       	$this->data['tabla'] = $this->model_produccion->getTabla($dia, $mes, $anio);
       	$this->data['dia'] = $dia;
       	$this->data['mes'] = $this->meses($mes);
       	$this->data['anio'] = $anio;

		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		

		$this->data['silos'] = $this->model_materia->getSilos();

		$this->load->view('view_header', $this->data);
		$this->load->view('view_produccion', $this->data);
	}

	public function ingreso() {		
		$fecha = $this->input->post('inputFechaProduccion');
		$banco = $this->input->post('selectBanco');
        $medida = $this->input->post('selectMedida');
        $cantidad = $this->input->post('inputCantidad');
        $fecha = date('Y-m-d',strtotime($fecha));
        $this->model_produccion->ingreso_produccion($fecha, $banco, $medida, $cantidad, $this->data['data']['id_usuario']);
        $this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Producción ".$cantidad." de ".number_format((($medida)/10),2));
        

        //egresos materia prima
        //cemento
        $cemento = $this->input->post('inputCemento');
        $silo = $this->input->post('selectSilo');
        $this->model_materia->egresoCemento($fecha, $cemento, $silo, $this->data['data']['id_usuario']);
        $stock = $this->model_materia->getStockCemento($silo);
        if($stock < 140)
        	$this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Minimo cemento en silo ".$silo);

        $arena = $this->input->post('inputArena');
        $this->model_materia->egreso($fecha, $arena, $this->data['data']['id_usuario'], 2);
        $stock = $this->model_materia->getStockMateria(2);
        if($stock < 30)
        	$this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Minimo stock de Arena tipo1");

        $arena2 = $this->input->post('inputArena2');
        $this->model_materia->egreso($fecha, $arena2, $this->data['data']['id_usuario'], 8);
        $stock = $this->model_materia->getStockMateria(8);
        if($stock < 30)
        	$this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Minimo stock de Arena tipo2");
        
        $binder = $this->input->post('inputBinder');
        $this->model_materia->egreso($fecha, $binder, $this->data['data']['id_usuario'], 3);
        $stock = $this->model_materia->getStockMateria(3);
        if($stock < 30)
        	$this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Minimo stock de Binder");
        
        $triturado = $this->input->post('inputTriturado');
        $this->model_materia->egreso($fecha, $triturado, $this->data['data']['id_usuario'], 6);
        //$stock = $this->model_materia->getStockMateria(6);
        //if($stock < 30)
        //	$this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Minimo stock de Arena tipo1");
        
        $acelerante = $this->input->post('inputAcelerante');
        $this->model_materia->egreso($fecha, $acelerante, $this->data['data']['id_usuario'], 4);
        $stock = $this->model_materia->getStockMateria(4);
        if($stock < 1000)
        	$this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Minimo stock de Acelerante");
        
        $plastificante = $this->input->post('inputPlastificante');
        $this->model_materia->egreso($fecha, $plastificante, $this->data['data']['id_usuario'], 5);
        $stock = $this->model_materia->getStockMateria(5);
        if($stock < 1000)
        	$this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Minimo stock de Plastificante");
        
        $ceniza = $this->input->post('inputCeniza');
        $this->model_materia->egreso($fecha, $ceniza, $this->data['data']['id_usuario'], 7);
        $stock = $this->model_materia->getStockMateria(7);
        if($stock < 7)
        	$this->model_perfil->insertarNotificacion($this->data['data']['id_usuario'], "Minimo stock Ceniza");
        
        $agua = $this->input->post('inputAgua');
        $this->model_materia->egreso($fecha, $agua, $this->data['data']['id_usuario'], 9);

        redirect('produccion/index/1');
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