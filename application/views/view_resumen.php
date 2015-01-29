<!-- begin #content -->
<div id="content" class="content">			
	<div class="row">
		<div class="col-md-3 col-sm-6 ui-sortable">
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
		<div class="col-md-3 col-sm-6">
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
					<h4>Pérdida</h4>
					<p>1624</p>	
				</div>
				<div class="stats-link">
					<a href="<?= base_url(); ?>perdidaPlaya">Detalle <i class="fa fa-arrow-circle-o-right"></i></a>
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
								<td><div id="sparkline-unique-visitor"></div></td>
							</tr>
							<tr>
								<td><label class="label label-warning">Arena</label></td>
								<td>21,181</td>
								<td><div id="sparkline-bounce-rate"></div></td>
							</tr>
							<tr>
								<td><label class="label label-success">Binder</label></td>
								<td>10,030</td>
								<td><div id="sparkline-total-page-views"></div></td>
							</tr>
							<tr>
								<td><label class="label label-primary">Acero</label></td>
								<td>12,187</td>
								<td><div id="sparkline-avg-time-on-site"></div></td>
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
<script src="<?= base_url(); ?>assets/plugins/sparkline/jquery.sparkline.js"></script>
<script src="<?= base_url(); ?>assets/js/dashboard.min.js"></script>
<script src="<?= base_url(); ?>assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
	
<script>
	$(document).ready(function() {
		App.init();
		Dashboard.init();			
	});
</script>	
</body>
</html>