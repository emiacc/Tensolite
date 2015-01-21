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
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Ingreso Cemento</h4>
				</div>
				<div class="panel-body panel-form">
					<form class="form-horizontal form-bordered" data-parsley-validate="true">
						<div class="form-group">
							<label class="control-label col-xs-4" for="fullname">Silo:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<select class="form-control" id="selectSiloIngreso" name="selectSiloIngreso" data-parsley-required="true">											
                                    <option value="">Seleccione</option>
                                    <option value="1">Silo A</option>
                                    <option value="2">Silo B</option>
                                    <option value="3">Silo C</option>
                                </select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="fullname">Fecha:</label>
							<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
								<div class="input-group date" id="datepicker-autoClose" data-date-format="dd-mm-yyyy" >
									<input id="inputFechaIngreso" name="inputFechaIngreso" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-4" for="message">Consumo:</label>
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
		</div>


		<div class="col-md-6">		
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Egreso Cemento</h4>
				</div>
				<div class="panel-body panel-form">
					<div class="panel-body panel-form">
						<form class="form-horizontal form-bordered" data-parsley-validate="true">
							<div class="form-group">
								<label class="control-label col-xs-4" for="fullname">Silo:</label>
								<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
									<select class="form-control" id="selectSiloEgreso" name="selectSiloEgreso" data-parsley-required="true">											
	                                    <option value="">Seleccione</option>
	                                    <option value="1">Silo A</option>
	                                    <option value="2">Silo B</option>
	                                    <option value="3">Silo C</option>
	                                </select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-4" for="fullname">Fecha:</label>
								<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
									<div class="input-group date" id="datepicker-autoClose2" data-date-format="dd-mm-yyyy" >
										<input id="inputFechaEgreso" name="inputFechaEgreso" type="text" class="form-control" value="" placeholder="Seleccione Fecha" data-parsley-required="true" />
	                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	                                </div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-4" for="message">Nro Factura:</label>
								<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
									<input class="form-control" type="text" id="inputNroFactura" name="inputNroFactura" placeholder="Número Factura" data-parsley-required="true"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-4" for="message">Kg Origen:</label>
								<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
									<input class="form-control inputNumerico" type="text" id="inputKgOrigen" name="inputKgOrigen" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-4" for="message">Kg Fábrica:</label>
								<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
									<input class="form-control inputNumerico" type="text" id="inputKgFabrica" name="inputKgFabrica" data-parsley-type="number" placeholder="Cantidad" data-parsley-required="true"/>
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
		$("#ULsidebar > li").removeClass("active");
		setTimeout(function(){$("#LImateria").addClass("active");$("#LIcemento").addClass("active");},500);		

		//Completar los input con la fecha actual
		d = new Date(); 
		mes = (d.getMonth()+1);
		if(mes < 10) mes = "0"+mes;
		currentDay = d.getDate()+"-"+mes+"-"+ d.getFullYear();
		$("#inputFechaIngreso").attr("value",currentDay);
		$("#inputFechaEgreso").attr("value",currentDay);

		//Reemplazar comas por puntos en los campos numericos
		$(".inputNumerico").keypress(function() {
  			t = $(this).val();  			
  			t = t.replace(",", ".");  			
  			$(this).val(t);			
		});
	});
</script>	
</body>
</html>