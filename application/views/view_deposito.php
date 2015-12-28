<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
<style type="text/css">
.tab-pane > div.row{	margin-top: 30px;	}
.lugar{
	text-align: center;
	color: white;
	border-radius: 10px;		
	height: 20px; 
	padding-top: 2px!important;
	cursor: pointer;
}
.cuadrilla{
	text-align: center;
	padding-top: 2px!important;
}
.lugar-gris{	background-color: #C2C2C4;	}
.lugar-rojo{	background-color: #BE5073;	}
.lugar-verde{	background-color: #0BABAD;	}
#tab-sector-1 > div > .lugar, #tab-sector-1 > div > .cuadrilla{	margin-left: 2%;	}
#tab-sector-2 > div > .lugar, #tab-sector-2 > div > .cuadrilla{
	margin-left: 1%;	
	width: 8%;	
}
#tab-sector-3 > div > .lugar, #tab-sector-3 > div > .cuadrilla{
	margin-left: 1%;	
	width: 6.6%;	
}
.naval{
	position: absolute;
	width: 10px;
}


.widget-stats .stats-info h5 {
    font-size: 10px;
    margin: 5px 0 0 0;
    color: #fff;
}
.widget-stats .stats-info h4 {
    text-align: center;
    font-weight: bold;
}

#modal-percents input {
 width: 85px;
}

