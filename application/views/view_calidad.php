<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/DataTables-1.9.4/css/data-table.css" rel="stylesheet" />
<style type="text/css">
	tr{cursor:pointer;}
	.stats-info > h4, .stats-info > p{
		color: black !important;
	}
</style>
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
			<h4 class="panel-title">Formularios Calidad</h4>
		</div>
		<div class="panel-body">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-4"><button id="nueva" type="button" class="btn btn-primary m-l-20 m-t-20">Nueva Solicitud</button></div>
					<div class="col-xs-8">
						<div class="col-sm-2 col-xs-2 ui-sortable" style='background-color:#FFBABA;'>
							<div class="widget widget-stats" >
								<div class="stats-info">
									<h4>Pendientes</h4>
									<p><?=$estados['pendientes']?></p>	
								</div>
							</div>
						</div>
						<div class="col-sm-2 col-xs-2 ui-sortable" style='background-color:#FFE8AD;'>
							<div class="widget widget-stats" >
								<div class="stats-info">
									<h4>En Proceso</h4>
									<p><?=$estados['proceso']?></p>	
								</div>
							</div>
						</div>
						<div class="col-sm-2 col-xs-2 ui-sortable" style='background-color:#94DDCF;'>
							<div class="widget widget-stats" >
								<div class="stats-info">
									<h4>Cerrados</h4>
									<p><?=$estados['cerrado']?></p>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="table-responsive">
					<table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nº</th>
								<th>Tipo</th>
								<th>Sector</th>
								<th>Fecha Registro</th>
								<th>Fecha Detección</th>
								<th>Usuario</th>
								<th>Estado</th>
								<?php if($data['rol'] == 1): ?>
								<th>Eliminar</th>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach ($formularios as $formulario) 
							{
								$fechaR = new DateTime($formulario->fecha_real);
								$fechaD = new DateTime($formulario->fecha_deteccion);
								$estado = $formulario->estado;
								if($estado == 0) $estado = "<td style='background-color:#FFBABA;'>Pendiente</td>";
								elseif ($estado == 1) $estado = "<td style='background-color:#FFE8AD;'>En Proceso</td>";
								else $estado = "<td style='background-color:#94DDCF;'>Cerrado</td>";

								echo "<tr id='".$formulario->id_formulario."'>";
								echo "<td>".$formulario->id_formulario."</td>";
								echo "<td>".$formulario->tipo."</td>";
								echo "<td>".$formulario->sector."</td>";
								echo "<td>".date_format($fechaR,'d-m-Y')."</td>";
								echo "<td>".date_format($fechaD,'d-m-Y')."</td>";
								echo "<td>".$formulario->nombre.", ".$formulario->apellido."</td>";
								echo $estado;
								if($data['rol'] == 1)
									if($formulario->estado == 0)
										echo "<td class='action'>"."<a class='btn btn-danger btn-icon btn-circle btn-sm btn-delete'><i class='fa fa-times'></i></a>"."</td>";
									else
										echo "<td></td>";
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

	<?php /* if($data['rol'] <= 3) { ?>
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

	<?php } */ ?>	

</div>
<!-- modal delete -->
	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modal_delete">
	   <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Eliminar orden</h4>
	      </div>
	      <div class="modal-body">
	        ¿Está seguro que desea eliminar la orden?
	      </div>
	      <div class="modal-footer">
	        <form method="POST" action="<?=base_url()?>calidad/eliminar">
	        	<input type="hidden" name="id_formulario" id="id_formulario">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	        	<button type="submit" class="btn btn-primary">Aceptar</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
<!-- end modal delete -->	

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
		
		if(<?=$mensaje;?> == 0) console.log('0');
		else if(<?=$mensaje;?>== 1) alert('Registrado con exito');
		else if(<?=$mensaje;?>== 2) alert('Editado con exito');
		else alert('Registrado con exito. Nro de Solicitud: '+<?=$mensaje;?>);

	    $('#nueva').click(function () {
	        location.href = '<?= base_url(); ?>calidad/nuevoForm';	        
	    });

		$('#data-table tbody').on('click', 'tr > td', function () {
			if($(this).hasClass('action'))
			{
				$("#id_formulario").val($(this).parent().attr("id"));
				$('#modal_delete').modal('show');
			}
			else
	        location.href = '<?= base_url(); ?>calidad/form/'+$(this).parent().attr('id');	        
	    });
		$('#modal_delete').on('hidden.bs.modal', function (){ $("#id_formulario").val("");});

		
	});
</script>
</body>
</html>