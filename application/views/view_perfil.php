<!-- begin #content -->
<div id="content" class="content">	
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			</div>
			<h4 class="panel-title">Editar Perfil</h4>
		</div>
		<div class="panel-body">
			<form class="form-horizontal form-bordered"  enctype="multipart/form-data" action="<?= base_url(); ?>perfil/do_upload" method="POST" data-parsley-validate="true">					
				<div class="form-group">
					<label class="control-label col-xs-4" for="inputNombre">Nombre:</label>
					<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
						<input class="form-control" type="text" id="inputNombre" name="inputNombre" placeholder="Nombre" value="<?=$usuario->nombre;?>" data-parsley-required="true"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-xs-4" for="inputApellido">Apellido:</label>
					<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
						<input class="form-control" type="text" id="inputApellido" name="inputApellido" placeholder="Apellido" value="<?=$usuario->apellido;?>" data-parsley-required="true"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-xs-4" for="inputFoto"><img width="80" height="80" src="<?=base_url();?>uploads/profile/<?=$usuario->foto;?>"></label>
					<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
						<input class="form-control" type="file" id="inputFoto" name="userfile" placeholder="Foto" />
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
			<h4 class="panel-title">Editar Clave</h4>
		</div>
		<div class="panel-body">
			<form class="form-horizontal form-bordered" action="<?= base_url(); ?>perfil/editar_pass" method="POST" data-parsley-validate="true">					
				<div class="form-group">
					<label class="control-label col-xs-4" for="inputPass1">Contraseña:</label>
					<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
						<input class="form-control" type="password" id="inputPass1" name="inputPass1" placeholder="Contraseña" data-parsley-required="true"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-xs-4" for="inputPass2">Repetir Contraseña:</label>
					<div class="col-lg-6 col-md-8 col-sm-6 col-xs-8">
						<input class="form-control" type="password" id="inputPass2" name="inputPass2" placeholder="Repetir Contraseña:" data-parsley-required="true"/>
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
<!-- end #content -->
		
	
<?php $this->load->view('view_scripts') ?>

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
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

		if(<?=$mensaje;?>== 1) alert('Registrado con exito');
		if(<?=$mensaje;?>== 2) alert('Error al subir la imagen');
		if(<?=$mensaje;?>== 3) alert('Las contraseñas no coinciden');
	});
</script>	
</body>
</html>