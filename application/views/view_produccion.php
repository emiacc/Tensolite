<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/DataTables-1.9.4/css/data-table.css" rel="stylesheet" />
<style type="text/css">
	@media screen and (max-width:2500px){.table-responsive{width:100%;margin-bottom:15px;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}
</style>
<!-- begin #content -->
<div id="content" class="content">
	<?php if($data['rol'] == 1) {/* ?>
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Orden de Fabricacción</h4>
		</div>
		<div class="panel-body">
			<form class="form-inline" action="<?= base_url(); ?>produccion/ingresoOrden" method="POST" data-parsley-validate="true">	
				<div class="form-group m-r-10">
					<div class="input-group date" id="datepicker-autoClose" data-date-format="dd-mm-yyyy" >
						<input id="inputFechaOrden" name="inputFechaOrden" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					</div>
				</div>				
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<select class="form-control" name="selectBanco" id="selectBanco" data-parsley-required="true">
						<option value="">Banco...</option>
						<option value="1">Banco 1</option>
						<option value="2">Banco 2</option>
						<option value="3">Banco 3</option>
						<option value="4">Banco 4</option>
						<option value="5">Banco 5</option>
						<option value="6">Banco 6</option>
						<option value="7">Banco 7</option>
						<option value="8">Banco 8</option>
					</select>
				</div>
				<br>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Confeccionado" class="form-control" name="confeccionado" id="confeccionado"/>			
				</div>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Supervisor" class="form-control" name="supervisor" id="supervisor"/>			
				</div>
				<br>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Medidor-Marcador" class="form-control" name="medidor" id="medidor"/>			
				</div>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Cosechador" class="form-control" name="cosechador" id="cosechador"/>			
				</div>
				<br>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Jefe de Planta" class="form-control" name="jefe" id="jefe"/>			
				</div>
				<div id="items">
					<div id="item">
						<div class="form-group m-r-10" style="margin-top: 5px;">			
							<input type="text" placeholder="Nº Cortes" class="form-control" name="inputCortes[]" id="inputCortes" data-parsley-required="true" data-parsley-type="digits"/>			
						</div>
						<div class="form-group m-r-10" style="margin-top: 5px;">
							<select class="form-control" name="selectMedida[]" id="selectMedida" data-parsley-required="true">
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
						<br>
					</div>
				</div>				
				<div id="mas" style="cursor:pointer;"><i class="fa fa-2x fa-plus-square"></i> Agregar Medida</div>	
				<br>
				<button type="submit" class="btn btn-sm btn-primary m-r-5">Generar</button>			
			</form>
		</div>
	</div>	

	<?php */} ?>	
	<?php if($data['rol'] == 1 || $data['rol'] == 3){/* ?>	
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Ingreso Producción</h4>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-xs-4">
					<div class="height-sm" data-scrollbar="true">
						<ul class="media-list media-list-with-divider">
							<?php foreach($ordenes as $orden): ?>
								<li class="media media-lg">						
									<a href="#" class="orden" data-id="<?=$orden->id_orden?>">
										<div class="media-body">
											<h4 class="media-heading">Nº Orden: <?=$orden->id_orden?></h4>
											Banco: <?=$orden->nro_banco?>. Fecha: <?=date('d-m-Y',strtotime($orden->fecha));?>.
										</div>
									</a>
								</li>
							<?php endforeach; ?>							
						</ul>
					</div>
				</div>
				<div class="col-xs-8" id="formulario">
					<div class="media-body">
						<h4 class="media-heading">Nº Orden: </h4>
						<div id="icop"></div>
					</div>
					<form class="form-inline" action="<?= base_url(); ?>produccion/ingresoUpdate" method="POST" data-parsley-validate="true">	
						<fieldset disabled>
							<input name="id_orden" type="hidden" id="id_orden" value="">
							<div id="producionesItem">
								
							</div>
							<br>
							<div class="form-group m-r-10" style="margin-top: 5px;">
								<select class="form-control" name="selectTurno" id="selectTurno" data-parsley-required="true">
									<option value="">Turno</option>
									<option value="0">Mañana</option>
									<option value="1">Tarde</option>
								</select>
							</div>
							<br>
							<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
								<input type="text" placeholder="Cemento" class="form-control" name="inputCemento" id="inputCemento" data-parsley-required="true" data-parsley-type="number"/>			
								<span class="input-group-addon">Kg</span>
							</div>
							<div class="form-group m-r-10" style="margin-top: 5px;">
								<select class="form-control" name="selectSilo" id="selectSilo" data-parsley-required="true">
									<option value="">Seleccione</option>
			                        <?php foreach ($silos as $silo) {
										echo '<option value="'.$silo->id_silo.'">'.$silo->nombre.'</option>';
									} ?>
								</select>
							</div>
							<br>
							<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
								<input type="text" placeholder="Arena Tipo1" class="form-control" name="inputArena" id="inputArena" data-parsley-required="true" data-parsley-type="number"/>			
								<span class="input-group-addon">Kg</span>
							</div>
							<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
								<input type="text" placeholder="Arena Tipo2" class="form-control" name="inputArena2" id="inputArena2" data-parsley-required="true" data-parsley-type="number"/>			
								<span class="input-group-addon">Kg</span>
							</div>
							<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
								<input type="text" placeholder="Binder" class="form-control" name="inputBinder" id="inputBinder" data-parsley-required="true" data-parsley-type="number"/>			
								<span class="input-group-addon">Kg</span>
							</div>
							<br>
							<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
								<input type="text" placeholder="Triturado" class="form-control" name="inputTriturado" id="inputTriturado" data-parsley-required="true" data-parsley-type="number"/>			
								<span class="input-group-addon">Kg</span>
							</div>
							<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
								<input type="text" placeholder="Acelerante" class="form-control" name="inputAcelerante" id="inputAcelerante" data-parsley-required="true" data-parsley-type="number"/>			
								<span class="input-group-addon">Kg</span>
							</div>
							<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
								<input type="text" placeholder="Plastificante" class="form-control" name="inputPlastificante" id="inputPlastificante" data-parsley-required="true" data-parsley-type="number"/>			
								<span class="input-group-addon">Kg</span>
							</div>
							<br>
							<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
								<input type="text" placeholder="Ceniza" class="form-control" name="inputCeniza" id="inputCeniza" data-parsley-required="true" data-parsley-type="number"/>			
								<span class="input-group-addon">Kg</span>
							</div>
							<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
								<input type="text" placeholder="Agua" class="form-control" name="inputAgua" id="inputAgua" data-parsley-required="true" data-parsley-type="number"/>			
								<span class="input-group-addon">Lt</span>
							</div>
							<button type="submit" class="btn btn-sm btn-primary m-r-5">Registrar</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php */} ?>

	<?php if($data['rol'] == 1 || $data['rol'] == 3){ ?>	
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>				
			</div>
			<h4 class="panel-title">Ordenes de Producción</h4>
		</div>
		<div class="panel-body">
			<a href="#modal-orden" data-toggle="modal" class="btn btn-primary pull-right m-r-25">Generar Orden</a>
			<br><br><br><br><br>
			<div class="table">
					<table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nº Orden</th>
								<th>Fecha Registro</th>
								<th>Banco</th>
								<th>Imprimir</th>	
								<?php if($data['rol']==1): ?>							
								<th>Acciones</th>	
								<?php endif; ?>								
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach ($ordenes as $orden) 
							{
								$fechaR = new DateTime($orden->fecha);
								
								echo "<tr id='".$orden->id_orden."'>";
								echo "<td>".$orden->id_orden."</td>";
								echo "<td>".date_format($fechaR,'d-m-Y')."</td>";								
								echo "<td>".$orden->nro_banco."</td>";
								echo "<td class='imp'>"."<i class='fa fa-print fa-2x'></i>"."</td>";
								if($data['rol']==1){
									echo "<td class='actions'>"."<a class='btn btn-warning btn-icon btn-circle btn-sm btn-edit'><i class='fa fa-pencil'></i></a>
										<a class='btn btn-danger btn-icon btn-circle btn-sm btn-delete'><i class='fa fa-times'></i></a>" ."</td>";
								}
								echo "</tr>";
							}
						?>							
						</tbody>
					</table>
				</div>
		</div>
	</div>
	<?php } ?>
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			</div>
			<h4 class="panel-title">Producción Diaria</h4>
		</div>
		<div class="panel-body">
			<form class="form-inline text-center" action="<?= base_url(); ?>produccion" method="POST" data-parsley-validate="true">						
				<div class="form-group m-r-10">			
					<input type="text" size="2" placeholder="Día" maxlength="2" class="form-control" name="inputDia" id="inputDia" data-parsley-required="true" data-parsley-range="[1,31]"/>			
				</div>
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
				<button type="submit" class="btn btn-sm btn-primary m-r-5" style="margin-top: -5px;">Buscar</button>
			</form>
			<hr>
			<h3 class="text-center"><?=$dia." de ".$mes." ".$anio;?></h3>
			<div class="table-responsive">
				<table class="table table-striped text-center">
					<thead>
						<tr>
							<th>Banco</th>
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
							for ($i = 1; $i < 9; $i++) {
								$s = "";
								$s = $s."<tr><td>".$i."</td>";
								for ($j = 10; $j < 83; $j++) {
									if($j % 2 == 0 || $j % 5 == 0){
										$band = FALSE;
										for ($k=0; $k < sizeof($tabla); $k++) { 
											if($tabla[$k]->nro_banco == $i && $tabla[$k]->medida == $j) {
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
</div>
<!-- end #content -->
		
<!-- #modal-orden -->
	<div class="modal fade" id="modal-orden">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Orden de Fabricación</h4>
				</div>
				<div class="modal-body">
					<form class="form-inline" action="<?= base_url(); ?>produccion/ingresoOrden" method="POST" data-parsley-validate="true">	
				<div class="form-group m-r-10">
					<div class="input-group date" id="datepicker-autoClose" data-date-format="dd-mm-yyyy" >
						<input id="inputFechaOrden" name="inputFechaOrden" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					</div>
				</div>				
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<select class="form-control" name="selectBanco" id="selectBanco" data-parsley-required="true">
						<option value="">Banco...</option>
						<option value="1">Banco 1</option>
						<option value="2">Banco 2</option>
						<option value="3">Banco 3</option>
						<option value="4">Banco 4</option>
						<option value="5">Banco 5</option>
						<option value="6">Banco 6</option>
						<option value="7">Banco 7</option>
						<option value="8">Banco 8</option>
					</select>
				</div>
				<br>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Confeccionado" class="form-control" name="confeccionado" id="confeccionado"/>			
				</div>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Supervisor" class="form-control" name="supervisor" id="supervisor"/>			
				</div>
				<br>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Medidor-Marcador" class="form-control" name="medidor" id="medidor"/>			
				</div>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Cosechador" class="form-control" name="cosechador" id="cosechador"/>			
				</div>
				<br>
				<div class="form-group m-r-10" style="margin-top: 5px;">
					<input type="text" placeholder="Jefe de Planta" class="form-control" name="jefe" id="jefe"/>			
				</div>
				<div id="items">
					<div id="item">
						<div class="form-group m-r-10" style="margin-top: 5px;">			
							<input type="text" placeholder="Nº Cortes" class="form-control" name="inputCortes[]" id="inputCortes" data-parsley-required="true" data-parsley-type="digits"/>			
						</div>
						<div class="form-group m-r-10" style="margin-top: 5px;">
							<select class="form-control" name="selectMedida[]" id="selectMedida" data-parsley-required="true">
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
						<div class="form-group m-r-10" style="margin-top: 5px;">			
							<input type="text" placeholder="Unidades" class="form-control" name="inputUnidades[]" id="inputUnidades" data-parsley-required="true" data-parsley-type="digits"/>			
						</div>
						<br>
					</div>
				</div>				
				<div id="mas" style="cursor:pointer;"><i class="fa fa-2x fa-plus-square"></i> Agregar Medida</div>	
				<br>
				<button type="submit" class="btn btn-sm btn-primary m-r-5">Generar</button>			
			</form>
					
				</div>
			</div>
		</div>
	</div>
<!-- end modal-orden -->	

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
	        <form method="POST" action="<?=base_url()?>produccion/eliminar">
	        	<input type="hidden" name="id_orden" id="id_orden">
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
		var producciones = <?php echo json_encode($producciones); ?>;


		App.init();
		FormPlugins.init();
		//cambio el item activo en el sidebar
		$("#ULsidebar > li").removeClass("active");
		$("#LIproduccion").addClass("active");
		
		//Completar los input con la fecha actual
		d = new Date(); 
		mes = (d.getMonth()+1);
		if(mes < 10) mes = "0"+mes;
		currentDay = d.getDate()+"-"+mes+"-"+ d.getFullYear();
		$("#inputFechaProduccion").attr("value",currentDay);
		$('#inputAnio').attr("value",d.getFullYear());
		$('#selectMes').attr("value",d.getMonth()+1);
		$('#inputDia').attr("value",d.getDate());

		if(<?=$mensaje;?>== 1) alert('Registrado con exito');
		if(<?=$mensaje;?>!= 1 && <?=$mensaje;?>!= 0) alert('Registrado con exito. Nro de orden: '+<?=$mensaje;?>);

		$("#data-table > tbody > tr > td").click(function(){
			if($(this).hasClass("imp"))
				location.href = '<?= base_url(); ?>produccion/imprimir/'+$(this).parent().attr('id');	   
			else if($(this).hasClass("actions"))
				return false;
			else
				location.href = '<?= base_url(); ?>produccion/indexOrden/'+$(this).parent().attr('id');
		});

		/*$('.orden').click(function(){
			var id = $(this).data("id");
			$("#formulario > form > fieldset").removeAttr("disabled");
			$("#formulario > div > h4").html("Nº Orden: "+id);

			$("#icop").html('<a href="http://192.168.1.113/tensolite/produccion/imprimir/'+id+'"><i class="fa fa-print fa-2x"></i></a>')

			$("#id_orden").val(id);

			$("#producionesItem").html('');
			$.each(producciones, function (key, data) {
				if(data.id_orden == id)
				$("#producionesItem").append('<div class="form-group m-r-10" style="margin-top: 5px;"><input name="id_produccion[]" type="hidden" id="id_produccion" value="'+data.id_produccion+'">- Cortes: '+data.cortes+', Medida: '+((data.medida)/10).toFixed(2)+': <input type="text" placeholder="Cantidad" class="form-control" name="inputCantidad[]" id="inputCantidad" data-parsley-required="true" data-parsley-type="digits"/></div>');	
			});

		});*/

		$("#mas").click(function(){			
			$("#items").append($("#item").html());
		});


		<?php if($data['rol']==1): ?>
			$(".btn-delete").click(function(){
				$("#id_orden").val($(this).parent().parent().attr("id"));
				$('#modal_delete').modal('show');
			});

			$('#modal_delete').on('hidden.bs.modal', function (){ $("#id_orden").val("");});

			$(".btn-edit").click(function(){
				var id = $(this).parent().parent().attr("id");
				location.href = "<?=base_url()?>produccion/editar/"+id;
			});

			
		<?php endif; ?>		
	});
</script>
<style type="text/css">
	#formulario{  border-left: 1px solid #E4E4E4; }
	.table > table > tbody > tr{ cursor: pointer; }
</style>	
</body>
</html>