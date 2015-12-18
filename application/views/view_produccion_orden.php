<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />

<!-- begin #content -->
<div id="content" class="content">
		
	<?php if($data['rol'] == 1 || $data['rol'] == 3){ ?>	
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
				<div class="col-xs-8" id="formulario">
					<div class="media-body">
						<h4 class="media-heading">Nº Orden: <?=$producciones[0]->id_orden?></h4>
						<div id="icop"><a href="<?=base_url()?>produccion/imprimir/<?=$producciones[0]->id_orden?>"><i class="fa fa-print fa-2x"></i></a></div>
					</div>
					<form class="form-inline" action="<?= base_url(); ?>produccion/ingresoUpdate" method="POST" data-parsley-validate="true">	
						<fieldset>
							<input name="id_orden" type="hidden" id="id_orden" value="<?=$producciones[0]->id_orden?>">
								
							
								<?php $bandera = true; ?>
							<?php foreach ($producciones as $key => $produccion): ?>
							<?php 
							$cerrar = FALSE;
/*								switch(true)
								{
									case ($produccion->medida <= 30):
										if($bandAS == FALSE)
										{
											echo "<div class='tab-pane fade' id='default-tab-1'>";
											$bandAS = TRUE;
										}
										if(isset($producciones[$key+1]->medida) && $producciones[$key+1]->medida <= 30) 
											$cerrar = FALSE;
										else
											$cerrar = TRUE;
										
										break;
									case ($produccion->medida <= 38 && $produccion->medida > 30):
										if($bandA == FALSE )
										{
											echo "<div class='tab-pane fade' id='default-tab-2'>";
											$bandA = TRUE;
											}
											if(isset($producciones[$key+1]->medida) && $producciones[$key+1]->medida <= 38) 
												$cerrar = FALSE;
											else
												$cerrar = TRUE;
										
										break;
									case ($produccion->medida <= 46 && $produccion->medida > 38):
										if($bandB == FALSE )
										{
											echo "<div class='tab-pane fade' id='default-tab-3'>";
											$bandB = TRUE;
											}
											if(isset($producciones[$key+1]->medida) && $producciones[$key+1]->medida <= 46) 
												$cerrar = FALSE;
											else
												$cerrar = TRUE;
										
										break;
									case ($produccion->medida <= 54 && $produccion->medida > 46):
										if($bandC == FALSE )
										{ 
											echo "<div class='tab-pane fade' id='default-tab-4'>";
											$bandC = TRUE;
											}
											if(isset($producciones[$key+1]->medida) && $producciones[$key+1]->medida <= 54) 
												$cerrar = FALSE;
											else
												$cerrar = TRUE;
										
										break;
									case ($produccion->medida <= 62 && $produccion->medida > 54):
										if($bandD == FALSE )
										{
											echo "<div class='tab-pane fade' id='default-tab-5'>";
											$bandD = TRUE;
											}
											if(isset($producciones[$key+1]->medida) && $producciones[$key+1]->medida <= 62) 
												$cerrar = FALSE;
											else
												$cerrar = TRUE;
										
										break;
									case ($produccion->medida <= 90 && $produccion->medida > 62):
										if($bandE == FALSE )
										{
											echo "<div class='tab-pane fade' id='default-tab-6'>";
											$bandE = TRUE;
											}
											if(isset($producciones[$key+1]->medida) && $producciones[$key+1]->medida <= 90) 
												$cerrar = FALSE;
											else
												$cerrar = TRUE;
										
										break;
									}
*/
							?>
								<div id="producionesItem">
									
									<div class="form-group m-r-10" style="margin-top: 5px;">
										<input name="id_produccion[]" type="hidden" id="id_produccion" value="<?= $produccion->id_produccion ?>">
										- Cortes: <?=$produccion->cortes?>, Medida: <?= number_format((($produccion->medida)/10),2); ?> <?php if($produccion->unidades != NULL ) echo ", Unidades ".$produccion->unidades; ?>: 
										<input type="text" placeholder="Cantidad" class="form-control" name="inputCantidad[]" id="inputCantidad" requied data-parsley-type="digits"/>
										<input type="hidden" name="inputMedida[]" id="inputMedida" value="<?=$produccion->medida?>" />
									</div><br>
									
								</div>
								<br>

								<div <?php if(!$bandera) echo "style='display:none'";?>>
								<div class="form-group m-r-10" style="margin-top: 5px;">
									<select class="form-control" name="selectTurno[]" id="selectTurno" data-parsley-required="true">
										<?php if(!$bandera) echo "<option value='1'>Turno</option>";?>
										<option value="">Turno</option>
										<option value="0">Mañana</option>
										<option value="1">Tarde</option>
									</select>
								</div>
								<br>
								<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
									<input type="text" placeholder="Cemento" class="form-control" name="inputCemento[]" id="inputCemento" data-parsley-required="true" data-parsley-type="number" <?php if(!$bandera) echo "value='0'";?>/>			
									<span class="input-group-addon">Kg</span>
								</div>
								<div class="form-group m-r-10" style="margin-top: 5px;">
									<select class="form-control" name="selectSilo[]" id="selectSilo" data-parsley-required="true">
										<?php if(!$bandera) echo "<option value='0'>Turno</option>";?>
										<option value="">Seleccione</option>
				                        <?php foreach ($silos as $silo) {
											echo '<option value="'.$silo->id_silo.'">'.$silo->nombre.'</option>';
										} ?>
									</select>
								</div>
								<br>
								<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
									<input type="text" placeholder="Arena Tipo1" class="form-control" name="inputArena[]" id="inputArena" data-parsley-required="true" data-parsley-type="number" <?php if(!$bandera) echo "value='0'";?>/>			
									<span class="input-group-addon">Kg</span>
								</div>
								<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
									<input type="text" placeholder="Arena Tipo2" class="form-control" name="inputArena2[]" id="inputArena2" data-parsley-required="true" data-parsley-type="number" <?php if(!$bandera) echo "value='0'";?>/>			
									<span class="input-group-addon">Kg</span>
								</div>
								<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
									<input type="text" placeholder="Binder" class="form-control" name="inputBinder[]" id="inputBinder" data-parsley-required="true" data-parsley-type="number" <?php if(!$bandera) echo "value='0'";?>/>			
									<span class="input-group-addon">Kg</span>
								</div>
								<br>
								<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
									<input type="text" placeholder="Triturado" class="form-control" name="inputTriturado[]" id="inputTriturado" data-parsley-required="true" data-parsley-type="number" <?php if(!$bandera) echo "value='0'";?>/>			
									<span class="input-group-addon">Kg</span>
								</div>
								<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
									<input type="text" placeholder="Acelerante" class="form-control" name="inputAcelerante[]" id="inputAcelerante" data-parsley-required="true" data-parsley-type="number" <?php if(!$bandera) echo "value='0'";?>/>			
									<span class="input-group-addon">Kg</span>
								</div>
								<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
									<input type="text" placeholder="Plastificante" class="form-control" name="inputPlastificante[]" id="inputPlastificante" data-parsley-required="true" data-parsley-type="number" <?php if(!$bandera) echo "value='0'";?>/>			
									<span class="input-group-addon">Kg</span>
								</div>
								<br>
								<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
									<input type="text" placeholder="Ceniza" class="form-control" name="inputCeniza[]" id="inputCeniza" data-parsley-required="true" data-parsley-type="number" <?php if(!$bandera) echo "value='0'";?>/>			
									<span class="input-group-addon">Kg</span>
								</div>
								<div class="form-group m-r-10 input-group" style="margin-top: 5px;">			
									<input type="text" placeholder="Agua" class="form-control" name="inputAgua[]" id="inputAgua" data-parsley-required="true" data-parsley-type="number" <?php if(!$bandera) echo "value='0'";?>/>			
									<span class="input-group-addon">Lt</span>
								</div>
								</div>
								<?php $bandera = false ?>
								<br><br> 
							<?php endforeach; ?>	
						
							<button type="submit" class="btn btn-sm btn-primary m-r-5">Registrar</button>
							<button type="button" id="volver" class="btn btn-sm btn-default m-r-5">Volver</button>
						</fieldset>
					</form>
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
<script src="<?= base_url(); ?>assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
	
<script>
	$(document).ready(function() {
		

		App.init();
		FormPlugins.init();
		//cambio el item activo en el sidebar
		$("#ULsidebar > li").removeClass("active");
		$("#LIproduccion").addClass("active");	

		$("#volver").click(function(){
			location.href = '<?= base_url(); ?>produccion';
		});

		$(".nav-tabs > li").first().addClass("active");
		$(".tab-content > div.tab-pane").first().addClass("active");
		$(".tab-content > div.tab-pane").first().addClass("in");
	});
</script>
<style type="text/css">
	#formulario{  border-left: 1px solid #E4E4E4; }	
</style>	
</body>
</html>