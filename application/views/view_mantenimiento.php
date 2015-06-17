<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/DataTables-1.9.4/css/data-table.css" rel="stylesheet" />
<style type="text/css">
	/*
	@media screen and (max-width:2500px)
	{
		.table-responsive{width:100%;margin-bottom:15px;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}
		.grande{ width: 50%; } .grande > input { width: 100% !important; }
		input[type=checkbox] { margin-top: 0; margin-right: 5px; }
	}*/
	tr{cursor:pointer;}
	.stats-info > h4, .stats-info > p{
		color: black !important;
	}

</style>
<!-- begin #content -->
<div id="content" class="content">

	<?php if($data['rol'] == 1){ ?>	
	<!-- <div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Validación de Solicitud</h4>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-xs-4">
					<div class="height-sm" data-scrollbar="true">
						<ul class="media-list media-list-with-divider">
							<?php foreach($solicitudes as $solicitud): ?>
								<li class="media media-lg">						
									<a href="#" class="orden" data-id="<?=$solicitud->id_solicitud?>">
										<div class="media-body">
											<h4 class="media-heading">Nº Solicitud: <?=$solicitud->id_solicitud?></h4>
											Fecha: <?=date('d-m-Y',strtotime($solicitud->fecha));?>.
										</div>
									</a>
								</li>
							<?php endforeach; ?>							
						</ul>
					</div>
				</div>
				<div class="col-xs-8" id="formulario">
					<div class="media-body">
						<h4 style="display:inline-block;" class="media-heading">Nº Solicitud: </h4>
					</div>
					<form class="form-inline" action="<?= base_url(); ?>mantenimiento/ingresoUpdate" method="POST" data-parsley-validate="true">	
						<fieldset disabled>
							<input name="id_solicitud" type="hidden" id="id_solicitud" value="">
							<div id="solicitudItem">
								
							</div>
							<br>	
							<button type="submit" class="btn btn-sm btn-primary m-r-5">Registrar</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div> -->

	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Formularios Mantenimiento</h4>
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
								<th>Fecha Registro</th>
								<th>Origen</th>
								<th>Cierre</th>
								<th>Fecha Cierre</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach ($solicitudes as $solicitud) 
							{
								$fechaR = new DateTime($solicitud->fecha);
								
								if (isset($solicitud->fecha_cierre)) 
								{
									$fechaC = new DateTime($solicitud->fecha_cierre);
									$fechaC = date_format($fechaC,'d-m-Y');
								}
								else
									$fechaC = '';

								$estado = $solicitud->estado;
								if($estado == 0) $estado = "<td style='background-color:#FFBABA;'>Pendiente</td>";
								elseif ($estado == 1) $estado = "<td style='background-color:#FFE8AD;'>En Proceso</td>";
								else $estado = "<td style='background-color:#94DDCF;'>Cerrado</td>";

								echo "<tr id='".$solicitud->id_solicitud."'>";
								echo "<td>".$solicitud->id_solicitud."</td>";
								echo "<td>".date_format($fechaR,'d-m-Y')."</td>";								
								echo "<td>".$solicitud->origen."</td>";
								echo "<td>".$solicitud->nombre.", ".$solicitud->apellido."</td>";
								echo "<td>".$fechaC."</td>";								
								echo $estado;
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
</div>
<!-- end #content -->
		
	
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
		var detalles = <?php echo json_encode($detalles); ?>;


		App.init();
		FormPlugins.init();
		//cambio el item activo en el sidebar
		$("#ULsidebar > li").removeClass("active");
		$("#LImantenimiento").addClass("active");
		
		
		if(<?=$mensaje;?>== 1) alert('Registrado con exito');
		if(<?=$mensaje;?>!= 1 && <?=$mensaje;?>!= 0) alert('Registrado con exito. Nro de Solicitud: '+<?=$mensaje;?>);

		/*$('.orden').click(function(event){
			event.preventDefault()
			var id = $(this).data("id");
			$("#formulario > form > fieldset").removeAttr("disabled");
			$("#formulario > div > h4").html("Nº Solicitud: "+id);
			$("#print-ico").remove();
			$("#formulario > div").append('<a id="print-ico" href="<?= base_url(); ?>mantenimiento/imprimir/'+id+'" style="margin-left: 50px;"><i class="fa fa-print fa-2x"></i></a>');
			$("#id_solicitud").val(id);

			$("#solicitudItem").html('');
			$.each(detalles, function (key, data) {
				if(data.id_solicitud == id)
				{	
					var chk = '';
					var fecha = '';
					if(data.fecha_cierre != null){
						var d = new Date(data.fecha_cierre);
						fecha = d.getDate()+"-"+(d.getMonth()+1)+"-"+d.getFullYear();
					}
						console.log(fecha);

					if(data.estado == 1) chk = 'checked';					
					var res = '<input name="id_detalle[]" type="hidden" id="id_detalle" value="'+data.id_mantenimiento+'">';
					res += '<div class="form-group m-r-10" style="margin-top: 5px;"><input type="checkbox" '+chk+' class="form-control" name="inputVerificado[]" value="'+data.id_mantenimiento+'"/><label> '+data.descripcion+" | Días: "+data.dias+ '</label></div><br>';
					res += '<div class="form-group m-r-10"><div class="input-group date" id="datepicker-autoClose'+data.id_mantenimiento+'" data-date-format="dd-mm-yyyy"><input id="inputFechaCierre" name="inputFechaCierre[]" type="text" class="form-control" value="'+fecha+'" placeholder="Fecha Ciere Pedido" /><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div></div>';
					res += '<div class="form-group m-r-10" style="margin-top: 5px;"><input type="text" placeholder="Comentario" class="form-control" name="inputComentario[]" id="inputComentario" value="'+data.comentarios+'" /></div><br>';
					$("#solicitudItem").append(res);	
				}
			});
			FormPlugins.init();

		});*/

		/*$("#mas").click(function(){			
			$("#items").append($("#item").html());
		});*/

		$("#nueva").click(function(){
			location.href="<?=base_url()?>mantenimiento/nuevaSolicitud";
		});

		$('#data-table tbody').on('click', 'tr', function () {
	        location.href = '<?= base_url(); ?>mantenimiento/form/'+$(this).attr('id');	        
	    });
	});
</script>
<style type="text/css">
	#formulario{  border-left: 1px solid #E4E4E4; }
</style>	
</body>
</html>