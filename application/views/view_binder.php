<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />

<!-- begin #content -->
<div id="content" class="content">	
	<div class="row">
    	
    	<div class="col-md-6">		
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Egreso Binder</h4>
				</div>
				<div class="panel-body panel-form">
					<form class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputFechaEgreso">Fecha:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<div class="input-group date" id="datepicker-autoClose" data-date-format="dd-mm-yyyy" >
									<input id="inputFechaEgreso" name="inputFechaEgreso" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputConsumo">Consumo:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<input class="form-control inputNumerico" type="text" id="inputConsumo" name="inputConsumo" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4"></label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<button type="submit" class="btn btn-primary">Registrar</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Ingreso Binder</h4>
				</div>
				<div class="panel-body panel-form">					
					<form class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="selectProveedorEgreso">Proveedor:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<select class="form-control" id="selectProveedorEgreso" name="selectProveedorEgreso" data-parsley-required="true">											
									<option value="">Seleccione</option>
									<option value="1">Proveedor A</option>
									<option value="2">Proveedor B</option>
									<option value="3">Proveedor C</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputFechaEgreso">Fecha:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<div class="input-group date" id="datepicker-autoClose2" data-date-format="dd-mm-yyyy" >
									<input id="inputFechaEgreso" name="inputFechaEgreso" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputNroFactura">Nro Remito:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<input class="form-control" type="text" id="inputNroFactura" name="inputNroFactura" placeholder="Número Factura" data-parsley-required="true"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputCantidadIngreso">Cantidad:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<input class="form-control inputNumerico" type="text" id="inputCantidadIngreso" name="inputCantidadIngreso" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
							</div>
						</div>						
						<div class="form-group">
							<label class="control-label col-xs-4"></label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<button type="submit" class="btn btn-primary">Registrar</button>
							</div>
						</div>
					</form>					
				</div>
			</div>
		</div>

		<!-- begin tabla -->	
		<div class="col-md-6">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Conrtol Mensual</h4>
				</div>
				<div class="panel-body">
					<form class="form-inline text-center" action="" method="POST" data-parsley-validate="true">						
						<div class="form-group m-r-10">
							<select class="form-control" name="selectMes" id="selectMes">
								<option value="0">Enero</option>
								<option value="1">Febrero</option>
								<option value="2">Marzo</option>
								<option value="3">Abril</option>
								<option value="4">Mayo</option>
								<option value="5">Junio</option>
								<option value="6">Julio</option>
								<option value="7">Agosto</option>
								<option value="8">Septiembre</option>
								<option value="9">Octubre</option>
								<option value="10">Noviembre</option>
								<option value="11">Diciembre</option>
							</select>
						</div>
						<div class="form-group m-r-10">			
							<input type="text" size="4" placeholder="Año" maxlength="4" class="form-control" name="inputAnio" id="inputAnio" data-parsley-required="true" data-parsley-range="[1900,2050]"/>			
						</div>
						<div class="form-group m-r-10">
							<select class="form-control" name="selectProveedorTabla">
								<option value="0">Todos</option>
								<option value="1">Proveedor A</option>
								<option value="2">Proveedor B</option>
								<option value="3">Proveedor C</option>
							</select>
						</div>
						<button type="submit" class="btn btn-sm btn-primary m-r-5" style="margin-top: -5px;">Buscar</button>
					</form>
					<hr>
					<h3 class="text-center">Enero 2015</h3>
					<div class="table-responsive">
						<table class="table table-striped text-center">
							<thead>
								<tr>
									<th>Día</th>
									<th>Proveedor</th>
									<th>Remito</th>
									<th>Cantidad</th>									
									<th>Consumo</th>									
								</tr>
							</thead>
							<tbody>
								<script type="text/javascript">
									for (var i = 1; i < 25; i++) {
										document.write("<tr><td>"+i+"</td><td>Proveedor</td><td>2125</td><td>235,4</td><td>-</td></tr>");
										if(i==3 || i==8 || i==16)
											document.write("<tr><td>"+i+"</td><td>-</td><td>-</td><td>-</td><td>405</td></tr>");
									};
								</script>											
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- end tabla -->
	</div>
</div>
<!-- end #content -->
		
	
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
		$("#LImateria").addClass("active");$("#LIbinder").addClass("active");
		
		//Completar los input con la fecha actual
		d = new Date(); 
		mes = (d.getMonth()+1);
		if(mes < 10) mes = "0"+mes;
		currentDay = d.getDate()+"-"+mes+"-"+ d.getFullYear();
		$("#inputFechaIngreso").attr("value",currentDay);
		$("#inputFechaEgreso").attr("value",currentDay);
		$('#inputAnio').attr("value",d.getFullYear());
		$('#selectMes').attr("value",d.getMonth());
		
		//Reemplazar comas por puntos en los campos numericos
		$(".inputNumerico").keyup(function(event) {
  			if ( event.which == 188 ){ 
  				t = $(this).val();  			
  				t = t.replace(",", ".");  			
  				$(this).val(t);
  			}			
		});
	});
</script>	
</body>
</html>