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
					<h4 class="panel-title">Egreso <?=ucwords($materia); ?></h4>
				</div>
				<div class="panel-body panel-form">
					<form action="<?= base_url(); ?>materiaPrima/egreso/<?=$materia;?>" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
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
					<h4 class="panel-title">Ingreso <?=ucwords($materia); ?></h4>
				</div>
				<div class="panel-body panel-form">					
					<form action="<?= base_url(); ?>materiaPrima/ingreso/<?=$materia;?>" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="selectProveedorIngreso">Proveedor:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<select class="form-control" id="selectProveedorIngreso" name="selectProveedorIngreso" data-parsley-required="true">											
									<option value="">Seleccione</option>
									<?php foreach ($proveedores as $proveedor) {
										echo '<option value="'.$proveedor->id_proveedor.'">'.$proveedor->nombre.'</option>';
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
							<label class="control-label col-xs-4" for="inputNroFactura">Nro Remito:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<input class="form-control" type="text" id="inputNroFactura" name="inputNroFactura" placeholder="Número Factura" data-parsley-required="true"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputCantidadIngreso">Cantidad:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8 input-group">
								<input class="form-control inputNumerico" type="text" id="inputCantidadIngreso" name="inputCantidadIngreso" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
								<span class="input-group-addon">Kg</span>
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
			<?php if($data['rol']==1){ ?>
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Stock <?=ucwords($materia); ?></h4>
				</div>
				<div class="panel-body panel-form">
					<br>
					<h4 class="text-center">Stock Actual: <?=$stockActual?></h4>
					<?php if($stockMaximo!=0){ ?>
					<h4 class="text-center"><?=number_format((($stockActual*100)/$stockMaximo),2)."%"?> en Silo</h4>
					<?php } ?>
					<hr>
					<form action="<?= base_url(); ?>materiaPrima/stock_real/<?=$materia;?>" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="inputCantidadIngreso">Stock Real:</label>
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
					<form class="form-inline text-center" action="<?= base_url(); ?>materiaPrima/index/<?=$materia;?>" method="POST" data-parsley-validate="true">						
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
							<select class="form-control" name="selectProveedorTabla">
								<option value="-1">Todos</option>
								<?php foreach ($proveedores as $proveedor) {
										echo '<option value="'.$proveedor->id_proveedor.'">'.$proveedor->nombre.'</option>';
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
									<th>Proveedor</th>
									<th>Remito</th>
									<th>Cantidad</th>									
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
										echo "<tr data-materia='"; if(isset($row->id_materia)) echo $row->id_materia; echo "' data-ingreso='"; if(isset($row->id_ingreso)) echo $row->id_ingreso; echo "'>";
										echo "<td>".$row->dia."</td>";
										echo "<td class='proveedor' data-proveedor='"; if(isset($row->id_proveedor)) echo $row->id_proveedor; echo "'>"; if(isset($row->nombre)) echo $row->nombre; echo "</td>";
										echo "<td class='remito'>"; if(isset($row->nro_remito)) echo $row->nro_remito; echo "</td>";
										echo "<td class='cantidad'>"; if(isset($row->cantidad)) echo $row->cantidad; echo "</td>";
										echo "<td>"; if(isset($row->consumo)) echo $row->consumo; echo "</td>";
										if($data['rol']==1 && (isset($row->id_materia)) )
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
        <form method="POST" action="<?=base_url()?>materiaPrima/eliminar/<?=$materia?>">
        	<input type="hidden" name="materia" id="materia">
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
				<h4 class="modal-title" id="myModalLabel">Editar ingreso</h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url(); ?>materiaPrima/editar/<?=$materia;?>" method="POST" class="form-horizontal form-bordered" data-parsley-validate="true">
					<input type="hidden" name="id_materia" id="id_materia">
					<input type="hidden" name="id_ingreso" id="id_ingreso">
					<div class="form-group">
						<label class="control-label col-xs-4" for="selectProveedorIngreso_edit">Proveedor:</label>
						<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
							<select class="form-control" id="selectProveedorIngreso_edit" name="selectProveedorIngreso_edit" data-parsley-required="true">											
								<option value="">Seleccione</option>
								<?php foreach ($proveedores as $proveedor) {
									echo '<option value="'.$proveedor->id_proveedor.'">'.$proveedor->nombre.'</option>';
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
						<label class="control-label col-xs-4" for="inputNroFactura_edit">Nro Remito:</label>
						<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
							<input class="form-control" type="text" id="inputNroFactura_edit" name="inputNroFactura_edit" placeholder="Número Factura" data-parsley-required="true"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-4" for="inputCantidadIngreso_edit">Cantidad:</label>
						<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8 input-group">
							<input class="form-control inputNumerico" type="text" id="inputCantidadIngreso_edit" name="inputCantidadIngreso_edit" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
							<span class="input-group-addon">Kg</span>
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
		App.init();
		FormPlugins.init();
		//cambio el item activo en el sidebar
		$("#ULsidebar > li").removeClass("active");
		$("#LImateria").addClass("active");$("#LI<?=$materia;?>").addClass("active");
		
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

		<?php if($data['rol']==1): ?>
			$(".btn-delete").click(function(){
				$("#materia").val($(this).parent().parent().data("materia"));
				$("#ingreso").val($(this).parent().parent().data("ingreso"));
				$('#modal_delete').modal('show');
			});

			$('#modal_delete').on('hidden.bs.modal', function (){ $("#materia").val(""); $("#ingreso").val(""); });

			$(".btn-edit").click(function(){
				var padre = $(this).parent().parent();
				$("#id_materia").val(padre.data("materia"));
				$("#id_ingreso").val(padre.data("ingreso"));
				
				$("#inputNroFactura_edit").val(padre.children(".remito").text());
				$("#inputCantidadIngreso_edit").val(padre.children(".cantidad").text());
				$("#inputPrecio_edit").val($(this).parent().data("precio"));
				
				var id_prov = padre.children(".proveedor").data("proveedor");
				$("#selectProveedorIngreso_edit").val(id_prov);

				$('#modal_edit').modal('show');
			});

			$('#modal_edit').on('hidden.bs.modal', function (){ 
				$("#id_materia").val(""); 
				$("#id_ingreso").val(""); 
				$("#inputNroFactura_edit").val("");
				$("#inputCantidadIngreso_edit").val("");
				$("#inputPrecio_edit").val("");
			});
		<?php endif; ?>		
	});	
</script>	
</body>
</html>