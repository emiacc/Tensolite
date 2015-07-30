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
					<li><a href="<?= base_url(); ?>insumos/imprimir/<?=$id_solicitud?>"><i class="fa fa-print fa-3x"></i></a></li>
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
			<form class="form-horizontal form-bordered" action="<?= base_url(); ?>insumos/ingresoUpdate" method="POST" data-parsley-validate="true">	
				<input type="hidden" name="id_solicitud" value="<?=$id_solicitud?>">

				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Nº Solicitud</label>
					<div class="col-md-8 ui-sortable">
						<h3 style="margin-top:0;"><?=$id_solicitud?></h3>
					</div>
				</div>


				<div class="form-group">
					<label class="col-md-4 control-label ui-sortable">Detalle</label>
					<div class="col-md-8 ui-sortable">

					<?php foreach ($detalles as $detalle): 
						
						$chk = ''; 
						if($detalle->estado == 1) 
							$chk = 'checked'; 

						if(isset($detalle->fecha_cierre))
						{
							$fechaC = new DateTime($detalle->fecha_cierre); 
							$fechaC = date_format($fechaC,'d-m-Y');
						}
						else
							$fechaC = '';

					?>
						
						<input name="id_detalle[]" type="hidden" id="id_detalle" value="<?=$detalle->id_insumo?>">
						<div class="form-group m-r-10" style="margin-top: 80px;">
							<input type="checkbox" <?=$chk?> name="inputVerificado[]" value="<?=$detalle->id_insumo?>"/>
							<label> <?=$detalle->descripcion?> | Días: <?=$detalle->dias?> </label>
							<br>
							<br>
							<div class="input-group date" id="datepicker-autoClose<?=$detalle->id_insumo?>" data-date-format="dd-mm-yyyy" style="padding:0;">
								<input id="inputFechaCierre" name="inputFechaCierre[]" type="text" class="form-control" value="<?=$fechaC?>" placeholder="Fecha Ciere Pedido" /><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>		
							<br>					
							<input type="text" placeholder="Comentario" class="form-control" name="inputComentario[]" id="inputComentario" value="<?=$detalle->comentarios?>" />
						</div>
						
					<?php endforeach; ?>	


					</div>


					<div class="form-group no-print" style="display:none">
						<label class="col-md-4 control-label ui-sortable">Cerrar Formulario</label>
						<div class="col-md-8 ui-sortable">
							<input type="checkbox" id="cerrarF" name="cerrarF">
						</div>
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
		$("#LIinsumos").addClass("active");
		
		
		

		$('.volver').click(function () {
	        location.href = '<?= base_url(); ?>insumos';	        
	    });

	    if('<?=$estado_solicitud?>' == '2')
	    {
	    	$('#cerrarF').prop('checked', true);
	    	
	    	$("#inputFechaOrden").prop('disabled', true);
	    	$("#btnGuardar").prop('disabled', true);
	    	$("#btnCerrar").prop('disabled', true);

	    	$("checkbox").each(function(){
	    		$(this).prop('disabled', true);
	    	});
	    	$("input").each(function(){
	    		$(this).prop('disabled', true);
	    	});



	    	$('form').on('submit', function(event) {
	    		event.preventDefault();
	    		alert("NO SE PUEDE EDITAR");
	    	});

	    }

	    $("#btnCerrar").click(function(){
	    	$("#cerrarF").prop('checked', true);
	    	var enviar = true;
	    	
	    	/*$("textarea").each(function(){
        		if(this.value=='')
        		{
        			alert("Debe completar todos los campos");
        			enviar = false;
        		}        		
    		});*/

    		if(enviar == true)
        	{
        		$("form").submit();
        	}
	    });
	});
</script>
</body>
</html>