.stats-link h5 {
	display: block;
    margin: 15px -15px -15px;
    padding: 7px 15px;
    background: rgba(0,0,0,0);
    text-align: right;
    color: #FFF;
    font-weight: 300;
    text-decoration: none;
}
</style>
<!-- begin #content -->
<div id="content" class="content">

	<!-- periodo y filtros -->
	<div class="row no-print">
		<div class="panel panel-inverse">				
			<div class="panel-body">
				<div class="pull-left"><h2 style="margin:0;">Depósito</h2></div>
				<ul class="list-inline pull-right" style="margin:0;">
					<?php if($data['rol'] < 3 ){ ?>	
					<li><a href="#modal-percents" data-toggle="modal"><i class="fa fa-cog fa-spin fa-3x"></i></a></li>
					<?php } ?>						
				</ul>
			</div>
		</div>
	</div>

	<div class="row" id="wid">

		
		<div class="row">
		<?php foreach ($medidas_aster as $key=>$medida): ?>			
			<div class="col-lg-1 col-md-2 col-xs-3 ui-sortable">
				<div class="widget widget-stats bg-green">
					<div class="stats-info">
						<h4>AS - <?=$medida?></h4>
						<p><?=$cantidades_aster[$key]?>u</p>
						<p><?=($cantidades_aster[$key]*$medida)?>m</p>
					</div>
					<div class="stats-link">	
						<h5><?=$porcentajes_aster[$key]?>%</h5>	
					</div>			
				</div>
			</div>
		<?php endforeach; ?>
		</div>

		<div class="row">
		<?php foreach ($medidas_a1 as $key=>$medida): ?>	
			<div class="col-lg-1 col-md-2 col-xs-3 ui-sortable">
				<div class="widget widget-stats bg-blue">
					<div class="stats-info">
						<h4>A1 - <?=$medida?></h4>
						<p><?=$cantidades_a1[$key]?>u</p>
						<p><?=($cantidades_a1[$key]*$medida)?>m</p>
					</div>
					<div class="stats-link">	
						<h5><?=$porcentajes_a1[$key]?>%</h5>		
					</div>		
				</div>
			</div>				
		<?php endforeach; ?>

		<?php foreach ($medidas_a2 as $key=>$medida): ?>	
			<div class="col-lg-1 col-md-2 col-xs-3 ui-sortable">
				<div class="widget widget-stats bg-purple">
					<div class="stats-info">
						<h4>A2 - <?=$medida?></h4>
						<p><?=$cantidades_a2[$key]?>u</p>
						<p><?=($cantidades_a2[$key]*$medida)?>m</p>
					</div>
					<div class="stats-link">	
						<h5><?=$porcentajes_a2[$key]?>%</h5>	
					</div>	
				</div>
			</div>				
		<?php endforeach; ?>
		

		<?php foreach ($medidas_b1 as $key=>$medida): ?>	
			<div class="col-lg-1 col-md-2 col-xs-3 ui-sortable">
				<div class="widget widget-stats bg-red">
					<div class="stats-info">
						<h4>B1 - <?=$medida?></h4>
						<p><?=$cantidades_b1[$key]?>u</p>
						<p><?=($cantidades_b1[$key]*$medida)?>m</p>
					</div>
					<div class="stats-link">	
						<h5><?=$porcentajes_b1[$key]?>%</h5>
					</div>	
				</div>
			</div>				
		<?php endforeach; ?>

		<?php foreach ($medidas_b2 as $key=>$medida): ?>	
			<div class="col-lg-1 col-md-2 col-xs-3 ui-sortable">
				<div class="widget widget-stats bg-orange">
					<div class="stats-info">
						<h4>B2 - <?=$medida?></h4>
						<p><?=$cantidades_b2[$key]?>u</p>
						<p><?=($cantidades_b2[$key]*$medida)?>m</p>
					</div>
					<div class="stats-link">	
						<h5><?=$porcentajes_b2[$key]?>%</h5>
					</div>	
				</div>
			</div>				
		<?php endforeach; ?>
		</div>
		
		<div class="row">
		<?php foreach ($medidas_c as $key=>$medida): ?>	
			<div class="col-lg-1 col-md-2 col-xs-3 ui-sortable">
				<div class="widget widget-stats bg-grey">
					<div class="stats-info">
						<h4>C - <?=$medida?></h4>
						<p><?=$cantidades_c[$key]?>u</p>
						<p><?=($cantidades_c[$key]*$medida)?>m</p>
					</div>
					<div class="stats-link">	
						<h5><?=$porcentajes_c[$key]?>%</h5>	
					</div>		
				</div>
			</div>				
		<?php endforeach; ?>

		<?php foreach ($medidas_d as $key=>$medida): ?>	
			<div class="col-lg-1 col-md-2 col-xs-3 ui-sortable">
				<div class="widget widget-stats bg-aqua">
					<div class="stats-info">
						<h4>D - <?=$medida?></h4>
						<p><?=$cantidades_d[$key]?>u</p>
						<p><?=($cantidades_d[$key]*$medida)?>m</p>							
					</div>		
					<div class="stats-link">	
						<h5><?=$porcentajes_d[$key]?>%</h5>	
					</div>
				</div>
			</div>				
		<?php endforeach; ?>
		</div>				

		<div class="row">
		<?php foreach ($medidas_e as $key=>$medida): ?>	
			<div class="col-lg-1 col-md-2 col-xs-3 ui-sortable">
				<div class="widget widget-stats bg-black">
					<div class="stats-icon"></div>
					<div class="stats-info">
						<h4>E - <?=$medida?></h4>
						<p><?=$cantidades_e[$key]?>u</p>
						<p><?=($cantidades_e[$key]*$medida)?>m</p>
					</div>		
					<div class="stats-link">	
						<h5><?=$porcentajes_e[$key]?>%</h5>	
					</div>		
				</div>
			</div>				
		<?php endforeach; ?>
		</div>				
	</div>					
</div>
<!-- end #content -->

<div id="popover-content" class="hide">

</div>

