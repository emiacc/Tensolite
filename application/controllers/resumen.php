<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resumen extends CI_Controller {

	public function __construct() {
	    parent::__construct();   
	    if(!$this->session->userdata('logueado')) redirect('login/iniciar_sesion');   
	    $this->data = array();       
	    $this->data['data'] = $this->session->userdata('user_data');
		$this->load->model('model_perfil');
  	}

	public function index()	{
		$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
		$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		
		$mes = $this->input->post('mes-filtro');
        $anio = $this->input->post('anio-filtro');
       	if($anio < 2013) $anio = '';
        if($mes == '') { $mes = date('n'); }
       	if($anio == '')	{ $anio = date('Y'); if($mes==0) { $mes = 12; $anio--; }}
       	$this->data["periodo"] = $this->meses($mes)." de ".$anio;

       	$this->load->model('model_resumen');
       	$this->data["resumenProduccion"] = $this->model_resumen->resumenProduccion($mes,$anio,$mes,$anio);
       	$this->data["resumenDespacho"] = $this->model_resumen->resumenDespacho($mes,$anio,$mes,$anio);
       	$this->data["produccionProd"] = $this->model_resumen->produccionProd($mes,$anio,$mes,$anio);
       	$this->data["produccionRecu"] = $this->model_resumen->produccionRecu($mes,$anio,$mes,$anio);
       	$this->data["stockSilos"] = $this->model_resumen->getStockSilos($mes,$anio,$mes,$anio);
       	
       	//consumo materia prima
       	$this->data["consumoCemento"] = $this->model_resumen->getConsumoCemento($mes,$anio,$mes,$anio);
       	$this->data["consumoArena"] = $this->model_resumen->getConsumoArena($mes,$anio,$mes,$anio);
       	$this->data["consumoBinder"] = $this->model_resumen->getConsumoMateriaPrima($mes,$anio,$mes,$anio,3);
       	$this->data["consumoAcelerante"] = $this->model_resumen->getConsumoMateriaPrima($mes,$anio,$mes,$anio,4);
       	$this->data["consumoPlastificante"] = $this->model_resumen->getConsumoMateriaPrima($mes,$anio,$mes,$anio,5);
       	$this->data["consumoCeniza"] = $this->model_resumen->getConsumoMateriaPrima($mes,$anio,$mes,$anio,7);
       	
       	$this->data["produccionCategoria"] = $this->model_resumen->getProduccionCategoria($mes,$anio,$mes,$anio);

       	$this->data["stockWidget"] = $this->model_resumen->getStock();
       	$this->data["produccionWidget"] = $this->model_resumen->getProduccionWidget($mes,$anio,$mes,$anio);
       	$this->data["despachoWidget"] = $this->model_resumen->getDespachoWidget($mes,$anio,$mes,$anio);
       	$this->data["perdidaPlayaWidget"] = $this->model_resumen->getPerdidaWidget($mes,$anio,$mes,$anio,1);
       	$this->data["perdidaProdWidget"] = $this->model_resumen->getPerdidaWidget($mes,$anio,$mes,$anio,0);
       	$this->data["recuperacionWidget"] = $this->model_resumen->getRecuperacionWidget($mes,$anio,$mes,$anio);


		$this->load->view('view_header', $this->data);
		$this->load->view('view_resumen', $this->data);
	}

	public function filtroPeriodo(){
		$mesDesde = $this->input->post('mes-desde');
        $anioDesde = $this->input->post('anio-desde');
        $mesHasta = $this->input->post('mes-hasta');
        $anioHasta = $this->input->post('anio-hasta');
        if($anioDesde < 2013 || $anioHasta < 2013) redirect('resumen');
        else if($anioDesde > $anioHasta) redirect('resumen');
        else if($anioDesde == $anioHasta && $mesDesde >= $mesHasta) redirect('resumen'); 
        else{
        	$this->data["periodo"] = $this->meses($mesDesde)." de ".$anioDesde." - ".$this->meses($mesHasta)." de ".$anioHasta;

        	$this->data['usuario'] = $this->model_perfil->getUser($this->data['data']['id_usuario']);
			$this->data['notificaciones'] = $this->model_perfil->getNotificaciones($this->data['data']['id_usuario']);
		

			$this->load->model('model_resumen');
	       	$this->data["resumenProduccion"] = $this->model_resumen->resumenProduccion($mesDesde,$anioDesde,$mesHasta,$anioHasta);
	       	$this->data["resumenDespacho"] = $this->model_resumen->resumenDespacho($mesDesde,$anioDesde,$mesHasta,$anioHasta);
	       	$this->data["produccionProd"] = $this->model_resumen->produccionProd($mesDesde,$anioDesde,$mesHasta,$anioHasta);
	       	$this->data["produccionRecu"] = $this->model_resumen->produccionRecu($mesDesde,$anioDesde,$mesHasta,$anioHasta);
	       	$this->data["stockSilos"] = $this->model_resumen->getStockSilos($mesDesde,$anioDesde,$mesHasta,$anioHasta);
	       	
	       	//consumo materia prima
	       	$this->data["consumoCemento"] = $this->model_resumen->getConsumoCemento($mesDesde,$anioDesde,$mesHasta,$anioHasta);
	       	$this->data["consumoArena"] = $this->model_resumen->getConsumoArena($mesDesde,$anioDesde,$mesHasta,$anioHasta);
	       	$this->data["consumoBinder"] = $this->model_resumen->getConsumoMateriaPrima($mesDesde,$anioDesde,$mesHasta,$anioHasta,3);
	       	$this->data["consumoAcelerante"] = $this->model_resumen->getConsumoMateriaPrima($mesDesde,$anioDesde,$mesHasta,$anioHasta,4);
	       	$this->data["consumoPlastificante"] = $this->model_resumen->getConsumoMateriaPrima($mesDesde,$anioDesde,$mesHasta,$anioHasta,5);
	       	$this->data["consumoCeniza"] = $this->model_resumen->getConsumoMateriaPrima($mesDesde,$anioDesde,$mesHasta,$anioHasta,7);
	       	
	       	$this->data["produccionCategoria"] = $this->model_resumen->getProduccionCategoria($mesDesde,$anioDesde,$mesHasta,$anioHasta);

	       	$this->data["stockWidget"] = $this->model_resumen->getStock();
	       	$this->data["produccionWidget"] = $this->model_resumen->getProduccionWidget($mesDesde,$anioDesde,$mesHasta,$anioHasta);
	       	$this->data["despachoWidget"] = $this->model_resumen->getDespachoWidget($mesDesde,$anioDesde,$mesHasta,$anioHasta);
	       	$this->data["perdidaPlayaWidget"] = $this->model_resumen->getPerdidaWidget($mesDesde,$anioDesde,$mesHasta,$anioHasta,1);
	       	$this->data["perdidaProdWidget"] = $this->model_resumen->getPerdidaWidget($mesDesde,$anioDesde,$mesHasta,$anioHasta,0);
	       	$this->data["recuperacionWidget"] = $this->model_resumen->getRecuperacionWidget($mesDesde,$anioDesde,$mesHasta,$anioHasta);

        	$this->load->view('view_header', $this->data);
			$this->load->view('view_resumen', $this->data);
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
}