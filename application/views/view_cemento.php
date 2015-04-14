<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />

<!-- begin #content -->
<div id="content" class="content">	
	<div class="row">   
		<?php if($data['rol'] < 3 ){ ?> 	
    	<div class="col-md-6">		
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Egreso Cemento</h4>
				</div>
				<div class="panel-body panel-form">
					<form action="<?= base_url(); ?>cemento/egreso" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="selectSiloEgreso">Silo:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<select class="form-control" id="selectSiloEgreso" name="selectSiloEgreso" data-parsley-required="true">											
                                    <option value="">Seleccione</option>
                                    <?php foreach ($silos as $silo) {
										echo '<option value="'.$silo->id_silo.'">'.$silo->nombre.'</option>';
									} ?>									
                                </select>
							</div>
						</div>
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
					<h4 class="panel-title">Ingreso Cemento</h4>
				</div>
				<div class="panel-body panel-form">					
					<form action="<?= base_url(); ?>cemento/ingreso" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="selectSiloIngreso">Silo:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<select class="form-control" id="selectSiloIngreso" name="selectSiloIngreso" data-parsley-required="true">											
									<option value="">Seleccione</option>
									<?php foreach ($silos as $silo) {
										echo '<option value="'.$silo->id_silo.'">'.$silo->nombre.'</option>';
									} ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputFechaIngreso">Fecha:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<div class="input-group date" id="datepicker-autoClose2" data-date-format="dd-mm-yyyy" >
									<input id="inputFechaIngreso" name="inputFechaIngreso" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputNroFactura">Nro Factura:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<input class="form-control" type="text" id="inputNroFactura" name="inputNroFactura" placeholder="Número Factura" data-parsley-required="true"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputKgOrigen">Kg Origen:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<input class="form-control inputNumerico" type="text" id="inputKgOrigen" name="inputKgOrigen" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputKgFabrica">Kg Fábrica:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<input class="form-control inputNumerico" type="text" id="inputKgFabrica" name="inputKgFabrica" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputPrecio">Precio:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<input class="form-control inputNumerico" type="text" id="inputPrecio" name="inputPrecio" data-parsley-type="number" placeholder="Precio" data-parsley-required="true"/>
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
			<?php }  else echo("<div class='col-md-12'>"); ?>
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Control Mensual</h4>
				</div>
				<div class="panel-body">
					<form action="<?= base_url(); ?>cemento" method="POST" class="form-inline text-center" action="" method="POST" data-parsley-validate="true">						
						<div class="form-group m-r-10">
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
						<div class="form-group m-r-10">			
							<input type="text" size="4" placeholder="Año" maxlength="4" class="form-control" name="inputAnio" id="inputAnio" data-parsley-required="true" data-parsley-range="[1900,2050]"/>			
						</div>
						<div class="form-group m-r-10">
							<select class="form-control" name="selectSiloTabla">
								<?php foreach ($silos as $silo) {
										echo '<option value="'.$silo->id_silo.'">'.$silo->nombre.'</option>';
								} ?>
							</select>
						</div>
						<button type="submit" class="btn btn-sm btn-primary m-r-5" style="margin-top: -5px;">Buscar</button>
					</form>
					<hr>
					<h3 class="text-center"><?=$mes." ".$anio;?></h3>
					<div class="table-responsive">
						<table class="table table-striped text-center">
							<thead>
								<tr>
									<th>Día</th>
									<th>Silo</th>
									<th>Factura</th>
									<th>Kg Ori</th>
									<th>Kg Fab</th>
									<th>Dif</th>
									<th>Consumo</th>
								</tr>
							</thead>
							<tbody>
								<?php									
									foreach ($tabla as $row)
									{
										echo "<tr>";
										echo "<td>".$row->dia."</td>";
										echo "<td>"; if(isset($row->nombre)) echo $row->nombre; echo "</td>";
										echo "<td>"; if(isset($row->nro_factura)) echo $row->nro_factura; echo "</td>";
										echo "<td>"; if(isset($row->kg_origen)) echo $row->kg_origen; echo "</td>";
										echo "<td>"; if(isset($row->kg_fabrica)) echo $row->kg_fabrica; echo "</td>";
										echo "<td>"; if(isset($row->dif)) echo $row->dif; echo "</td>";
										echo "<td>"; if(isset($row->consumo)) echo $row->consumo; echo "</td>";
										echo "</tr>";
									} 
								?>												
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
		$("#LImateria").addClass("active");$("#LIcemento").addClass("active");
		
		//Completar los input con la fecha actual
		d = new Date(); 
		mes = (d.getMonth()+1);
		if(mes < 10) mes = "0"+mes;
		currentDay = d.getDate()+"-"+mes+"-"+ d.getFullYear();
		$("#inputFechaIngreso").attr("value",currentDay);
		$("#inputFechaEgreso").attr("value",currentDay);
		$('#inputAnio').attr("value",d.getFullYear());
		$('#selectMes').attr("value",d.getMonth()+1);
		
		//Reemplazar comas por puntos en los campos numericos
		$(".inputNumerico").keyup(function(event) {
  			if ( event.which == 188 ){ 
  				t = $(this).val();  			
  				t = t.replace(",", ".");  			
  				$(this).val(t);
  			}			
		});

		if(<?=$mensaje;?>== 1) alert('Registrado con exito');
		if(<?=$mensaje;?>== 2) alert('Error');
	});
</script>	
</body>
</html>