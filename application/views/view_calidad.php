<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/DataTables-1.9.4/css/data-table.css" rel="stylesheet" />
<style type="text/css">tr{cursor:pointer;}</style>
<!-- begin #content -->
<div id="content" class="content">
	<?php if($data['rol'] == 1) { ?>
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Formularios Calidad</h4>
		</div>
		<div class="panel-body">
			<div class="panel-body">
				<div class="table-responsive">
					<table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Tipo</th>
								<th>Sector</th>
								<th>Fecha Registro</th>
								<th>Fecha Detección</th>
								<th>Usuario</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach ($formularios as $formulario) 
							{
								$fechaR = new DateTime($formulario->fecha_real);
								$fechaD = new DateTime($formulario->fecha_deteccion);

								echo "<tr data-toggle='modal' href='#modal".$formulario->id_formulario."'>";
								echo "<td>".$formulario->tipo."</td>";
								echo "<td>".$formulario->sector."</td>";
								echo "<td>".date_format($fechaR,'d-m-Y')."</td>";
								echo "<td>".date_format($fechaD,'d-m-Y')."</td>";
								echo "<td>".$formulario->nombre.", ".$formulario->apellido."</td>";
								echo "</tr>";
							}
						?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>                
	</div>


	<?php } ?>

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
					</div>
				</div>		
			</form>
		</div>
	</div>	

	<?php } ?>	

		
</div>

<!-- end #content -->
<?php foreach ($formularios as $formulario) { ?>
	<div class="modal fade" id="modal<?=$formulario->id_formulario?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title"><?=$formulario->tipo?></h4>
				</div>
				<div class="modal-body">
					<p><b>Sector: </b><?=$formulario->sector?></p>
					<p><b>Detección: </b><?=$formulario->deteccion?></p>
					<p><b>Análisis de la caua: </b><?=$formulario->analisis?></p>
					<p><b>Plan de acción: </b><?=$formulario->plan?></p>
					<p><b>Verificación de la eficacia: </b><?=$formulario->verificacion?></p>
				</div>
				<div class="modal-footer">
					<a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Cerrar</a>
					<!--<a href="javascript:;" class="btn btn-sm btn-success">Aceptar</a>-->
				</div>
			</div>
		</div>
	</div>
<?php } ?>

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
		
		
		if(<?=$mensaje;?>== 1) alert('Registrado con exito');
		if(<?=$mensaje;?>!= 1 && <?=$mensaje;?>!= 0) alert('Registrado con exito. Nro de Solicitud: '+<?=$mensaje;?>);

		$('#data-table tbody').on('click', 'tr', function () {
	        var id = $(this).attr('id');	        
	    });
	});
</script>
</body>
</html>