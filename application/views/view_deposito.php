<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<style type="text/css">
	.tab-pane > div.row{
		margin-top: 30px;
	}
	.lugar{
		text-align: center;
		color: white;
		border-radius: 10px;		
		height: 20px; 
		padding-top: 2px!important;
		cursor: pointer;
	}
	.lugar-gris{	background-color: #C2C2C4;	}
	.lugar-rojo{	background-color: #BE5073;	}
	.lugar-verde{	background-color: #0BABAD;	}
	#tab-sector-1 > div > .lugar{
		margin-left: 2%;
	}
	#tab-sector-2 > div > .lugar{
		margin-left: 1%;
		width: 7.33333333%
	}
</style>
<!-- begin #content -->
<div id="content" class="content">
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			</div>
			<h4 class="panel-title">Dpósito</h4>
		</div>
		<div class="panel-body" style="background:#c1ccd1;">
			<div class="row">			    
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab-sector-1" data-toggle="tab">Sector 1</a></li>
					<li class=""><a href="#tab-sector-2" data-toggle="tab">Sector 2</a></li>
					<li class=""><a href="#tab-sector-3" data-toggle="tab">Sector 3</a></li>
				</ul>
				<div class="tab-content">
					<!-- Sector 1 -->
					<div class="tab-pane fade active in" id="tab-sector-1">			
						<h3 class="text-center">Sector 1</h3>
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris" id="l1.1">6.80</div>
							<div class="col-xs-2 lugar lugar-gris" id="l1.2">6.60</div>
							<div class="col-xs-2 lugar lugar-gris" id="l1.3">6.20</div>
							<div class="col-xs-2 lugar lugar-gris">6.00</div>
							<div class="col-xs-2 lugar lugar-gris">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-verde">6.80</div>
							<div class="col-xs-2 lugar lugar-verde">6.60</div>
							<div class="col-xs-2 lugar lugar-verde">6.20</div>
							<div class="col-xs-2 lugar lugar-rojo">6.00</div>
							<div class="col-xs-2 lugar lugar-verde">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris">7.20</div>
							<div class="col-xs-2 lugar lugar-gris">7.00</div>
							<div class="col-xs-2 lugar lugar-gris">6.40</div>
							<div class="col-xs-2 lugar lugar-verde">6.00</div>
							<div class="col-xs-2 lugar lugar-rojo">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-rojo">7.20</div>
							<div class="col-xs-2 lugar lugar-verde">7.00</div>
							<div class="col-xs-2 lugar lugar-rojo">6.40</div>
							<div class="col-xs-2 lugar lugar-rojo">6.00</div>
							<div class="col-xs-2 lugar lugar-verde">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris">6.80</div>
							<div class="col-xs-2 lugar lugar-gris">6.60</div>
							<div class="col-xs-2 lugar lugar-gris">6.20</div>
							<div class="col-xs-2 lugar lugar-gris">6.00</div>
							<div class="col-xs-2 lugar lugar-gris">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-verde">6.80</div>
							<div class="col-xs-2 lugar lugar-verde">6.60</div>
							<div class="col-xs-2 lugar lugar-verde">6.20</div>
							<div class="col-xs-2 lugar lugar-rojo">6.00</div>
							<div class="col-xs-2 lugar lugar-verde">5.80</div>
						</div>	
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris">7.20</div>
							<div class="col-xs-2 lugar lugar-gris">7.00</div>
							<div class="col-xs-2 lugar lugar-gris">6.40</div>
							<div class="col-xs-2 lugar lugar-verde">6.00</div>
							<div class="col-xs-2 lugar lugar-rojo">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-rojo">7.20</div>
							<div class="col-xs-2 lugar lugar-verde">7.00</div>
							<div class="col-xs-2 lugar lugar-rojo">6.40</div>
							<div class="col-xs-2 lugar lugar-rojo">6.00</div>
							<div class="col-xs-2 lugar lugar-verde">5.80</div>
						</div>								
					</div> 
					<!-- Sector 2 -->
					<div class="tab-pane fade" id="tab-sector-2">
						<div class="row">
							<div class="col-xs-1 lugar lugar-gris" id="l1.1">6.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="l1.2">6.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="l1.3">6.20</div>
							<div class="col-xs-1 lugar lugar-gris">6.00</div>
							<div class="col-xs-1 lugar lugar-gris">6.00</div>
							<div class="col-xs-1 lugar lugar-gris">6.00</div>
							<div class="col-xs-1 lugar lugar-gris">6.00</div>
							<div class="col-xs-1 lugar lugar-gris">6.00</div>
							<div class="col-xs-1 lugar lugar-gris">6.00</div>
							<div class="col-xs-1 lugar lugar-gris">6.00</div>
							<div class="col-xs-1 lugar lugar-gris">6.00</div>
							<div class="col-xs-1 lugar lugar-gris">5.80</div>
						</div>						
					</div>
					<!-- Sector 3 -->
					<div class="tab-pane fade" id="tab-sector-3">
						
					</div>
				</div>				
			</div>				
		</div>
	</div>		
</div>
<!-- end #content -->

<div id="popover-content" class="hide">
  
</div>
		
	
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
		$("#LIdeposito").addClass("active");$("#LIenplaya").addClass("active");		

		$('div.lugar').popover({ 
		    html : true,
		    placement: "top",
		    content: function() {
		      return '<form><input type="hidden" value='+$(this).attr("id") +' name="lugar"><input style="width:50px;" type="number" name="cant"> <button type="submit" class="btn btn-primary btn-xs">Ok</button></form>';
		    }
		});

		
	});

	$('body').on('click', function (e) {
		$("div.lugar").each(function () {
			if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				$(this).popover('hide');
			}
		});
	});
</script>	
</body>
</html>