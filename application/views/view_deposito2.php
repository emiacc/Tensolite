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
.lugar-gris{	background-color: #C2C2C4;	}
.lugar-rojo{	background-color: #BE5073;	}
.lugar-verde{	background-color: #0BABAD;	}
#tab-sector-1 > div > .lugar{	margin-left: 2%;	}
#tab-sector-2 > div > .lugar{
	margin-left: 1%;	
	width: 8%;	
}
#tab-sector-3 > div > .lugar{
	margin-left: 1%;	
	width: 6.6%;	
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
			<h4 class="panel-title">Depósito</h4>
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
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[0]->id_lugar;?>" title="<?=$lugares[0]->cant;?>/<?=$lugares[0]->cantidad;?>">6.80</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[1]->id_lugar;?>" title="<?=$lugares[1]->cant;?>/<?=$lugares[1]->cantidad;?>">6.60</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[2]->id_lugar;?>" title="<?=$lugares[2]->cant;?>/<?=$lugares[2]->cantidad;?>">6.20</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[3]->id_lugar;?>" title="<?=$lugares[3]->cant;?>/<?=$lugares[3]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[4]->id_lugar;?>" title="<?=$lugares[4]->cant;?>/<?=$lugares[4]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar <?php if($lugares[5]->cant>=$lugares[5]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[5]->id_lugar;?>" title="<?=$lugares[5]->cant;?>/<?=$lugares[5]->cantidad;?>">6.80</div>
							<div class="col-xs-2 lugar <?php if($lugares[6]->cant>=$lugares[6]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[6]->id_lugar;?>" title="<?=$lugares[6]->cant;?>/<?=$lugares[6]->cantidad;?>">6.60</div>
							<div class="col-xs-2 lugar <?php if($lugares[7]->cant>=$lugares[7]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[7]->id_lugar;?>" title="<?=$lugares[7]->cant;?>/<?=$lugares[7]->cantidad;?>">6.20</div>
							<div class="col-xs-2 lugar <?php if($lugares[8]->cant>=$lugares[8]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[8]->id_lugar;?>" title="<?=$lugares[8]->cant;?>/<?=$lugares[8]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[9]->cant>=$lugares[9]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[9]->id_lugar;?>" title="<?=$lugares[9]->cant;?>/<?=$lugares[9]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[10]->id_lugar;?>" title="<?=$lugares[10]->cant;?>/<?=$lugares[10]->cantidad;?>">7.20</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[11]->id_lugar;?>" title="<?=$lugares[11]->cant;?>/<?=$lugares[11]->cantidad;?>">7.00</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[12]->id_lugar;?>" title="<?=$lugares[12]->cant;?>/<?=$lugares[12]->cantidad;?>">6.40</div>
							<div class="col-xs-2 lugar <?php if($lugares[13]->cant>=$lugares[13]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[13]->id_lugar;?>" title="<?=$lugares[13]->cant;?>/<?=$lugares[13]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[14]->cant>=$lugares[14]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[14]->id_lugar;?>" title="<?=$lugares[14]->cant;?>/<?=$lugares[14]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar <?php if($lugares[15]->cant>=$lugares[15]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[15]->id_lugar;?>" title="<?=$lugares[15]->cant;?>/<?=$lugares[15]->cantidad;?>">7.20</div>
							<div class="col-xs-2 lugar <?php if($lugares[16]->cant>=$lugares[16]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[16]->id_lugar;?>" title="<?=$lugares[16]->cant;?>/<?=$lugares[16]->cantidad;?>">7.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[17]->cant>=$lugares[17]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[17]->id_lugar;?>" title="<?=$lugares[17]->cant;?>/<?=$lugares[17]->cantidad;?>">6.40</div>
							<div class="col-xs-2 lugar <?php if($lugares[18]->cant>=$lugares[18]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[18]->id_lugar;?>" title="<?=$lugares[18]->cant;?>/<?=$lugares[18]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[19]->cant>=$lugares[19]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[19]->id_lugar;?>" title="<?=$lugares[19]->cant;?>/<?=$lugares[19]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[20]->id_lugar;?>" title="<?=$lugares[20]->cant;?>/<?=$lugares[20]->cantidad;?>">6.80</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[21]->id_lugar;?>" title="<?=$lugares[21]->cant;?>/<?=$lugares[21]->cantidad;?>">6.60</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[22]->id_lugar;?>" title="<?=$lugares[22]->cant;?>/<?=$lugares[22]->cantidad;?>">6.20</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[23]->id_lugar;?>" title="<?=$lugares[23]->cant;?>/<?=$lugares[23]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[24]->id_lugar;?>" title="<?=$lugares[24]->cant;?>/<?=$lugares[24]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar <?php if($lugares[25]->cant>=$lugares[25]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[25]->id_lugar;?>" title="<?=$lugares[25]->cant;?>/<?=$lugares[25]->cantidad;?>">6.80</div>
							<div class="col-xs-2 lugar <?php if($lugares[26]->cant>=$lugares[26]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[26]->id_lugar;?>" title="<?=$lugares[26]->cant;?>/<?=$lugares[26]->cantidad;?>">6.60</div>
							<div class="col-xs-2 lugar <?php if($lugares[27]->cant>=$lugares[27]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[27]->id_lugar;?>" title="<?=$lugares[27]->cant;?>/<?=$lugares[27]->cantidad;?>">6.20</div>
							<div class="col-xs-2 lugar <?php if($lugares[28]->cant>=$lugares[28]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[28]->id_lugar;?>" title="<?=$lugares[28]->cant;?>/<?=$lugares[28]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[29]->cant>=$lugares[29]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[29]->id_lugar;?>" title="<?=$lugares[29]->cant;?>/<?=$lugares[29]->cantidad;?>">5.80</div>
						</div>	
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[30]->id_lugar;?>" title="<?=$lugares[30]->cant;?>/<?=$lugares[30]->cantidad;?>">7.20</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[31]->id_lugar;?>" title="<?=$lugares[31]->cant;?>/<?=$lugares[31]->cantidad;?>">7.00</div>
							<div class="col-xs-2 lugar lugar-gris" id="<?=$lugares[32]->id_lugar;?>" title="<?=$lugares[32]->cant;?>/<?=$lugares[32]->cantidad;?>">6.40</div>
							<div class="col-xs-2 lugar <?php if($lugares[33]->cant>=$lugares[33]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[33]->id_lugar;?>" title="<?=$lugares[33]->cant;?>/<?=$lugares[33]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[34]->cant>=$lugares[34]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[34]->id_lugar;?>" title="<?=$lugares[34]->cant;?>/<?=$lugares[34]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar <?php if($lugares[35]->cant>=$lugares[35]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[35]->id_lugar;?>" title="<?=$lugares[35]->cant;?>/<?=$lugares[35]->cantidad;?>">7.20</div>
							<div class="col-xs-2 lugar <?php if($lugares[36]->cant>=$lugares[36]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[36]->id_lugar;?>" title="<?=$lugares[36]->cant;?>/<?=$lugares[36]->cantidad;?>">7.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[37]->cant>=$lugares[37]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[37]->id_lugar;?>" title="<?=$lugares[37]->cant;?>/<?=$lugares[37]->cantidad;?>">6.40</div>
							<div class="col-xs-2 lugar <?php if($lugares[38]->cant>=$lugares[38]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[38]->id_lugar;?>" title="<?=$lugares[38]->cant;?>/<?=$lugares[38]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[39]->cant>=$lugares[39]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[39]->id_lugar;?>" title="<?=$lugares[39]->cant;?>/<?=$lugares[39]->cantidad;?>">5.80</div>
						</div>								
					</div> 
					<!-- Sector 2 -->
					<div class="tab-pane fade" id="tab-sector-2">
						<h3 class="text-center">Sector 2</h3>
						<div class="row">
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[40]->id_lugar;?>" title="<?=$lugares[40]->cant;?>/<?=$lugares[40]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[41]->id_lugar;?>" title="<?=$lugares[41]->cant;?>/<?=$lugares[41]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[42]->id_lugar;?>" title="<?=$lugares[42]->cant;?>/<?=$lugares[42]->cantidad;?>">5.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[43]->id_lugar;?>" title="<?=$lugares[43]->cant;?>/<?=$lugares[43]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[44]->id_lugar;?>" title="<?=$lugares[44]->cant;?>/<?=$lugares[44]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[45]->id_lugar;?>" title="<?=$lugares[45]->cant;?>/<?=$lugares[45]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[46]->id_lugar;?>" title="<?=$lugares[46]->cant;?>/<?=$lugares[46]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[47]->id_lugar;?>" title="<?=$lugares[47]->cant;?>/<?=$lugares[47]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[48]->id_lugar;?>" title="<?=$lugares[48]->cant;?>/<?=$lugares[48]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[49]->id_lugar;?>" title="<?=$lugares[49]->cant;?>/<?=$lugares[49]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[50]->id_lugar;?>" title="<?=$lugares[50]->cant;?>/<?=$lugares[50]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[51]->cant>=$lugares[51]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[51]->id_lugar;?>" title="<?=$lugares[51]->cant;?>/<?=$lugares[51]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[52]->cant>=$lugares[52]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[52]->id_lugar;?>" title="<?=$lugares[52]->cant;?>/<?=$lugares[52]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[53]->cant>=$lugares[53]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[53]->id_lugar;?>" title="<?=$lugares[53]->cant;?>/<?=$lugares[53]->cantidad;?>">5.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[54]->cant>=$lugares[54]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[54]->id_lugar;?>" title="<?=$lugares[54]->cant;?>/<?=$lugares[54]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[55]->cant>=$lugares[55]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[55]->id_lugar;?>" title="<?=$lugares[55]->cant;?>/<?=$lugares[55]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[56]->cant>=$lugares[56]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[56]->id_lugar;?>" title="<?=$lugares[56]->cant;?>/<?=$lugares[56]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[57]->cant>=$lugares[57]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[57]->id_lugar;?>" title="<?=$lugares[57]->cant;?>/<?=$lugares[57]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[58]->cant>=$lugares[58]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[58]->id_lugar;?>" title="<?=$lugares[58]->cant;?>/<?=$lugares[58]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[59]->cant>=$lugares[59]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[59]->id_lugar;?>" title="<?=$lugares[59]->cant;?>/<?=$lugares[59]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[60]->cant>=$lugares[60]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[60]->id_lugar;?>" title="<?=$lugares[60]->cant;?>/<?=$lugares[60]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[61]->cant>=$lugares[61]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[61]->id_lugar;?>" title="<?=$lugares[61]->cant;?>/<?=$lugares[61]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[62]->cant>=$lugares[62]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[62]->id_lugar;?>" title="<?=$lugares[62]->cant;?>/<?=$lugares[62]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[63]->cant>=$lugares[63]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[63]->id_lugar;?>" title="<?=$lugares[63]->cant;?>/<?=$lugares[63]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[64]->cant>=$lugares[64]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[64]->id_lugar;?>" title="<?=$lugares[64]->cant;?>/<?=$lugares[64]->cantidad;?>">5.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[65]->cant>=$lugares[65]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[65]->id_lugar;?>" title="<?=$lugares[65]->cant;?>/<?=$lugares[65]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[66]->cant>=$lugares[66]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[66]->id_lugar;?>" title="<?=$lugares[66]->cant;?>/<?=$lugares[66]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[67]->cant>=$lugares[67]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[67]->id_lugar;?>" title="<?=$lugares[67]->cant;?>/<?=$lugares[67]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[68]->cant>=$lugares[68]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[68]->id_lugar;?>" title="<?=$lugares[68]->cant;?>/<?=$lugares[68]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[69]->cant>=$lugares[69]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[69]->id_lugar;?>" title="<?=$lugares[69]->cant;?>/<?=$lugares[69]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[70]->cant>=$lugares[70]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[70]->id_lugar;?>" title="<?=$lugares[70]->cant;?>/<?=$lugares[70]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[71]->cant>=$lugares[71]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[71]->id_lugar;?>" title="<?=$lugares[71]->cant;?>/<?=$lugares[71]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[72]->cant>=$lugares[72]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[72]->id_lugar;?>" title="<?=$lugares[72]->cant;?>/<?=$lugares[72]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[73]->cant>=$lugares[73]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[73]->id_lugar;?>" title="<?=$lugares[73]->cant;?>/<?=$lugares[73]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[74]->cant>=$lugares[74]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[74]->id_lugar;?>" title="<?=$lugares[74]->cant;?>/<?=$lugares[74]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[75]->cant>=$lugares[75]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[75]->id_lugar;?>" title="<?=$lugares[75]->cant;?>/<?=$lugares[75]->cantidad;?>">5.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[76]->cant>=$lugares[76]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[76]->id_lugar;?>" title="<?=$lugares[76]->cant;?>/<?=$lugares[76]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[77]->cant>=$lugares[77]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[77]->id_lugar;?>" title="<?=$lugares[77]->cant;?>/<?=$lugares[77]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[78]->cant>=$lugares[78]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[78]->id_lugar;?>" title="<?=$lugares[78]->cant;?>/<?=$lugares[78]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[79]->cant>=$lugares[79]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[79]->id_lugar;?>" title="<?=$lugares[79]->cant;?>/<?=$lugares[79]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[80]->cant>=$lugares[80]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[80]->id_lugar;?>" title="<?=$lugares[80]->cant;?>/<?=$lugares[80]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[81]->cant>=$lugares[81]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[81]->id_lugar;?>" title="<?=$lugares[81]->cant;?>/<?=$lugares[81]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[82]->cant>=$lugares[82]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[82]->id_lugar;?>" title="<?=$lugares[82]->cant;?>/<?=$lugares[82]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[83]->cant>=$lugares[83]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[83]->id_lugar;?>" title="<?=$lugares[83]->cant;?>/<?=$lugares[83]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[84]->id_lugar;?>" title="<?=$lugares[84]->cant;?>/<?=$lugares[84]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[85]->id_lugar;?>" title="<?=$lugares[85]->cant;?>/<?=$lugares[85]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[86]->id_lugar;?>" title="<?=$lugares[86]->cant;?>/<?=$lugares[86]->cantidad;?>">4.50</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[87]->id_lugar;?>" title="<?=$lugares[87]->cant;?>/<?=$lugares[87]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[88]->id_lugar;?>" title="<?=$lugares[88]->cant;?>/<?=$lugares[88]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[89]->id_lugar;?>" title="<?=$lugares[89]->cant;?>/<?=$lugares[89]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[90]->id_lugar;?>" title="<?=$lugares[90]->cant;?>/<?=$lugares[90]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[91]->id_lugar;?>" title="<?=$lugares[91]->cant;?>/<?=$lugares[91]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[92]->id_lugar;?>" title="<?=$lugares[92]->cant;?>/<?=$lugares[92]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[93]->id_lugar;?>" title="<?=$lugares[93]->cant;?>/<?=$lugares[93]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[94]->id_lugar;?>" title="<?=$lugares[94]->cant;?>/<?=$lugares[94]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[95]->cant>=$lugares[95]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[95]->id_lugar;?>" title="<?=$lugares[95]->cant;?>/<?=$lugares[95]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[96]->cant>=$lugares[96]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[96]->id_lugar;?>" title="<?=$lugares[96]->cant;?>/<?=$lugares[96]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[97]->cant>=$lugares[97]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[97]->id_lugar;?>" title="<?=$lugares[97]->cant;?>/<?=$lugares[97]->cantidad;?>">4.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[98]->cant>=$lugares[98]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[98]->id_lugar;?>" title="<?=$lugares[98]->cant;?>/<?=$lugares[98]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[99]->cant>=$lugares[99]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[99]->id_lugar;?>" title="<?=$lugares[99]->cant;?>/<?=$lugares[99]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[100]->cant>=$lugares[100]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[100]->id_lugar;?>" title="<?=$lugares[100]->cant;?>/<?=$lugares[100]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[101]->cant>=$lugares[101]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[101]->id_lugar;?>" title="<?=$lugares[101]->cant;?>/<?=$lugares[101]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[102]->cant>=$lugares[102]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[102]->id_lugar;?>" title="<?=$lugares[102]->cant;?>/<?=$lugares[102]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[103]->cant>=$lugares[103]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[103]->id_lugar;?>" title="<?=$lugares[103]->cant;?>/<?=$lugares[103]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[104]->cant>=$lugares[104]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[104]->id_lugar;?>" title="<?=$lugares[104]->cant;?>/<?=$lugares[104]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[105]->cant>=$lugares[105]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[105]->id_lugar;?>" title="<?=$lugares[105]->cant;?>/<?=$lugares[105]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[106]->cant>=$lugares[106]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[106]->id_lugar;?>" title="<?=$lugares[106]->cant;?>/<?=$lugares[106]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[107]->cant>=$lugares[107]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[107]->id_lugar;?>" title="<?=$lugares[107]->cant;?>/<?=$lugares[107]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[108]->cant>=$lugares[108]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[108]->id_lugar;?>" title="<?=$lugares[108]->cant;?>/<?=$lugares[108]->cantidad;?>">4.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[109]->cant>=$lugares[109]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[109]->id_lugar;?>" title="<?=$lugares[109]->cant;?>/<?=$lugares[109]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[110]->cant>=$lugares[110]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[110]->id_lugar;?>" title="<?=$lugares[110]->cant;?>/<?=$lugares[110]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[111]->cant>=$lugares[111]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[111]->id_lugar;?>" title="<?=$lugares[111]->cant;?>/<?=$lugares[111]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[112]->cant>=$lugares[112]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[112]->id_lugar;?>" title="<?=$lugares[112]->cant;?>/<?=$lugares[112]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[113]->cant>=$lugares[113]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[113]->id_lugar;?>" title="<?=$lugares[113]->cant;?>/<?=$lugares[113]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[114]->cant>=$lugares[114]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[114]->id_lugar;?>" title="<?=$lugares[114]->cant;?>/<?=$lugares[114]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[115]->cant>=$lugares[115]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[115]->id_lugar;?>" title="<?=$lugares[115]->cant;?>/<?=$lugares[115]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[116]->cant>=$lugares[116]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[116]->id_lugar;?>" title="<?=$lugares[116]->cant;?>/<?=$lugares[116]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[117]->cant>=$lugares[117]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[117]->id_lugar;?>" title="<?=$lugares[117]->cant;?>/<?=$lugares[117]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[118]->cant>=$lugares[118]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[118]->id_lugar;?>" title="<?=$lugares[118]->cant;?>/<?=$lugares[118]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[119]->cant>=$lugares[119]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[119]->id_lugar;?>" title="<?=$lugares[119]->cant;?>/<?=$lugares[119]->cantidad;?>">4.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[120]->cant>=$lugares[120]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[120]->id_lugar;?>" title="<?=$lugares[120]->cant;?>/<?=$lugares[120]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[121]->cant>=$lugares[121]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[121]->id_lugar;?>" title="<?=$lugares[121]->cant;?>/<?=$lugares[121]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[122]->cant>=$lugares[122]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[122]->id_lugar;?>" title="<?=$lugares[122]->cant;?>/<?=$lugares[122]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[123]->cant>=$lugares[123]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[123]->id_lugar;?>" title="<?=$lugares[123]->cant;?>/<?=$lugares[123]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[124]->cant>=$lugares[124]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[124]->id_lugar;?>" title="<?=$lugares[124]->cant;?>/<?=$lugares[124]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[125]->cant>=$lugares[125]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[125]->id_lugar;?>" title="<?=$lugares[125]->cant;?>/<?=$lugares[125]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[126]->cant>=$lugares[126]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[126]->id_lugar;?>" title="<?=$lugares[126]->cant;?>/<?=$lugares[126]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[127]->cant>=$lugares[127]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[127]->id_lugar;?>" title="<?=$lugares[127]->cant;?>/<?=$lugares[127]->cantidad;?>">3.80</div>							
						</div>	
					</div>
					<!-- Sector 3 -->
					<div class="tab-pane fade" id="tab-sector-3">
						<h3 class="text-center">Sector 3</h3>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[128]->id_lugar;?>" title="<?=$lugares[128]->cant;?>/<?=$lugares[128]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[129]->id_lugar;?>" title="<?=$lugares[129]->cant;?>/<?=$lugares[129]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[130]->id_lugar;?>" title="<?=$lugares[130]->cant;?>/<?=$lugares[130]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[131]->id_lugar;?>" title="<?=$lugares[131]->cant;?>/<?=$lugares[131]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[132]->id_lugar;?>" title="<?=$lugares[132]->cant;?>/<?=$lugares[132]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[133]->id_lugar;?>" title="<?=$lugares[133]->cant;?>/<?=$lugares[133]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[134]->id_lugar;?>" title="<?=$lugares[134]->cant;?>/<?=$lugares[134]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[135]->id_lugar;?>" title="<?=$lugares[135]->cant;?>/<?=$lugares[135]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[136]->id_lugar;?>" title="<?=$lugares[136]->cant;?>/<?=$lugares[136]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[137]->id_lugar;?>" title="<?=$lugares[137]->cant;?>/<?=$lugares[137]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[138]->id_lugar;?>" title="<?=$lugares[138]->cant;?>/<?=$lugares[138]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[139]->id_lugar;?>" title="<?=$lugares[139]->cant;?>/<?=$lugares[139]->cantidad;?>">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[140]->cant>=$lugares[140]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[140]->id_lugar;?>" title="<?=$lugares[140]->cant;?>/<?=$lugares[140]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[141]->cant>=$lugares[141]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[141]->id_lugar;?>" title="<?=$lugares[141]->cant;?>/<?=$lugares[141]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[142]->cant>=$lugares[142]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[142]->id_lugar;?>" title="<?=$lugares[142]->cant;?>/<?=$lugares[142]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[143]->cant>=$lugares[143]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[143]->id_lugar;?>" title="<?=$lugares[143]->cant;?>/<?=$lugares[143]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[144]->cant>=$lugares[144]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[144]->id_lugar;?>" title="<?=$lugares[144]->cant;?>/<?=$lugares[144]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[145]->cant>=$lugares[145]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[145]->id_lugar;?>" title="<?=$lugares[145]->cant;?>/<?=$lugares[145]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[146]->cant>=$lugares[146]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[146]->id_lugar;?>" title="<?=$lugares[146]->cant;?>/<?=$lugares[146]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[147]->cant>=$lugares[147]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[147]->id_lugar;?>" title="<?=$lugares[147]->cant;?>/<?=$lugares[147]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[148]->cant>=$lugares[148]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[148]->id_lugar;?>" title="<?=$lugares[148]->cant;?>/<?=$lugares[148]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[149]->cant>=$lugares[149]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[149]->id_lugar;?>" title="<?=$lugares[149]->cant;?>/<?=$lugares[149]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[150]->cant>=$lugares[150]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[150]->id_lugar;?>" title="<?=$lugares[150]->cant;?>/<?=$lugares[150]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[151]->cant>=$lugares[151]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[151]->id_lugar;?>" title="<?=$lugares[151]->cant;?>/<?=$lugares[151]->cantidad;?>">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[152]->cant>=$lugares[152]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[152]->id_lugar;?>" title="<?=$lugares[152]->cant;?>/<?=$lugares[152]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[153]->cant>=$lugares[153]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[153]->id_lugar;?>" title="<?=$lugares[153]->cant;?>/<?=$lugares[153]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[154]->cant>=$lugares[154]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[154]->id_lugar;?>" title="<?=$lugares[154]->cant;?>/<?=$lugares[154]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[155]->cant>=$lugares[155]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[155]->id_lugar;?>" title="<?=$lugares[155]->cant;?>/<?=$lugares[155]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[156]->cant>=$lugares[156]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[156]->id_lugar;?>" title="<?=$lugares[156]->cant;?>/<?=$lugares[156]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[157]->cant>=$lugares[157]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[157]->id_lugar;?>" title="<?=$lugares[157]->cant;?>/<?=$lugares[157]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[158]->cant>=$lugares[158]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[158]->id_lugar;?>" title="<?=$lugares[158]->cant;?>/<?=$lugares[158]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[159]->cant>=$lugares[159]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[159]->id_lugar;?>" title="<?=$lugares[159]->cant;?>/<?=$lugares[159]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[160]->cant>=$lugares[160]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[160]->id_lugar;?>" title="<?=$lugares[160]->cant;?>/<?=$lugares[160]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[161]->cant>=$lugares[161]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[161]->id_lugar;?>" title="<?=$lugares[161]->cant;?>/<?=$lugares[161]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[162]->cant>=$lugares[162]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[162]->id_lugar;?>" title="<?=$lugares[162]->cant;?>/<?=$lugares[162]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[163]->cant>=$lugares[163]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[163]->id_lugar;?>" title="<?=$lugares[163]->cant;?>/<?=$lugares[163]->cantidad;?>">2.20</div>		
							<div class="col-xs-1 lugar <?php if($lugares[164]->cant>=$lugares[164]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[164]->id_lugar;?>" title="<?=$lugares[164]->cant;?>/<?=$lugares[164]->cantidad;?>">2.00</div>
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[165]->cant>=$lugares[165]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[165]->id_lugar;?>" title="<?=$lugares[165]->cant;?>/<?=$lugares[165]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[166]->cant>=$lugares[166]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[166]->id_lugar;?>" title="<?=$lugares[166]->cant;?>/<?=$lugares[166]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[167]->cant>=$lugares[167]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[167]->id_lugar;?>" title="<?=$lugares[167]->cant;?>/<?=$lugares[167]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[168]->cant>=$lugares[168]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[168]->id_lugar;?>" title="<?=$lugares[168]->cant;?>/<?=$lugares[168]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[169]->cant>=$lugares[169]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[169]->id_lugar;?>" title="<?=$lugares[169]->cant;?>/<?=$lugares[169]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[170]->cant>=$lugares[170]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[170]->id_lugar;?>" title="<?=$lugares[170]->cant;?>/<?=$lugares[170]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[171]->cant>=$lugares[171]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[171]->id_lugar;?>" title="<?=$lugares[171]->cant;?>/<?=$lugares[171]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[172]->cant>=$lugares[172]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[172]->id_lugar;?>" title="<?=$lugares[172]->cant;?>/<?=$lugares[172]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[173]->cant>=$lugares[173]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[173]->id_lugar;?>" title="<?=$lugares[173]->cant;?>/<?=$lugares[173]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[174]->cant>=$lugares[174]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[174]->id_lugar;?>" title="<?=$lugares[174]->cant;?>/<?=$lugares[174]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[175]->cant>=$lugares[175]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[175]->id_lugar;?>" title="<?=$lugares[175]->cant;?>/<?=$lugares[175]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[176]->cant>=$lugares[176]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[176]->id_lugar;?>" title="<?=$lugares[176]->cant;?>/<?=$lugares[176]->cantidad;?>">2.20</div>		
							<div class="col-xs-1 lugar <?php if($lugares[177]->cant>=$lugares[177]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[177]->id_lugar;?>" title="<?=$lugares[177]->cant;?>/<?=$lugares[177]->cantidad;?>">2.00</div>
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[178]->id_lugar;?>" title="<?=$lugares[178]->cant;?>/<?=$lugares[178]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[179]->id_lugar;?>" title="<?=$lugares[179]->cant;?>/<?=$lugares[179]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[180]->id_lugar;?>" title="<?=$lugares[180]->cant;?>/<?=$lugares[180]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[181]->id_lugar;?>" title="<?=$lugares[181]->cant;?>/<?=$lugares[181]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[182]->id_lugar;?>" title="<?=$lugares[182]->cant;?>/<?=$lugares[182]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[183]->id_lugar;?>" title="<?=$lugares[183]->cant;?>/<?=$lugares[183]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[184]->id_lugar;?>" title="<?=$lugares[184]->cant;?>/<?=$lugares[184]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[185]->id_lugar;?>" title="<?=$lugares[185]->cant;?>/<?=$lugares[185]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[186]->id_lugar;?>" title="<?=$lugares[186]->cant;?>/<?=$lugares[186]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[187]->id_lugar;?>" title="<?=$lugares[187]->cant;?>/<?=$lugares[187]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[188]->id_lugar;?>" title="<?=$lugares[188]->cant;?>/<?=$lugares[188]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar lugar-gris" id="<?=$lugares[189]->id_lugar;?>" title="<?=$lugares[189]->cant;?>/<?=$lugares[189]->cantidad;?>">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[190]->cant>=$lugares[190]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[190]->id_lugar;?>" title="<?=$lugares[190]->cant;?>/<?=$lugares[190]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[191]->cant>=$lugares[191]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[191]->id_lugar;?>" title="<?=$lugares[191]->cant;?>/<?=$lugares[191]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[192]->cant>=$lugares[192]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[192]->id_lugar;?>" title="<?=$lugares[192]->cant;?>/<?=$lugares[192]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[193]->cant>=$lugares[193]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[193]->id_lugar;?>" title="<?=$lugares[193]->cant;?>/<?=$lugares[193]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[194]->cant>=$lugares[194]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[194]->id_lugar;?>" title="<?=$lugares[194]->cant;?>/<?=$lugares[194]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[195]->cant>=$lugares[195]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[195]->id_lugar;?>" title="<?=$lugares[195]->cant;?>/<?=$lugares[195]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[196]->cant>=$lugares[196]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[196]->id_lugar;?>" title="<?=$lugares[196]->cant;?>/<?=$lugares[196]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[197]->cant>=$lugares[197]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[197]->id_lugar;?>" title="<?=$lugares[197]->cant;?>/<?=$lugares[197]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[198]->cant>=$lugares[198]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[198]->id_lugar;?>" title="<?=$lugares[198]->cant;?>/<?=$lugares[198]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[199]->cant>=$lugares[199]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[199]->id_lugar;?>" title="<?=$lugares[199]->cant;?>/<?=$lugares[199]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[200]->cant>=$lugares[200]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[200]->id_lugar;?>" title="<?=$lugares[200]->cant;?>/<?=$lugares[200]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[201]->cant>=$lugares[201]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[201]->id_lugar;?>" title="<?=$lugares[201]->cant;?>/<?=$lugares[201]->cantidad;?>">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[202]->cant>=$lugares[202]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[202]->id_lugar;?>" title="<?=$lugares[202]->cant;?>/<?=$lugares[202]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[203]->cant>=$lugares[203]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[203]->id_lugar;?>" title="<?=$lugares[203]->cant;?>/<?=$lugares[203]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[204]->cant>=$lugares[204]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[204]->id_lugar;?>" title="<?=$lugares[204]->cant;?>/<?=$lugares[204]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[205]->cant>=$lugares[205]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[205]->id_lugar;?>" title="<?=$lugares[205]->cant;?>/<?=$lugares[205]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[206]->cant>=$lugares[206]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[206]->id_lugar;?>" title="<?=$lugares[206]->cant;?>/<?=$lugares[206]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[207]->cant>=$lugares[207]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[207]->id_lugar;?>" title="<?=$lugares[207]->cant;?>/<?=$lugares[207]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[208]->cant>=$lugares[208]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[208]->id_lugar;?>" title="<?=$lugares[208]->cant;?>/<?=$lugares[208]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[209]->cant>=$lugares[209]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[209]->id_lugar;?>" title="<?=$lugares[209]->cant;?>/<?=$lugares[209]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[210]->cant>=$lugares[210]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[210]->id_lugar;?>" title="<?=$lugares[210]->cant;?>/<?=$lugares[210]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[211]->cant>=$lugares[211]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[211]->id_lugar;?>" title="<?=$lugares[211]->cant;?>/<?=$lugares[211]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[212]->cant>=$lugares[212]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[212]->id_lugar;?>" title="<?=$lugares[212]->cant;?>/<?=$lugares[212]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[213]->cant>=$lugares[213]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[213]->id_lugar;?>" title="<?=$lugares[213]->cant;?>/<?=$lugares[213]->cantidad;?>">2.20</div>		
							<div class="col-xs-1 lugar <?php if($lugares[214]->cant>=$lugares[214]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[214]->id_lugar;?>" title="<?=$lugares[214]->cant;?>/<?=$lugares[214]->cantidad;?>">2.00</div>
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[215]->cant>=$lugares[215]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[215]->id_lugar;?>" title="<?=$lugares[215]->cant;?>/<?=$lugares[215]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[216]->cant>=$lugares[216]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[216]->id_lugar;?>" title="<?=$lugares[216]->cant;?>/<?=$lugares[216]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[217]->cant>=$lugares[217]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[217]->id_lugar;?>" title="<?=$lugares[217]->cant;?>/<?=$lugares[217]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[218]->cant>=$lugares[218]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[218]->id_lugar;?>" title="<?=$lugares[218]->cant;?>/<?=$lugares[218]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[219]->cant>=$lugares[219]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[219]->id_lugar;?>" title="<?=$lugares[219]->cant;?>/<?=$lugares[219]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[220]->cant>=$lugares[220]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[220]->id_lugar;?>" title="<?=$lugares[220]->cant;?>/<?=$lugares[220]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[221]->cant>=$lugares[221]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[221]->id_lugar;?>" title="<?=$lugares[221]->cant;?>/<?=$lugares[221]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[222]->cant>=$lugares[222]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[222]->id_lugar;?>" title="<?=$lugares[222]->cant;?>/<?=$lugares[222]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[223]->cant>=$lugares[223]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[223]->id_lugar;?>" title="<?=$lugares[223]->cant;?>/<?=$lugares[223]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[224]->cant>=$lugares[224]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[224]->id_lugar;?>" title="<?=$lugares[224]->cant;?>/<?=$lugares[224]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[225]->cant>=$lugares[225]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[225]->id_lugar;?>" title="<?=$lugares[225]->cant;?>/<?=$lugares[225]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[226]->cant>=$lugares[226]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[226]->id_lugar;?>" title="<?=$lugares[226]->cant;?>/<?=$lugares[226]->cantidad;?>">2.20</div>		
							<div class="col-xs-1 lugar <?php if($lugares[227]->cant>=$lugares[227]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="<?=$lugares[227]->id_lugar;?>" title="<?=$lugares[227]->cant;?>/<?=$lugares[227]->cantidad;?>">2.00</div>
						</div>
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
				return '<form  action="<?= base_url(); ?>deposito/ingreso" method="POST">Ingreso: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" value='+$(this).attr("id") +' name="lugar"><input style="width:50px;" type="number" name="cant" min="1"> <button type="submit" class="btn btn-primary btn-xs">Ok</button></form><hr><form  action="<?= base_url(); ?>deposito/egreso" method="POST">Despacho: <input type="hidden" value='+$(this).attr("id") +' name="lugar"><input style="width:50px;" type="number" name="cant" min="1"> <button type="submit" class="btn btn-primary btn-xs">Ok</button></form>';
			}
		});	
		$('div.lugar').tooltip({placement: "top"});	

		if(<?=$mensaje;?>== 1) alert('Registrado con exito');		
		if(<?=$mensaje;?>== 2) alert('Número incorrecto');		
	});

	$('body').on('click', function (e) {
		$('div.lugar').tooltip('hide');
		$("div.lugar").each(function () {
			if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				$(this).popover('hide');
			}
		});
	});
</script>	
</body>
</html>