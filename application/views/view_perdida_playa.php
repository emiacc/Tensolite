<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/DataTables-1.9.4/css/data-table.css" rel="stylesheet" />
<style type="text/css">
	@media screen and (max-width:2500px){.table-responsive{width:100%;margin-bottom:15px;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}
</style>
<?php 
	$max = 0;
	$min = 9999999;
	$tot = count($resumenPerdida);
	$i = 0;
	echo "<script>var resumen = [";
	foreach ($resumenPerdida as $value) {
		if($value->cant < $min) $min = $value->cant;
		if($value->cant > $max) $max = $value->cant;
		$i++;
		if($i <> $tot)
			echo "[".$value->diaY.",".$value->cant."],";
		else
			echo "[".$value->diaY.",".$value->cant."]";
	}
	echo '];</script>';
	echo '<script>var legend = "Pérdida"; color = "red";</script>';
?>

<!-- begin #content -->
<div id="content" class="content">	
	
	<!-- periodo y filtros -->
	<div class="row no-print">
		<div class="panel panel-inverse">				
			<div class="panel-body">
				<div class="pull-left"><h2 id="mes-filtro" style="margin:0;"><?=$mes." ".$anio;?></h2></div>
				<ul class="list-inline pull-right" style="margin:0;">
					<?php if($data['rol'] < 3 ){ ?>	
					<li><button id="ingreso-modal" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-ingreso">Ingreso de Pérdida</button></li>
					<li><div style="background-color: #AAA; width:1px; height: 30px;"></div></li>
					<?php } ?>	
					<li><a href="#modal-filtro" data-toggle="modal"><i class="fa fa-filter fa-3x"></i></a></li>
					<li><div style="background-color: #AAA; width:1px; height: 30px;"></div></li>
					<li><a href="#" onclick="window.print()"><i class="fa fa-print fa-3x"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- modal ingreso -->
	<?php if($data['rol'] < 3 ){ ?>	
	<div class="modal fade" id="modal-ingreso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Ingreso de Pérdida en Playa</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="<?= base_url(); ?>perdidaPlaya/ingreso" method="POST" data-parsley-validate="true">	
						<div class="form-group">
							<label class="col-md-3 control-label ui-sortable">Fecha</label>
							<div class="col-md-9 ui-sortable">
								<div class="input-group date" id="datepicker-autoClose" data-date-format="dd-mm-yyyy" >
									<input id="inputFechaPerdida" name="inputFechaPerdida" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								</div>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-3 control-label ui-sortable">Medida</label>
							<div class="col-md-9 ui-sortable">
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
									<option value="74">7.4</option>											
									<option value="76">7.6</option>											
									<option value="78">7.8</option>											
									<option value="80">8.0</option>											
									<option value="82">8.2</option>		
								</select>
							</div>			
						</div>			
						<div class="form-group">
							<label class="col-md-3 control-label ui-sortable">Cantidad</label>
							<div class="col-md-9 ui-sortable">			
								<input type="text" placeholder="Cantidad" class="form-control" name="inputCantidad" id="inputCantidad" data-parsley-required="true" data-parsley-type="number"/>			
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-9 col-md-offset-3 ui-sortable">
								<button type="submit" class="btn btn-sm btn-primary">Registrar</button>
							</div>
						</div>
					</form>					
				</div>				
			</div>
		</div>
	</div>
	<?php } ?>	


	<!-- #modal-filtro -->
	<div class="modal fade" id="modal-filtro">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Filtro</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="<?= base_url(); ?>perdidaPlaya" method="POST" data-parsley-validate="true">
						<div class="form-group">
							<label class="col-md-3 control-label ui-sortable">Mes</label>
							<div class="col-md-9 ui-sortable">
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
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label ui-sortable">Año</label>
							<div class="col-md-9 ui-sortable">
								<input type="text" size="4" placeholder="Año" maxlength="4" class="form-control" name="inputAnio" id="inputAnio" data-parsley-required="true" data-parsley-range="[1900,2050]"/>			
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-9 col-md-offset-3 ui-sortable">
								<button type="submit" class="btn btn-sm btn-primary m-r-5">Filtrar</button>
							</div>
						</div>						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal-filtro -->	
	
	<div class="row">
		<div class="col-md-2 col-sm-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon"><i class="fa fa-toggle-down"></i></div>
				<div class="stats-info">
					<h4>Pérdida Playa</h4>
					<p><?=$widgetPerdida?>m</p>	
				</div>
				<div class="stats-link"><a href="#">&nbsp;</a>
				</div>
			</div>
		</div>
		<div class="col-md-10 col-sm-6">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Resumen</h4>
				</div>
				<div class="panel-body">
					<div id="interactive-chart" class="height-sm"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Pérdida Mensual en Playa</h4>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped text-center">
					<thead>
						<tr>
							<th>Día</th>							
							<?php
								for ($j = 10; $j < 83; $j++) {
									if($j % 2 == 0 || $j % 5 == 0){
										echo "<th>".number_format(($j/10),1)."</th>";
									}
								}
							?>							
						</tr>
					</thead>
					<tbody>
						<?php 
							for ($i = 1; $i < $diasmes; $i++) {
								$s = "";
								$s = $s."<tr><td>".$i."</td>";
								for ($j = 10; $j < 83; $j++) {
									if($j % 2 == 0 || $j % 5 == 0){
										$band = FALSE;
										for ($k=0; $k < sizeof($tabla); $k++) { 
											if($tabla[$k]->dia == $i && $tabla[$k]->medida == $j) {
												if($tabla[$k]->cant == 0)
													$s = $s."<td>".$tabla[$k]->cant."</td>";
												else
													$s = $s."<td class='bred'>".$tabla[$k]->cant."</td>";
												$band = TRUE;
											}											
										}
										if($band == FALSE)
											$s = $s."<td>0</td>";
									}	
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
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Histótico Perdida Playa</h4>
		</div>
		<div class="panel-body">
			<div class="panel-body">
				<table id="data-table2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nº</th>
								<th>Fecha Registro</th>								
								<th>Medida</th>								
								<th>Cantidad</th>								
								<?php if($data['rol']==1): ?>							
									<th>Eliminar</th>
								<?php endif; ?>													
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach ($historico as $perdida) 
							{
								$fechaR = new DateTime($perdida->fecha);
								
								echo "<tr id='".$perdida->id_perdida."'>";
								echo "<td>".$perdida->id_perdida."</td>";
								echo "<td>".date_format($fechaR,'d-m-Y')."</td>";								
								echo "<td>".number_format(($perdida->medida/10),1)."</td>";
								echo "<td>".$perdida->cantidad."</td>";
								if($data['rol']==1)
								{
									echo "<td class='accion'>
										<a class='btn btn-danger btn-icon btn-circle btn-sm btn-delete'><i class='fa fa-times'></i></a> 
									</td>";
								}
								echo "</tr>";
							}
						?>							
						</tbody>
					</table>
				
			</div>
		</div>                
	</div>


</div>
<!-- end #content -->

<!-- modal delete -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modal_delete">
   <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar Pérdida</h4>
      </div>
      <div class="modal-body">
        ¿Está seguro que desea eliminar la pérdida?
      </div>
      <div class="modal-footer">
        <form method="POST" action="<?=base_url()?>perdidaPlaya/eliminar">
        	<input type="hidden" name="id_perdida" id="id_perdida">
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
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.stack.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.categories.js"></script>
<script src="<?= base_url(); ?>assets/plugins/sparkline/jquery.sparkline.js"></script>
<script src="<?= base_url(); ?>assets/js/dashboard.porpagina.js"></script>

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
		Dashboard.init();

		//cambio el item activo en el sidebar
		$("#ULsidebar > li").removeClass("active");
		$("#LIperdida").addClass("active");$("#LIenplaya").addClass("active");
		
		//Completar los input con la fecha actual
		d = new Date(); 
		mes = (d.getMonth()+1);
		if(mes < 10) mes = "0"+mes;
		currentDay = d.getDate()+"-"+mes+"-"+ d.getFullYear();
		$("#inputFechaPerdida").attr("value",currentDay);
		$('#inputAnio').attr("value",d.getFullYear());
		$('#selectMes').attr("value",d.getMonth()+1);	

		if(<?=$mensaje;?>== 1) alert('Registrado con exito');	

		acciones();

		$("ul.pagination").click(function(){
			acciones();
		});
	});

	function acciones()
	{
		<?php if($data['rol']==1): ?>
			$(".btn-delete").click(function(){
				$("#id_perdida").val($(this).parent().parent().attr("id"));
				$('#modal_delete').modal('show');
			});

			$('#modal_delete').on('hidden.bs.modal', function (){ $("#id_perdida").val(""); });

			
		<?php endif; ?>	
	}
</script>	
</body>
</html>