<!-- #modal-percents -->
	<div class="modal fade" id="modal-percents">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Configuración de stock ideal</h4>
				</div>
				<div class="modal-body">
					<form class="form-inline" action="<?= base_url(); ?>deposito/update_percents" method="POST" data-parsley-validate="true">
								<h4>Serie AS</h4>
								<div class="form-group m-r-20">
									<label>2.00</label>
									<input type="number" min="0" value="<?php $em=0; if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m20" name="20">							
								</div>
								<div class="form-group m-r-20">
									<label>2.20</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m22" name="22">							
								</div>
								<div class="form-group m-r-20">
									<label>2.40</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m24" name="24">							
								</div>
								
								<div class="form-group m-r-20">
									<label>2.60</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m26" name="26">							
								</div>
								<div class="form-group m-r-20">
									<label>2.80</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m28" name="28">							
								</div>
								<div class="form-group m-r-20">
									<label>3.00</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m30" name="30">							
								</div>

								<br><br>

								<div class="row"><h4 class="col-xs-4">Serie A1</h4><h4 class="col-xs-8">Serie A2</h4></div>
								<div class="form-group m-r-20">
									<label>3.20</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m32" name="32">							
								</div>
								<div class="form-group m-r-20">
									<label>3.40</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m34" name="34">							
								</div>

								<div class="form-group m-r-20">
									<label> </label>						
								</div>
								
								<div class="form-group m-r-20">
									<label>3.50</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m35" name="35">							
								</div>
								<div class="form-group m-r-20">
									<label>3.60</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m36" name="36">							
								</div>
								<div class="form-group m-r-20">
									<label>3.80</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m38" name="38">							
								</div>

								<br><br>

								<div class="row"><h4 class="col-xs-4">Serie B1</h4><h4 class="col-xs-8">Serie B2</h4></div>
								
								<div class="form-group m-r-20">
									<label>4.00</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m40" name="40">							
								</div>
								<div class="form-group m-r-20">
									<label>4.20</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m42" name="42">							
								</div>
								
								<div class="form-group m-r-20">
									<label> </label>						
								</div>

								<div class="form-group m-r-20">
									<label>4.40</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m44" name="44">							
								</div>
								<div class="form-group m-r-20">
									<label>4.50</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m45" name="45">							
								</div>
								<div class="form-group m-r-20">
									<label>4.60</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m46" name="46">							
								</div>

								<br><br>

								<h4>Serie C</h4>
								<div class="form-group m-r-20">
									<label>4.80</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m48" name="48">							
								</div>
								<div class="form-group m-r-20">
									<label>5.00</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m50" name="50">							
								</div>
								<div class="form-group m-r-20">
									<label>5.20</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m52" name="52">							
								</div>
								<div class="form-group m-r-20">
									<label>5.40</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m54" name="54">							
								</div>

								<br><br>

								<h4>Serie D</h4>
								<div class="form-group m-r-20">
									<label>5.60</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m56" name="56">							
								</div>
								<div class="form-group m-r-20">
									<label>5.80</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m58" name="58">							
								</div>
								<div class="form-group m-r-20">
									<label>6.00</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m60" name="60">							
								</div>
								<div class="form-group m-r-20">
									<label>6.20</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m62" name="62">							
								</div>

								<br><br>

								<h4>Serie E</h4>
								<div class="form-group m-r-20">
									<label>6.40</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m64" name="64">							
								</div>
								<div class="form-group m-r-20">
									<label>6.60</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m66" name="66">							
								</div>
								<div class="form-group m-r-20">
									<label>6.80</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m68" name="68">							
								</div>
								<div class="form-group m-r-20">
									<label>7.00</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m70" name="70">							
								</div>

								<div class="form-group m-r-20">
									<label>7.20</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m72" name="72">							
								</div>
								<div class="form-group m-r-20">
									<label>7.40</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m74" name="74">							
								</div>
								<div class="form-group m-r-20">
									<label>7.60</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m76" name="76">							
								</div>
								<div class="form-group m-r-20">
									<label>7.80</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m78" name="78">							
								</div>

								<div class="form-group m-r-20">
									<label>8.00</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m80" name="80">							
								</div>
								<div class="form-group m-r-20">
									<label>8.20</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m82" name="82">							
								</div>

								<br><br>
								<h4>Serie AS</h4>
								<div class="form-group m-r-20">
									<label>1.00</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m10" name="10">							
								</div>
								<div class="form-group m-r-20">
									<label>1.20</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m12" name="12">							
								</div>
								<div class="form-group m-r-20">
									<label>1.40</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m14" name="14">							
								</div>
								
								<div class="form-group m-r-20">
									<label>1.60</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m16" name="16">							
								</div>
								<div class="form-group m-r-20">
									<label>1.80</label>
									<input type="number" min="0" value="<?php if($maximos[$em]->maximo != 0) echo $maximos[$em]->maximo; $em++;?>" class="form-control" id="m18" name="18">							
								</div>
								

								<br><br><br>
								<div class="form-group m-l-20 m-r-20">
									<button type="submit" class="btn btn-sm btn-primary m-r-5">Registrar</button>			
								</div>		

					</form>
				</div>
			</div>
		</div>
	</div>
