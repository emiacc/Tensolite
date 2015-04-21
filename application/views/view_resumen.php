<!-- begin #content -->
<?php 

	//grafico resumen
	$max = 0;
	$min = 9999999;
	$tot = count($resumenProduccion);
	$i = 0;
	echo "<script>var resProd = [";
	foreach ($resumenProduccion as $value) {
		if($value->cant < $min) $min = $value->cant;
		if($value->cant > $max) $max = $value->cant;
		$i++;
		if($i <> $tot)
			echo "[".$value->diaY.",".$value->cant."],";
		else
			echo "[".$value->diaY.",".$value->cant."]";
	}
	$tot = count($resumenDespacho);
	$i = 0;
	echo "]; var resDesp = [";
	foreach ($resumenDespacho as $value) {
		if($value->cant < $min) $min = $value->cant;
		if($value->cant > $max) $max = $value->cant;
		$i++;
		if($i <> $tot)
			echo "[".$value->diaY.",".$value->cant."],";
		else
			echo "[".$value->diaY.",".$value->cant."]";
	}
	
	echo "]; var resMin= ".$min."; var resMax = ".$max.";</script>";

	//grafico produccion
	$tot = count($produccionProd);
	$i = 0;
	echo "<script>var produProd = [";
	foreach ($produccionProd as $value) {
		$i++;
		if($i <> $tot)
			echo "[".$value->semana.",".$value->cant."],";
		else
			echo "[".$value->semana.",".$value->cant."]";
	}
	echo "]; var produRecu = [";
	$tot = count($produccionRecu);
	$i = 0;
	foreach ($produccionRecu as $value) {
		$i++;
		if($i <> $tot)
			echo "[".$value->semana.",".$value->cant."],";
		else
			echo "[".$value->semana.",".$value->cant."]";
	}
	echo "]; </script>";

	//grafico cemento por silo
	echo '<script>var stockSilos = [["Silo A",'.$stockSilos[0].'],["Silo B",'.$stockSilos[1].'],["Silo C",'.$stockSilos[2].']];</script>';	
