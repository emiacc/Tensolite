<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />

<!-- begin #content -->
<div id="content" class="content">
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Orden de Fabricacción</h4>
		</div>
		<div class="panel-body">
		

			<h4 class="modal-title">Orden de Fabricación</h4>
			<form class="form-inline" action="<?= base_url(); ?>produccion/editarOrden" method="POST" data-parsley-validate="true">	
				<input type="hidden" name="id_orden" id="id_orden" value="<?=$solicitud->id_orden?>" />			
				<div class="form-group m-r-10">
					<div class="input-group date" id="datepicker-autoClose" data-date-format="dd-mm-yyyy" >
						<input id="inputFechaOrden" name="inputFechaOrden" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
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
				<br>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Confeccionado" class="form-control" name="confeccionado" id="confeccionado"/>			
				</div>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Supervisor" class="form-control" name="supervisor" id="supervisor"/>			
				</div>
				<br>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Medidor-Marcador" class="form-control" name="medidor" id="medidor"/>			
				</div>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Cosechador" class="form-control" name="cosechador" id="cosechador"/>			
				</div>
				<br>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Jefe de Planta" class="form-control" name="jefe" id="jefe"/>			
				</div>
				<div id="items">

					<?php foreach ($detalles as $detalle): ?>
					<div id="item">
						<input type="hidden" name="id_produccion[]" id="id_produccion" value="<?=$detalle->id_produccion?>" />			
						<div class="form-group m-r-10" style="margin-top: 5px;">			
							<input type="text" placeholder="Nº Cortes" class="form-control" name="inputCortes[]" id="inputCortes" data-parsley-required="true" data-parsley-type="digits" value="<?=$detalle->cortes?>"/>			
						</div>
						<div class="form-group m-r-10" style="margin-top: 5px;">
							<select class="form-control" name="selectMedida[]" id="selectMedida" data-parsley-required="true">
								<option value="<?=$detalle->medida?>"><?= number_format( ($detalle->medida / 10) ,1)?></option>
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
								<option value="74">7.4</option>											
								<option value="76">7.6</option>											
								<option value="78">7.8</option>											
								<option value="80">8.0</option>											
								<option value="82">8.2</option>											
							</select>
						</div>
						<div class="form-group m-r-10" style="margin-top: 5px;">			
							<input type="text" placeholder="Unidades" class="form-control" name="inputUnidades[]" id="inputUnidades" data-parsley-required="true" data-parsley-type="digits" value="<?=$detalle->unidades?>"/>			
						</div>
						<br>
					</div>
					<?php endforeach; ?>
				</div>				
				<!--<div id="mas" style="cursor:pointer;"><i class="fa fa-2x fa-plus-square"></i> Agregar Medida</div>	-->
				<br>
				<button type="submit" class="btn btn-sm btn-primary m-r-5">Guardar</button>			
			</form>



		</div>
	</div>
</div>

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
		<?php $date = new DateTime("$solicitud->fecha"); ?>
		currentDay = "<?=$date->format('d-m-Y');?>";
		$("#inputFechaOrden").attr("value",currentDay);
		
		$("#selectBanco").val("<?=$solicitud->nro_banco?>");
		$("#confeccionado").val("<?=$solicitud->confeccionado?>");
		$("#supervisor").val("<?=$solicitud->supervisor?>");
		$("#medidor").val("<?=$solicitud->medidor?>");
		$("#cosechador").val("<?=$solicitud->cosechador?>");
		$("#jefe").val("<?=$solicitud->jefe?>");


		$("#mas").click(function(){			
			$("#items").append($("#item").html());
		});
	});
</script>
</body>
</html>