<!-- end modal-percents -->
<?php $this->load->view('view_scripts') ?>

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url(); ?>assets/js/form-plugins.js"></script>
<script src="<?= base_url(); ?>assets/plugins/parsley/dist/parsley.js"></script>
<script src="<?= base_url(); ?>assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="<?= base_url(); ?>assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<style type="text/css">
	.nopadding{
		padding: 0 !important;
	}
</style>
<script>
	$(document).ready(function() {
		App.init();
		FormPlugins.init();
		//cambio el item activo en el sidebar
		$("#ULsidebar > li").removeClass("active");
		$("#LIdeposito").addClass("active");$("#LIenplaya").addClass("active");		

		/*$('div.lugar').popover({ 
			html : true,
			placement: "top",
			content: function() {
				return '<form  action="<?= base_url(); ?>deposito/ingreso" method="POST">Ingreso: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" value='+$(this).attr("id") +' name="lugar"><input style="width:50px;" type="number" name="cant" min="0" max='+($(this).attr("max")-$(this).attr("min"))+'> <button type="submit" class="btn btn-primary btn-xs">Ok</button></form><hr><form  action="<?= base_url(); ?>deposito/egreso" method="POST">Despacho: <input type="hidden" value='+$(this).attr("id") +' name="lugar"><input style="width:50px;" type="number" name="cant" min="0" max='+$(this).attr("min")+'> <button type="submit" class="btn btn-primary btn-xs">Ok</button></form>';
			}
		});	
		$('div.lugar').tooltip({placement: "top"});	
		*/
		if(<?=$mensaje;?>== 1){
			$.gritter.add({
	            title: "Exito",
	            text: "Registrado con exito"
	        });
		} 		
		if(<?=$mensaje;?>== 2) {
			$.gritter.add({
	            title: "Error",
	            text: "Número Incorrecto"
	        });
		} 
		/*
		$('.tab-pane').each(function(){ $(this).find('div.row:eq(1)').prepend('<div class="naval">A</div>')});
		$('.tab-pane').each(function(){ $(this).find('div.row:eq(2)').prepend('<div class="naval">B</div>')});
		$('.tab-pane').each(function(){ $(this).find('div.row:eq(3)').prepend('<div class="naval">C</div>')});
		$('.tab-pane').each(function(){ $(this).find('div.row:eq(4)').prepend('<div class="naval">D</div>')});
		$('.tab-pane').each(function(){ $(this).find('div.row:eq(5)').prepend('<div class="naval">E</div>')});
		$('.tab-pane').each(function(){ $(this).find('div.row:eq(6)').prepend('<div class="naval">F</div>')});
		$('.tab-pane').each(function(){ $(this).find('div.row:eq(7)').prepend('<div class="naval">G</div>')});
		$('.tab-pane').each(function(){ $(this).find('div.row:eq(8)').prepend('<div class="naval">H</div>')});
		$('.tab-pane').each(function(){ $(this).find('div.row:eq(5)').prepend('<br><br><h5 class="text-center">Nave 2</h5>')});
		*/

		$(".stats-link").each(function(){
			var percent = ( $(this).children().html() ).substring(0, ( $(this).children().html() ).length-1);
			console.log(percent);
			switch( true )
			{
				case (percent == ""):
					break;
				case (percent > 70):
					$(this).children().css("background-color", "rgb(19,103,103");
					break;
				case (percent > 50):
					$(this).children().css("background-color", "rgb(119,118,0)");
					break;
				case (percent > 20):
					$(this).children().css("background-color", "rgb(171,97,2)");
					break;
				case (percent >= 0):
					$(this).children().css("background-color", "rgb(188,10,0)");
					break;
			}
		});
		
	});

	/*$('body').on('click', function (e) {
		$('div.lugar').tooltip('hide');
		$("div.lugar").each(function () {
			if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				$(this).popover('hide');
			}
		});
	});*/
</script>	
</body>
</html>