?>
<div id="content" class="content">	
	<div class="row no-print">
		<div class="panel panel-inverse">				
			<div class="panel-body">
				<div class="pull-left"><h2 id="mes-filtro" style="margin:0;"><?=$periodo;?></h2></div>
				<ul class="list-inline pull-right" style="margin:0;">
					<li><a href="#modal-filtro" data-toggle="modal"><i class="fa fa-filter fa-3x"></i></a></li>
					<li><div style="background-color: #AAA; width:1px; height: 30px;"></div></li>
					<li><a href="#" onclick="window.print()"><i class="fa fa-print fa-3x"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- #modal-filtro -->
	<div class="modal fade" id="modal-filtro">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Modal Dialog</h4>
				</div>
				<div class="modal-body">
					<div class="radio">
						<label>
					    	<input type="radio" name="filtroRadio" id="radioMes" value="radioMes" checked>
					    	Filtrar por mes
					  	</label>
					</div>
					<form id="form-mes" class="form-horizontal" action="<?= base_url(); ?>resumen/index" method="POST">
						<fieldset>
							<div class="form-group">
								<label class="col-md-3 control-label ui-sortable">Mes</label>
								<div class="col-md-9 ui-sortable">
									<select name="mes-filtro" class="form-control">
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
									<input name="anio-filtro" type="number" class="form-control" placeholder="Año" value="2015" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-9 col-md-offset-3 ui-sortable">
									<button type="submit" class="btn btn-sm btn-primary m-r-5">Filtrar</button>
								</div>
							</div>
						</fieldset>
					</form>
					<div class="radio">
						<label>
					    	<input type="radio" name="filtroRadio" id="radioPeriodo" value="radioPeriodo">
					    	Filtrar por periodo
					  	</label>
					</div>
					<form id="form-periodo" class="form-horizontal" action="<?= base_url(); ?>resumen/filtroPeriodo" method="POST">
						<fieldset disabled>
							<div class="form-group">
								<label class="col-md-3 control-label ui-sortable">Desde</label>
								<div class="col-md-9 ui-sortable">
									<select name="mes-desde" class="form-control">
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
									<input name="anio-desde" type="number" class="form-control" placeholder="Año" value="2015" required>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<label class="col-md-3 control-label ui-sortable">Hasta</label>
								<div class="col-md-9 ui-sortable">
									<select name="mes-hasta" class="form-control">
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
									<input name="anio-hasta" type="number" class="form-control" placeholder="Año" value="2015" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-9 col-md-offset-3 ui-sortable">
									<button type="submit" class="btn btn-sm btn-primary m-r-5">Filtrar</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- modal-filtro -->		
	<div class="row no-print">
		<div class="col-md-2 col-sm-6 ui-sortable">
			<div class="widget widget-stats bg-green">
				<div class="stats-icon"><i class="fa fa-cubes"></i></div>
				<div class="stats-info">
					<h4>Stock</h4>
					<p>3219</p>	
				</div>
				<div class="stats-link">
					<a href="<?= base_url(); ?>cemento">Detalle <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-2 col-sm-6">
			<div class="widget widget-stats bg-blue">
				<div class="stats-icon"><i class="fa fa-cogs"></i></div>
				<div class="stats-info">
					<h4>Producción</h4>
					<p>4506</p>	
				</div>
				<div class="stats-link">
					<a href="<?= base_url(); ?>produccion">Detalle <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>				
		<div class="col-md-2 col-sm-6">
			<div class="widget widget-stats bg-purple">
				<div class="stats-icon"><i class="fa fa-truck"></i></div>
				<div class="stats-info">
					<h4>Despacho</h4>
					<p>1485</p>	
				</div>
				<div class="stats-link">
					<a href="<?= base_url(); ?>despacho">Detalle <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>				
		<div class="col-md-2 col-sm-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon"><i class="fa fa-toggle-down"></i></div>
				<div class="stats-info">
					<h4>Pérdida Playa</h4>
					<p>1624</p>	
				</div>
				<div class="stats-link">
					<a href="<?= base_url(); ?>perdidaPlaya">Detalle <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-2 col-sm-6">
			<div class="widget widget-stats bg-orange">
				<div class="stats-icon"><i class="fa fa-toggle-down"></i></div>
				<div class="stats-info">
					<h4>Pérdida Producción</h4>
					<p>1624</p>	
				</div>
				<div class="stats-link">
					<a href="<?= base_url(); ?>perdidaProduccion">Detalle <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-2 col-sm-6">
			<div class="widget widget-stats bg-black">
				<div class="stats-icon"><i class="fa fa-refresh"></i></div>
				<div class="stats-info">
					<h4>Recupero</h4>
					<p>1211</p>	
				</div>
				<div class="stats-link">
					<a href="<?= base_url(); ?>recuperacion">Detalle <i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">

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

			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Producción</h4>
				</div>
				<div class="panel-body">
					<div id="stacked-chart" class="height-sm"></div>
				</div>
			</div>	

			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Despacho Mensual</h4>
				</div>
				<div class="panel-body">
					<div id="interactive-chart2" class="height-sm"></div>
				</div>
			</div>

		</div>
		<div class="col-md-4">			
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Consumo de Materia Prima</h4>
				</div>
				<div class="panel-body p-t-0">
					<table class="table table-valign-middle m-b-0">
						<thead>
							<tr>	
								<th>Source</th>
								<th>Total</th>
								<th>Trend</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><label class="label label-danger">Cemento</label></td>
								<td>13,203</td>
								<td><div id="sparkline-cemento"></div></td>
							</tr>
							<tr>
								<td><label class="label label-warning">Arena</label></td>
								<td>21,181</td>
								<td><div id="sparkline-arena"></div></td>
							</tr>
							<tr>
								<td><label class="label label-success">Binder</label></td>
								<td>10,030</td>
								<td><div id="sparkline-binder"></div></td>
							</tr>
							<tr>
								<td><label class="label label-primary">Acelerante</label></td>
								<td>12,187</td>
								<td><div id="sparkline-acelerante"></div></td>
							</tr>
							<tr>
								<td><label class="label label-default">Plastificante</label></td>
								<td>12,187</td>
								<td><div id="sparkline-plastificante"></div></td>
							</tr>
							<tr>
								<td><label class="label label-inverse">Ceniza</label></td>
								<td>12,187</td>
								<td><div id="sparkline-ceniza"></div></td>
							</tr>							
						</tbody>
					</table>
				</div>
			</div>

			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Producción por categoría</h4>
				</div>
				<div class="panel-body">
					<div id="donut-chart" class="height-sm"></div>
				</div>
			</div>	

			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Cemento por Silo</h4>
				</div>
				<div class="panel-body">
					<div id="bar-chart" class="height-sm"></div>
				</div>
			</div>
		</div>
	</div>		
</div>
<!-- end #content -->
		
	
<?php $this->load->view('view_scripts') ?>

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.stack.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/flot/jquery.flot.categories.js"></script>
<script src="<?= base_url(); ?>assets/plugins/sparkline/jquery.sparkline.js"></script>
<script src="<?= base_url(); ?>assets/js/dashboard.min.js"></script>
<script src="<?= base_url(); ?>assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<style>
@media print
{   
	body
	{
		margin-top: -50px !important;
	} 
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
<script>
	$(document).ready(function() {
		App.init();
		Dashboard.init();

		$('input[type=radio][name=filtroRadio]').change(function() {
	        if (this.value == 'radioPeriodo') {
	            $("#form-mes > fieldset").attr("disabled","disabled");
	            $("#form-periodo > fieldset").removeAttr("disabled");
	        }
	        else if (this.value == 'radioMes') {
	            $("#form-periodo > fieldset").attr("disabled","disabled");
	            $("#form-mes > fieldset").removeAttr("disabled");
	        }
	    });

	    $("#form-periodo").click(function(){
	    	$('#radioPeriodo').attr('checked', 'checked');
	    	$("#form-mes > fieldset").attr("disabled","disabled");
	        $("#form-periodo > fieldset").removeAttr("disabled");
	    });
	    $("#form-mes").click(function(){
	    	$('#radioMes').attr('checked', 'checked');
	    	$("#form-periodo > fieldset").attr("disabled","disabled");
	        $("#form-mes > fieldset").removeAttr("disabled");
	    });
	});
</script>

</body>
</html>