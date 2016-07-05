<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />

<!-- begin #content -->
<div id="content" class="content">	
	<div class="row">   
		<?php if($data['rol'] < 3 ){ ?> 	
    	<div class="col-md-6">		
    		<!--
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
			-->
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
								<button type="submit" id="registrarIngreso" class="btn btn-primary">Registrar</button>
							</div>
						</div>
					</form>					
				</div>
			</div>
			<?php if($data['rol']==1){ ?>
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Stock Cemento:</h4>
				</div>
				<div class="panel-body panel-form">
					<br>
					<h4 class="text-center">Silo 1</h4>
					<h5 class="text-center">Stock Actual: <?=$stockActual1?> Kg</h5>					
					<h5 class="text-center"><?=number_format((($stockActual1*100)/70000),2)."%"?> en Silo</h5>					
					<hr>
					<form action="<?= base_url(); ?>cemento/stock_real/1" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputCantidadIngreso">Stock Real:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8 input-group">
								<input class="form-control inputNumerico" type="text" id="inputCantidadIngreso" name="inputCantidadIngreso" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true" data-parsley-min="0" data-parsley-max="70000"/>
								<span class="input-group-addon">Kg</span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4"></label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<button type="submit" class="btn btn-primary">Registrar</button>
							</div>
						</div>
					</form>	
					<br><hr><br>
					<h4 class="text-center">Silo 2</h4>
					<h5 class="text-center">Stock Actual: <?=$stockActual2?> Kg</h5>					
					<h5 class="text-center"><?=number_format((($stockActual2*100)/70000),2)."%"?> en Silo</h5>					
					<hr>
					<form action="<?= base_url(); ?>cemento/stock_real/2" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputCantidadIngreso">Stock Real:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8 input-group">
								<input class="form-control inputNumerico" type="text" id="inputCantidadIngreso" name="inputCantidadIngreso" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true" data-parsley-min="0" data-parsley-max="70000" />
								<span class="input-group-addon">Kg</span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4"></label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<button type="submit" class="btn btn-primary">Registrar</button>								
							</div>
						</div>
					</form>	
					<br><hr><br>
					<h4 class="text-center">Silo 3</h4>
					<h5 class="text-center">Stock Actual: <?=$stockActual3?> Kg</h5>					
					<h5 class="text-center"><?=number_format((($stockActual3*100)/70000),2)."%"?> en Silo</h5>					
					<hr>
					<form action="<?= base_url(); ?>cemento/stock_real/3" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputCantidadIngreso">Stock Real:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8 input-group">
								<input class="form-control inputNumerico" type="text" id="inputCantidadIngreso" name="inputCantidadIngreso" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true" data-parsley-min="0" data-parsley-max="70000"/>
								<span class="input-group-addon">Kg</span>
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
			<?php } ?>
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
									<?php if($data['rol']==1): ?>							
										<th>Accion</th>
									<?php endif; ?>	
								</tr>
							</thead>
							<tbody>
								<?php									
									foreach ($tabla as $row)
									{
										echo "<tr data-silo='"; if(isset($row->id_silo)) echo $row->id_silo; echo "' data-ingreso='"; if(isset($row->id_ingreso)) echo $row->id_ingreso; echo "'>";			
										echo "<td>".$row->dia."</td>";
										echo "<td class='silo' data-silo='"; if(isset($row->id_silo)) echo $row->id_silo; echo "'>"; if(isset($row->nombre)) echo $row->nombre; echo "</td>";
										echo "<td class='factura'>"; if(isset($row->nro_factura)) echo $row->nro_factura; echo "</td>";
										echo "<td class='kgo'>"; if(isset($row->kg_origen)) echo $row->kg_origen; echo "</td>";
										echo "<td class='kgd'>"; if(isset($row->kg_fabrica)) echo $row->kg_fabrica; echo "</td>";
										echo "<td>"; if(isset($row->dif)) echo $row->dif; echo "</td>";
										echo "<td>"; if(isset($row->consumo)) echo $row->consumo; echo "</td>";
										if($data['rol']==1 && (isset($row->id_silo)) )
										{
											echo "<td data-precio='"; echo $row->precio; echo "'>";
											echo "<a class='btn btn-warning btn-icon btn-circle btn-sm btn-edit'><i class='fa fa-pencil'></i></a>
												<a class='btn btn-danger btn-icon btn-circle btn-sm btn-delete'><i class='fa fa-times'></i></a>
											</td>";
										}
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
		<!-- end tabla -->
	</div>
</div>
<!-- end #content -->

<!-- modal delete -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modal_delete">
   <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar ingreso</h4>
      </div>
      <div class="modal-body">
        ¿Está seguro que desea eliminar el ingreso?
      </div>
      <div class="modal-footer">
        <form method="POST" action="<?=base_url()?>cemento/eliminar">
        	<input type="hidden" name="silo" id="silo">
        	<input type="hidden" name="ingreso" id="ingreso">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        	<button type="submit" class="btn btn-primary">Aceptar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal delete -->

<!-- modal edit -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modal_edit">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Eliminar ingreso</h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url(); ?>cemento/editar" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
					<input type="hidden" name="id_silo" id="id_silo">
					<input type="hidden" name="id_ingreso" id="id_ingreso">
					<div class="form-group">
						<label class="control-label col-xs-4" for="selectSiloIngreso_edit">Silo:</label>
						<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
							<select class="form-control" id="selectSiloIngreso_edit" name="selectSiloIngreso_edit" data-parsley-required="true" disabled>											
								<option value="">Seleccione</option>
								<?php foreach ($silos as $silo) {
									echo '<option value="'.$silo->id_silo.'">'.$silo->nombre.'</option>';
								} ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputFechaIngreso2">Fecha:</label>
						<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
							<div class="input-group date" id="datepicker-autoClose3" data-date-format="dd-mm-yyyy" >
								<input id="inputFechaIngreso2" name="inputFechaIngreso2" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputNroFactura_edit">Nro Factura:</label>
						<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
							<input class="form-control" type="text" id="inputNroFactura_edit" name="inputNroFactura_edit" placeholder="Número Factura" data-parsley-required="true"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputKgOrigen_edit">Kg Origen:</label>
						<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
							<input class="form-control inputNumerico" type="text" id="inputKgOrigen_edit" name="inputKgOrigen_edit" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputKgFabrica_edit">Kg Fábrica:</label>
						<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
							<input class="form-control inputNumerico" type="text" id="inputKgFabrica_edit" name="inputKgFabrica_edit" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputPrecio_edit">Precio:</label>
						<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
							<input class="form-control inputNumerico" type="text" id="inputPrecio_edit" name="inputPrecio_edit" data-parsley-type="number" placeholder="Precio" data-parsley-required="true"/>
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
</div>
<!-- end modal edit -->
		
	
<?php $this->load->view('view_scripts') ?>

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url(); ?>assets/js/form-plugins.js"></script>
<script src="<?= base_url(); ?>assets/plugins/parsley/dist/parsley.js"></script>
<script src="<?= base_url(); ?>assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="<?= base_url(); ?>assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
	
<script>
	$(document).ready(function() {

		/*[Start_control_ingreso_cemento]*/
		$('#registrarIngreso').attr('disabled', 'disabled');;
		$('#selectSiloIngreso').on('change', function(event) {
			var valor = $('#selectSiloIngreso').val()
			switch (valor) {
				case "1":
					 if( <?php echo(number_format((($stockActual1*100)/70000),2)) ?> > 90){
					 	alert('Stock en Silo 1 mayor a 90%')
					 }
					break;
				case "2":
					if( <?php echo(number_format((($stockActual2*100)/70000),2)) ?> > 90){
					 	alert('Stock en Silo 2 mayor a 90%')
					 }
					break;
				case "3":
					if( <?php echo(number_format((($stockActual3*100)/70000),2)) ?> > 90){
					 	alert('Stock en Silo 3 mayor a 90%')
					 }
					break;
				default:
					// statements_def
					break;
			}
			
		});
		$('#inputKgFabrica').on('change', function(event) {
			var silo = $('#selectSiloIngreso').val()
			switch (silo) {
				case "1":
					 if( (<?php echo(number_format((($stockActual1*100)/70000),2)) ?> + 
					 			parseInt($('#inputKgFabrica').val())*100/70000)  > 100){
					 	alert('Error: stock del Silo 1 mayor a 100%')
					 }else{
					 	$('#registrarIngreso').removeAttr('disabled'); //Enable
					 }
					break;
				case "2":
					if( (<?php echo(number_format((($stockActual2*100)/70000),2)) ?> + 
					 			parseInt($('#inputKgFabrica').val())*100/70000)  > 100){
					 	alert('Error: stock del Silo 1 mayor a 100%')
					 }else{
					 	$('#registrarIngreso').removeAttr('disabled'); //Enable
					 }
					break;
				case "3":
					if( (<?php echo(number_format((($stockActual3*100)/70000),2)) ?> + 
					 			parseInt($('#inputKgFabrica').val())*100/70000)  > 100){
					 	alert('Error: stock del Silo 1 mayor a 100%')
					 }else{
					 	$('#registrarIngreso').removeAttr('disabled'); //Enable
					 }
					break;
				default:
					// statements_def
					break;
			}
			
		});
		/*[End_control_ingreso_cemento]*/
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
		$("#inputFechaIngreso2").attr("value",currentDay);
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

		if(<?=$mensaje;?>== 1){
			$.gritter.add({
	            title: "Exito",
	            text: "Registrado con exito"
	        });
		} 
		if(<?=$mensaje;?>== 2){
			$.gritter.add({
	            title: "Error",
	            text: "Error al guardar"
	        });
		} 

		<?php if($data['rol']==1): ?>
			$(".btn-delete").click(function(){
				$("#silo").val($(this).parent().parent().data("silo"));
				$("#ingreso").val($(this).parent().parent().data("ingreso"));
				$('#modal_delete').modal('show');
			});

			$('#modal_delete').on('hidden.bs.modal', function (){ $("#silo").val(""); $("#ingreso").val(""); });

			$(".btn-edit").click(function(){
				var padre = $(this).parent().parent();
				$("#id_silo").val(padre.data("silo"));
				$("#id_ingreso").val(padre.data("ingreso"));
				
				$("#inputNroFactura_edit").val(padre.children(".factura").text());
				$("#inputKgOrigen_edit").val(padre.children(".kgo").text());
				$("#inputKgFabrica_edit").val(padre.children(".kgd").text());
				$("#inputPrecio_edit").val($(this).parent().data("precio"));
				
				var id_silo = padre.children(".silo").data("silo");
				$("#selectSiloIngreso_edit").val(id_silo);

				$('#modal_edit').modal('show');
			});

			$('#modal_edit').on('hidden.bs.modal', function (){ 
				$("#id_silo").val(""); 
				$("#id_ingreso").val(""); 
				$("#inputKgOrigen_edit").val("");
				$("#inputKgFabrica_edit").val("");
				$("#inputPrecio_edit").val("");
				$("#selectSiloIngreso_edit").val("");
			});
		<?php endif; ?>		
	});
</script>	
</body>
</html>