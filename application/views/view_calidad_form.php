<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/DataTables-1.9.4/css/data-table.css" rel="stylesheet" />
<style type="text/css">
	tr{cursor:pointer;}
	@media print
	{
		.panel-body{
			margin-top: -90px;
			margin-bottom: 0px;
		}		
		.form-horizontal.form-bordered .form-group>div{
			padding: 4px !important;
		}
	}
</style>

<!-- begin #content -->
<div id="content" class="content">
	<?php if($data['rol'] <= 3) { ?>
	<div class="panel panel-inverse no-print">				
			<div class="panel-body">
				<ul class="list-inline pull-right" style="margin:0;">
					<li><button type="button" class="btn btn-sm btn-primary m-l-10 volver no-print" style="margin-top: -15px;">Volver</button></li>
					<li><div style="background-color: #AAA; width:1px; height: 30px;"></div></li>					
					<li><a href="#" onclick="window.print()"><i class="fa fa-print fa-3x"></i></a></li>
				</ul>
			</div>
		</div>

	<div class="panel panel-inverse">
		<div class="panel-heading no-print">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Solicitud de Formulario</h4>
		</div>
		<div class="panel-body">
			<form class="form-horizontal form-bordered" action="<?= base_url(); ?>calidad/editarFormulaio" method="POST" data-parsley-validate="true">	
				<input type="hidden" name="id_formulario" value="<?=$formulario->id_formulario?>">

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Nº Solicitud</label>
					<div class="col-md-8 ui-sortable">
						<h3 style="margin-top:0;"><?=$formulario->id_formulario?></h3>
					</div>
				</div>


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
				<?php $fechaD = new DateTime($formulario->fecha_deteccion); ?>
				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Fecha</label>
					<div class="col-md-8 ui-sortable">
						<div class="input-group date" id="datepicker-autoClose" data-date-format="dd-mm-yyyy" >
							<input id="inputFechaOrden" name="inputFechaOrden" type="text" class="form-control" value="<?=date_format($fechaD,'d-m-Y')?>" placeholder="Seleccione Fecha" data-parsley-required="true" />
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
				</div>	

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Detección</label>
					<div class="col-md-8 ui-sortable">
						<textarea class="form-control" name="deteccion" placeholder="Descripcción" rows="5" data-parsley-range="[20,500]"><?=$formulario->deteccion?></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Análisis de la causa / Participantes</label>
					<div class="col-md-8 ui-sortable">
						<textarea class="form-control" name="analisis" placeholder="Descripcción" rows="5" data-parsley-range="[20,500]"><?=$formulario->analisis?></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Plan de acción (plazos, responsable, medios, registro (si corresponde))</label>
					<div class="col-md-8 ui-sortable">
						<textarea class="form-control" name="plan" placeholder="Descripcción" rows="5" data-parsley-range="[20,500]"><?=$formulario->plan?></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Verificación de la eficacia</label>
					<div class="col-md-8 ui-sortable">
						<textarea class="form-control" name="verificacion" placeholder="Descripcción" rows="5" data-parsley-range="[20,500]"><?=$formulario->verificacion?></textarea>
					</div>
				</div>

				<div class="form-group no-print" style="display:none">
					<label class="col-md-4 control-label ui-sortable">Cerrar Formulario</label>
					<div class="col-md-8 ui-sortable">
						<input type="checkbox" id="cerrarF" name="cerrarF">
					</div>
				</div>

				<div class="form-group no-print">
					<label class="col-md-4 control-label ui-sortable"></label>
					<div class="col-md-8 ui-sortable">
						<button type="submit" id="btnGuardar" class="btn btn-sm btn-primary m-r-5">Guardar</button>								
						<button type="button" class="btn btn-sm btn-primary m-l-10 volver">Volver</button>				
						<button type="button" id="btnCerrar" class="btn btn-sm btn-default m-l-10">Cerrar</button>				
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
		
		
		$("#selectTipo").val('<?=$formulario->tipo?>');
		$("#selectSector").val('<?=$formulario->sector?>');

		$('.volver').click(function () {
	        location.href = '<?= base_url(); ?>calidad';	        
	    });

	    if('<?=$formulario->estado?>' == '2')
	    {
	    	$('#cerrarF').prop('checked', true);
	    	$("textarea").each(function(){
	    		$(this).prop('readonly', true);
	    	});
	    	$("select").each(function(){
	    		$(this).prop('disabled', true);
	    	});

	    	$("#inputFechaOrden").prop('disabled', true);
	    	$("#btnGuardar").prop('disabled', true);
	    	$("#btnCerrar").prop('disabled', true);

	    	$('form').on('submit', function(event) {
	    		event.preventDefault();
	    		alert("NO SE PUEDE EDITAR");
	    	});

	    }

	    $("#btnCerrar").click(function(){
	    	$("#cerrarF").prop('checked', true);
	    	var enviar = true;
	    	$("textarea").each(function(){
        		if(this.value=='')
        		{
        			alert("Debe completar todos los campos");
        			enviar = false;
        		}        		
    		});

    		if(enviar == true)
        	{
        		$("form").submit();
        	}
	    });
	});
</script>
</body>
</html>