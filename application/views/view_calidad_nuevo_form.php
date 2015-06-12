<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/DataTables-1.9.4/css/data-table.css" rel="stylesheet" />
<style type="text/css">tr{cursor:pointer;}</style>
<!-- begin #content -->
<div id="content" class="content">
	<?php if($data['rol'] <= 3) { ?>
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Solicitud de Formulario</h4>
		</div>
		<div class="panel-body">

			<form class="form-horizontal form-bordered" action="<?= base_url(); ?>calidad/nuevoFormulaio" method="POST" data-parsley-validate="true">	
				
				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Tipo</label>
					<div class="col-md-8 ui-sortable">
						<select class="form-control" id="selectTipo" name="selectTipo" data-parsley-required="true">
							<option value="">Seleccione...</option>
							<option value="INC - No Conformidad">INC - No Conformidad</option>
							<option value="AC - Acción Correctiva">AC - Acción Correctiva</option>
							<option value="AP - Acción Preventiva">AP - Acción Preventiva</option>	
							<option value="OM - Oportunidad de Mejora">OM - Oportunidad de Mejora</option>	
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Sector</label>
					<div class="col-md-8 ui-sortable">
						<select class="form-control" id="selectSector" name="selectSector" data-parsley-required="true">
							<option value="">Seleccione...</option>
							<option value="Bloques">Bloques</option>
							<option value="Viguetas">Viguetas</option>
							<option value="Tejas">Tejas</option>
							<option value="Mantenimiento">Mantenimiento</option>
							<option value="Ventas">Ventas</option>
							<option value="Atención al cliente">Atención al cliente</option>
							<option value="Otros">Otros</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Fecha</label>
					<div class="col-md-8 ui-sortable">
						<div class="input-group date" id="datepicker-autoClose" data-date-format="dd-mm-yyyy" >
							<input id="inputFechaOrden" name="inputFechaOrden" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
				</div>	

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Detección</label>
					<div class="col-md-8 ui-sortable">
						<textarea class="form-control" name="deteccion" placeholder="Descripcción" rows="5" data-parsley-range="[20,500]"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Análisis de la causa / Participantes</label>
					<div class="col-md-8 ui-sortable">
						<textarea class="form-control" name="analisis" placeholder="Descripcción" rows="5" data-parsley-range="[20,500]"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Plan de acción (plazos, responsable, medios, registro (si corresponde))</label>
					<div class="col-md-8 ui-sortable">
						<textarea class="form-control" name="plan" placeholder="Descripcción" rows="5" data-parsley-range="[20,500]"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Verificación de la eficacia</label>
					<div class="col-md-8 ui-sortable">
						<textarea class="form-control" name="verificacion" placeholder="Descripcción" rows="5" data-parsley-range="[20,500]"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable"></label>
					<div class="col-md-8 ui-sortable">
						<button type="submit" class="btn btn-sm btn-primary m-r-5">Registrar</button>	
						<button id="volver" type="button" class="btn btn-sm btn-primary m-l-10">Volver</button>		
					</div>
				</div>		
			</form>
		</div>
	</div>	

	<?php } ?>	
	
		
</div>


<?php $this->load->view('view_scripts') ?>

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url(); ?>assets/js/form-plugins.js"></script>
<script src="<?= base_url(); ?>assets/plugins/parsley/dist/parsley.js"></script>
<script src="<?= base_url(); ?>assets/plugins/DataTables-1.9.4/js/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>assets/plugins/DataTables-1.9.4/js/data-table.js"></script>
<script src="<?= base_url(); ?>assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
		
<script>
	$(document).ready(function() {
		

		App.init();
		FormPlugins.init();
		//cambio el item activo en el sidebar
		$("#ULsidebar > li").removeClass("active");
		$("#LIcalidad").addClass("active");		

		$('#volver').click(function () {
	        location.href = '<?= base_url(); ?>calidad';	        
	    });
		
	});
</script>
</body>
</html>