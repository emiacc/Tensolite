<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<style type="text/css">
	@media screen and (max-width:2500px){.table-responsive{width:100%;margin-bottom:15px;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}
</style>
<!-- begin #content -->
<div id="content" class="content">		
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Ingreso Producción</h4>
		</div>
		<div class="panel-body">
			<form class="form-inline" action="<?= base_url(); ?>produccion/ingreso" method="POST" data-parsley-validate="true">	
				<div class="form-group m-r-10">
					<div class="input-group date" id="datepicker-autoClose" data-date-format="dd-mm-yyyy" >
						<input id="inputFechaProduccion" name="inputFechaProduccion" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					</div>
				</div>				
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<select class="form-control" name="selectBanco" id="selectBanco" data-parsley-required="true">
						<option value="">Banco...</option>
						<option value="1">Banco 1</option>
						<option value="2">Banco 2</option>
						<option value="3">Banco 3</option>
						<option value="4">Banco 4</option>
						<option value="5">Banco 5</option>
						<option value="6">Banco 6</option>
						<option value="7">Banco 7</option>
						<option value="8">Banco 8</option>
					</select>
				</div>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<select class="form-control" name="selectMedida" id="selectMedida" data-parsley-required="true">
						<option value="">Medida...</option>
						<option value="10">1.0</option>
						<option value="12">1.2</option>
						<option value="14">1.4</option>
						<option value="15">1.5</option>
						<option value="16">1.6</option>
						<option value="18">1.8</option>
						<option value="20">2.0</option>
						<option value="22">2.2</option>
						<option value="24">2.4</option>
						<option value="25">2.5</option>
						<option value="26">2.6</option>
						<option value="28">2.8</option>
						<option value="30">3.0</option>
						<option value="32">3.2</option>
						<option value="34">3.4</option>
						<option value="35">3.5</option>
						<option value="36">3.6</option>
						<option value="38">3.8</option>
						<option value="40">4.0</option>
						<option value="42">4.2</option>
						<option value="44">4.4</option>
						<option value="45">4.5</option>
						<option value="46">4.6</option>
						<option value="48">4.8</option>
						<option value="50">5.0</option>
						<option value="52">5.2</option>
						<option value="54">5.4</option>
						<option value="55">5.5</option>
						<option value="56">5.6</option>
						<option value="58">5.8</option>
						<option value="60">6.0</option>
						<option value="62">6.2</option>
						<option value="64">6.4</option>
						<option value="65">6.5</option>
						<option value="66">6.6</option>
						<option value="68">6.8</option>
						<option value="70">7.0</option>
						<option value="72">7.2</option>											
					</select>
				</div>
				<div class="form-group m-r-10" style="margin-top: 5px;">			
					<input type="text" placeholder="Cantidad" class="form-control" name="inputCantidad" id="inputCantidad" data-parsley-required="true" data-parsley-type="number"/>			
				</div>
				<button type="submit" class="btn btn-sm btn-primary m-r-5">Registrar</button>
			</form>
		</div>
	</div>		
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			</div>
			<h4 class="panel-title">Producción Diaria</h4>
		</div>
		<div class="panel-body">
			<form class="form-inline text-center" action="<?= base_url(); ?>produccion" method="POST" data-parsley-validate="true">						
				<div class="form-group m-r-10">			
					<input type="text" size="2" placeholder="Día" maxlength="2" class="form-control" name="inputDia" id="inputDia" data-parsley-required="true" data-parsley-range="[1,31]"/>			
				</div>
				<div class="form-group m-r-10">
					<select class="form-control" name="selectMes" id="selectMes">
						<option value="1">Enero</option>
						<option value="2">Febrero</option>
						<option value="3">Marzo</option>
						<option value="4">Abril</option>
						<option value="5">Mayo</option>
						<option value="6">Junio</option>
						<option value="7">Julio</option>
						<option value="8">Agosto</option>
						<option value="9">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>
				</div>
				<div class="form-group m-r-10">			
					<input type="text" size="4" placeholder="Año" maxlength="4" class="form-control" name="inputAnio" id="inputAnio" data-parsley-required="true" data-parsley-range="[1900,2050]"/>			
				</div>
				<button type="submit" class="btn btn-sm btn-primary m-r-5" style="margin-top: -5px;">Buscar</button>
			</form>
			<hr>
			<h3 class="text-center"><?=$dia." de ".$mes." ".$anio;?></h3>
			<div class="table-responsive">
				<table class="table table-striped text-center">
					<thead>
						<tr>
							<th>Banco</th>
							<script type="text/javascript">
								var m;
								for (var i = 1.0; i < 7.2; i+=0.1) {
									m = i.toFixed(1)-Math.floor(i);
									m = m.toFixed(1);
									console.log(m);
									if(m==0.2 || m==0.4 || m==0.5 || m==0.6 || m==0.8 || m==0.0 || m ==1.0)		
										document.write("<th>"+i.toFixed(1)+"</th>");
								}
							</script>							
						</tr>
					</thead>
					<tbody>
						<?php 
							function medidas($med){
								switch ($med) {
									case 1: return 10;
									case 2: return 12;
									case 3: return 14;
									case 4: return 15;
									case 5: return 16;
									case 6: return 18;
									case 7: return 20;
									case 8: return 22;
									case 9: return 24;
									case 10: return 25;
									case 11: return 26;
									case 12: return 28;
									case 13: return 30;
									case 14: return 32;
									case 15: return 34;
									case 16: return 35;
									case 17: return 36;
									case 18: return 38;
									case 19: return 40;									
									case 20: return 42;
									case 21: return 44;
									case 22: return 45;
									case 23: return 46;
									case 24: return 48;
									case 25: return 50;
									case 26: return 52;
									case 27: return 54;
									case 28: return 55;
									case 29: return 56;
									case 30: return 58;
									case 31: return 60;
									case 32: return 62;
									case 33: return 64;
									case 34: return 65;
									case 35: return 66;
									case 36: return 68;
									case 37: return 70;
									case 38: return 72;
								}
							}
							for ($i = 1; $i < 9; $i++) {
								$s = "";
								$s = $s."<tr><td>".$i."</td>";
								for ($j = 1; $j < 39; $j++) {
									$band = FALSE;
									for ($k=0; $k < sizeof($tabla); $k++) { 
										if($tabla[$k]->nro_banco == $i && $tabla[$k]->medida == medidas($j)) {
											$s = $s."<td>".$tabla[$k]->cant."</td>";
											$band = TRUE;
										}											
									}
									if($band == FALSE)
										$s = $s."<td>0</td>";
								}	
								$s = $s."</tr>";
								echo $s;							
							}
						?>																
					</tbody>
				</table>
			</div>	
		</div>
	</div>	
</div>
<!-- end #content -->
		
	
<?php $this->load->view('view_scripts') ?>

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url(); ?>assets/js/form-plugins.js"></script>
<script src="<?= base_url(); ?>assets/plugins/parsley/dist/parsley.js"></script>
<script src="<?= base_url(); ?>assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
	
<script>
	$(document).ready(function() {
		App.init();
		FormPlugins.init();
		//cambio el item activo en el sidebar
		$("#ULsidebar > li").removeClass("active");
		$("#LIproduccion").addClass("active");
		
		//Completar los input con la fecha actual
		d = new Date(); 
		mes = (d.getMonth()+1);
		if(mes < 10) mes = "0"+mes;
		currentDay = d.getDate()+"-"+mes+"-"+ d.getFullYear();
		$("#inputFechaProduccion").attr("value",currentDay);
		$('#inputAnio').attr("value",d.getFullYear());
		$('#selectMes').attr("value",d.getMonth()+1);
		$('#inputDia').attr("value",d.getDate());

		if(<?=$mensaje;?>== 1) alert('Registrado con exito');
	});
</script>	
</body>
</html>