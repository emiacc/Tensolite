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
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.1" title="<?=$lugares[0]->cant;?>/<?=$lugares[0]->cantidad;?>">6.80</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.2" title="<?=$lugares[1]->cant;?>/<?=$lugares[1]->cantidad;?>">6.60</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.3" title="<?=$lugares[2]->cant;?>/<?=$lugares[2]->cantidad;?>">6.20</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.4" title="<?=$lugares[3]->cant;?>/<?=$lugares[3]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.5" title="<?=$lugares[4]->cant;?>/<?=$lugares[4]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar <?php if($lugares[5]->cant==$lugares[5]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.2.1" title="<?=$lugares[5]->cant;?>/<?=$lugares[5]->cantidad;?>">6.80</div>
							<div class="col-xs-2 lugar <?php if($lugares[6]->cant==$lugares[6]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.2.2" title="<?=$lugares[6]->cant;?>/<?=$lugares[6]->cantidad;?>">6.60</div>
							<div class="col-xs-2 lugar <?php if($lugares[7]->cant==$lugares[7]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.2.3" title="<?=$lugares[7]->cant;?>/<?=$lugares[7]->cantidad;?>">6.20</div>
							<div class="col-xs-2 lugar <?php if($lugares[8]->cant==$lugares[8]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.2.4" title="<?=$lugares[8]->cant;?>/<?=$lugares[8]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[9]->cant==$lugares[9]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.2.5" title="<?=$lugares[9]->cant;?>/<?=$lugares[9]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris" id="s1.3.1" title="<?=$lugares[10]->cant;?>/<?=$lugares[10]->cantidad;?>">7.20</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.3.2" title="<?=$lugares[11]->cant;?>/<?=$lugares[11]->cantidad;?>">7.00</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.3.3" title="<?=$lugares[12]->cant;?>/<?=$lugares[12]->cantidad;?>">6.40</div>
							<div class="col-xs-2 lugar <?php if($lugares[13]->cant==$lugares[13]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.3.4" title="<?=$lugares[13]->cant;?>/<?=$lugares[13]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[14]->cant==$lugares[14]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.3.5" title="<?=$lugares[14]->cant;?>/<?=$lugares[14]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar <?php if($lugares[15]->cant==$lugares[15]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.4.1" title="<?=$lugares[15]->cant;?>/<?=$lugares[15]->cantidad;?>">7.20</div>
							<div class="col-xs-2 lugar <?php if($lugares[16]->cant==$lugares[16]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.4.2" title="<?=$lugares[16]->cant;?>/<?=$lugares[16]->cantidad;?>">7.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[17]->cant==$lugares[17]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.4.3" title="<?=$lugares[17]->cant;?>/<?=$lugares[17]->cantidad;?>">6.40</div>
							<div class="col-xs-2 lugar <?php if($lugares[18]->cant==$lugares[18]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.4.4" title="<?=$lugares[18]->cant;?>/<?=$lugares[18]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[19]->cant==$lugares[19]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.4.5" title="<?=$lugares[19]->cant;?>/<?=$lugares[19]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris" id="s1.5.1" title="<?=$lugares[20]->cant;?>/<?=$lugares[20]->cantidad;?>">6.80</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.5.2" title="<?=$lugares[21]->cant;?>/<?=$lugares[21]->cantidad;?>">6.60</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.5.3" title="<?=$lugares[22]->cant;?>/<?=$lugares[22]->cantidad;?>">6.20</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.5.4" title="<?=$lugares[23]->cant;?>/<?=$lugares[23]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.5.5" title="<?=$lugares[24]->cant;?>/<?=$lugares[24]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar <?php if($lugares[25]->cant==$lugares[25]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.6.1" title="<?=$lugares[25]->cant;?>/<?=$lugares[25]->cantidad;?>">6.80</div>
							<div class="col-xs-2 lugar <?php if($lugares[26]->cant==$lugares[26]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.6.2" title="<?=$lugares[26]->cant;?>/<?=$lugares[26]->cantidad;?>">6.60</div>
							<div class="col-xs-2 lugar <?php if($lugares[27]->cant==$lugares[27]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.6.3" title="<?=$lugares[27]->cant;?>/<?=$lugares[27]->cantidad;?>">6.20</div>
							<div class="col-xs-2 lugar <?php if($lugares[28]->cant==$lugares[28]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.6.4" title="<?=$lugares[28]->cant;?>/<?=$lugares[28]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[29]->cant==$lugares[29]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.6.5" title="<?=$lugares[29]->cant;?>/<?=$lugares[29]->cantidad;?>">5.80</div>
						</div>	
						<div class="row">
							<div class="col-xs-2 lugar lugar-gris" id="s1.7.1" title="<?=$lugares[30]->cant;?>/<?=$lugares[30]->cantidad;?>">7.20</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.7.2" title="<?=$lugares[31]->cant;?>/<?=$lugares[31]->cantidad;?>">7.00</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.7.3" title="<?=$lugares[32]->cant;?>/<?=$lugares[32]->cantidad;?>">6.40</div>
							<div class="col-xs-2 lugar <?php if($lugares[33]->cant==$lugares[33]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.7.4" title="<?=$lugares[33]->cant;?>/<?=$lugares[33]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[34]->cant==$lugares[34]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.7.5" title="<?=$lugares[34]->cant;?>/<?=$lugares[34]->cantidad;?>">5.80</div>
						</div>
						<div class="row">
							<div class="col-xs-2 lugar <?php if($lugares[35]->cant==$lugares[35]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.8.1" title="<?=$lugares[35]->cant;?>/<?=$lugares[35]->cantidad;?>">7.20</div>
							<div class="col-xs-2 lugar <?php if($lugares[36]->cant==$lugares[36]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.8.2" title="<?=$lugares[36]->cant;?>/<?=$lugares[36]->cantidad;?>">7.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[37]->cant==$lugares[37]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.8.3" title="<?=$lugares[37]->cant;?>/<?=$lugares[37]->cantidad;?>">6.40</div>
							<div class="col-xs-2 lugar <?php if($lugares[38]->cant==$lugares[38]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.8.4" title="<?=$lugares[38]->cant;?>/<?=$lugares[38]->cantidad;?>">6.00</div>
							<div class="col-xs-2 lugar <?php if($lugares[39]->cant==$lugares[39]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s1.8.5" title="<?=$lugares[39]->cant;?>/<?=$lugares[39]->cantidad;?>">5.80</div>
						</div>								
					</div> 
					<!-- Sector 2 -->
					<div class="tab-pane fade" id="tab-sector-2">
						<h3 class="text-center">Sector 2</h3>
						<div class="row">
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.1" title="<?=$lugares[40]->cant;?>/<?=$lugares[40]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.2" title="<?=$lugares[41]->cant;?>/<?=$lugares[41]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.3" title="<?=$lugares[42]->cant;?>/<?=$lugares[42]->cantidad;?>">5.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.4" title="<?=$lugares[43]->cant;?>/<?=$lugares[43]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.5" title="<?=$lugares[44]->cant;?>/<?=$lugares[44]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.6" title="<?=$lugares[45]->cant;?>/<?=$lugares[45]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.7" title="<?=$lugares[46]->cant;?>/<?=$lugares[46]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.8" title="<?=$lugares[47]->cant;?>/<?=$lugares[47]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.9" title="<?=$lugares[48]->cant;?>/<?=$lugares[48]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.10" title="<?=$lugares[49]->cant;?>/<?=$lugares[49]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.11" title="<?=$lugares[50]->cant;?>/<?=$lugares[50]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[51]->cant==$lugares[51]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.1" title="<?=$lugares[51]->cant;?>/<?=$lugares[51]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[52]->cant==$lugares[52]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.2" title="<?=$lugares[52]->cant;?>/<?=$lugares[52]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[53]->cant==$lugares[53]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.3" title="<?=$lugares[53]->cant;?>/<?=$lugares[53]->cantidad;?>">5.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[54]->cant==$lugares[54]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.4" title="<?=$lugares[54]->cant;?>/<?=$lugares[54]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[55]->cant==$lugares[55]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.5" title="<?=$lugares[55]->cant;?>/<?=$lugares[55]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[56]->cant==$lugares[56]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.6" title="<?=$lugares[56]->cant;?>/<?=$lugares[56]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[57]->cant==$lugares[57]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.7" title="<?=$lugares[57]->cant;?>/<?=$lugares[57]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[58]->cant==$lugares[58]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.8" title="<?=$lugares[58]->cant;?>/<?=$lugares[58]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[59]->cant==$lugares[59]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.9" title="<?=$lugares[59]->cant;?>/<?=$lugares[59]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[60]->cant==$lugares[60]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.10" title="<?=$lugares[60]->cant;?>/<?=$lugares[60]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[61]->cant==$lugares[61]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.2.11" title="<?=$lugares[61]->cant;?>/<?=$lugares[61]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[62]->cant==$lugares[62]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.1" title="<?=$lugares[62]->cant;?>/<?=$lugares[62]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[63]->cant==$lugares[63]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.2" title="<?=$lugares[63]->cant;?>/<?=$lugares[63]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[64]->cant==$lugares[64]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.3" title="<?=$lugares[64]->cant;?>/<?=$lugares[64]->cantidad;?>">5.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[65]->cant==$lugares[65]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.4" title="<?=$lugares[65]->cant;?>/<?=$lugares[65]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[66]->cant==$lugares[66]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.5" title="<?=$lugares[66]->cant;?>/<?=$lugares[66]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[67]->cant==$lugares[67]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.6" title="<?=$lugares[67]->cant;?>/<?=$lugares[67]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[68]->cant==$lugares[68]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.7" title="<?=$lugares[68]->cant;?>/<?=$lugares[68]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[69]->cant==$lugares[69]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.8" title="<?=$lugares[69]->cant;?>/<?=$lugares[69]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[70]->cant==$lugares[70]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.9" title="<?=$lugares[70]->cant;?>/<?=$lugares[70]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[71]->cant==$lugares[71]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.10" title="<?=$lugares[71]->cant;?>/<?=$lugares[71]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[72]->cant==$lugares[72]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.3.11" title="<?=$lugares[72]->cant;?>/<?=$lugares[72]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[73]->cant==$lugares[73]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.1" title="<?=$lugares[73]->cant;?>/<?=$lugares[73]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[74]->cant==$lugares[74]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.2" title="<?=$lugares[74]->cant;?>/<?=$lugares[74]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[75]->cant==$lugares[75]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.3" title="<?=$lugares[75]->cant;?>/<?=$lugares[75]->cantidad;?>">5.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[76]->cant==$lugares[76]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.4" title="<?=$lugares[76]->cant;?>/<?=$lugares[76]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[77]->cant==$lugares[77]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.5" title="<?=$lugares[77]->cant;?>/<?=$lugares[77]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[78]->cant==$lugares[78]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.6" title="<?=$lugares[78]->cant;?>/<?=$lugares[78]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[79]->cant==$lugares[79]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.7" title="<?=$lugares[79]->cant;?>/<?=$lugares[79]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[80]->cant==$lugares[80]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.8" title="<?=$lugares[80]->cant;?>/<?=$lugares[80]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[81]->cant==$lugares[81]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.9" title="<?=$lugares[81]->cant;?>/<?=$lugares[81]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[82]->cant==$lugares[82]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.10" title="<?=$lugares[82]->cant;?>/<?=$lugares[82]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[83]->cant==$lugares[83]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.4.11" title="<?=$lugares[83]->cant;?>/<?=$lugares[83]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.1" title="<?=$lugares[84]->cant;?>/<?=$lugares[84]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.2" title="<?=$lugares[85]->cant;?>/<?=$lugares[85]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.3" title="<?=$lugares[86]->cant;?>/<?=$lugares[86]->cantidad;?>">4.50</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.4" title="<?=$lugares[87]->cant;?>/<?=$lugares[87]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.5" title="<?=$lugares[88]->cant;?>/<?=$lugares[88]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.6" title="<?=$lugares[89]->cant;?>/<?=$lugares[89]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.7" title="<?=$lugares[90]->cant;?>/<?=$lugares[90]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.8" title="<?=$lugares[91]->cant;?>/<?=$lugares[91]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.9" title="<?=$lugares[92]->cant;?>/<?=$lugares[92]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.10" title="<?=$lugares[93]->cant;?>/<?=$lugares[93]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.11" title="<?=$lugares[94]->cant;?>/<?=$lugares[94]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[95]->cant==$lugares[95]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.1" title="<?=$lugares[95]->cant;?>/<?=$lugares[95]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[96]->cant==$lugares[96]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.2" title="<?=$lugares[96]->cant;?>/<?=$lugares[96]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[97]->cant==$lugares[97]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.3" title="<?=$lugares[97]->cant;?>/<?=$lugares[97]->cantidad;?>">4.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[98]->cant==$lugares[98]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.4" title="<?=$lugares[98]->cant;?>/<?=$lugares[98]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[99]->cant==$lugares[99]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.5" title="<?=$lugares[99]->cant;?>/<?=$lugares[99]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[100]->cant==$lugares[100]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.6" title="<?=$lugares[100]->cant;?>/<?=$lugares[100]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[101]->cant==$lugares[101]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.7" title="<?=$lugares[101]->cant;?>/<?=$lugares[101]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[102]->cant==$lugares[102]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.8" title="<?=$lugares[102]->cant;?>/<?=$lugares[102]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[103]->cant==$lugares[103]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.9" title="<?=$lugares[103]->cant;?>/<?=$lugares[103]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[104]->cant==$lugares[104]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.10" title="<?=$lugares[104]->cant;?>/<?=$lugares[104]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[105]->cant==$lugares[105]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.6.11" title="<?=$lugares[105]->cant;?>/<?=$lugares[105]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[106]->cant==$lugares[106]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.1" title="<?=$lugares[106]->cant;?>/<?=$lugares[106]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[107]->cant==$lugares[107]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.2" title="<?=$lugares[107]->cant;?>/<?=$lugares[107]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[108]->cant==$lugares[108]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.3" title="<?=$lugares[108]->cant;?>/<?=$lugares[108]->cantidad;?>">4.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[109]->cant==$lugares[109]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.4" title="<?=$lugares[109]->cant;?>/<?=$lugares[109]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[110]->cant==$lugares[110]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.5" title="<?=$lugares[110]->cant;?>/<?=$lugares[110]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[111]->cant==$lugares[111]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.6" title="<?=$lugares[111]->cant;?>/<?=$lugares[111]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[112]->cant==$lugares[112]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.7" title="<?=$lugares[112]->cant;?>/<?=$lugares[112]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[113]->cant==$lugares[113]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.8" title="<?=$lugares[113]->cant;?>/<?=$lugares[113]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[114]->cant==$lugares[114]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.9" title="<?=$lugares[114]->cant;?>/<?=$lugares[114]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[115]->cant==$lugares[115]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.10" title="<?=$lugares[115]->cant;?>/<?=$lugares[115]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[116]->cant==$lugares[116]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.7.11" title="<?=$lugares[116]->cant;?>/<?=$lugares[116]->cantidad;?>">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar <?php if($lugares[117]->cant==$lugares[117]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.1" title="<?=$lugares[117]->cant;?>/<?=$lugares[117]->cantidad;?>">5.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[118]->cant==$lugares[118]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.2" title="<?=$lugares[118]->cant;?>/<?=$lugares[118]->cantidad;?>">5.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[119]->cant==$lugares[119]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.3" title="<?=$lugares[119]->cant;?>/<?=$lugares[119]->cantidad;?>">4.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[120]->cant==$lugares[120]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.4" title="<?=$lugares[120]->cant;?>/<?=$lugares[120]->cantidad;?>">5.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[121]->cant==$lugares[121]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.5" title="<?=$lugares[121]->cant;?>/<?=$lugares[121]->cantidad;?>">4.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[122]->cant==$lugares[122]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.6" title="<?=$lugares[122]->cant;?>/<?=$lugares[122]->cantidad;?>">4.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[123]->cant==$lugares[123]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.7" title="<?=$lugares[123]->cant;?>/<?=$lugares[123]->cantidad;?>">4.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[124]->cant==$lugares[124]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.8" title="<?=$lugares[124]->cant;?>/<?=$lugares[124]->cantidad;?>">4.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[125]->cant==$lugares[125]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.9" title="<?=$lugares[125]->cant;?>/<?=$lugares[125]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[126]->cant==$lugares[126]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.10" title="<?=$lugares[126]->cant;?>/<?=$lugares[126]->cantidad;?>">4.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[127]->cant==$lugares[127]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s2.8.11" title="<?=$lugares[127]->cant;?>/<?=$lugares[127]->cantidad;?>">3.80</div>							
						</div>	
					</div>
					<!-- Sector 3 -->
					<div class="tab-pane fade" id="tab-sector-3">
						<h3 class="text-center">Sector 3</h3>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.1" title="<?=$lugares[128]->cant;?>/<?=$lugares[128]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.2" title="<?=$lugares[129]->cant;?>/<?=$lugares[129]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.3" title="<?=$lugares[130]->cant;?>/<?=$lugares[130]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.4" title="<?=$lugares[131]->cant;?>/<?=$lugares[131]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.5" title="<?=$lugares[132]->cant;?>/<?=$lugares[132]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.6" title="<?=$lugares[133]->cant;?>/<?=$lugares[133]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.7" title="<?=$lugares[134]->cant;?>/<?=$lugares[134]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.8" title="<?=$lugares[135]->cant;?>/<?=$lugares[135]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.9" title="<?=$lugares[136]->cant;?>/<?=$lugares[136]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.10" title="<?=$lugares[137]->cant;?>/<?=$lugares[137]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.11" title="<?=$lugares[138]->cant;?>/<?=$lugares[138]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.12" title="<?=$lugares[139]->cant;?>/<?=$lugares[139]->cantidad;?>">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[140]->cant==$lugares[140]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.1" title="<?=$lugares[140]->cant;?>/<?=$lugares[140]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[141]->cant==$lugares[141]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.2" title="<?=$lugares[141]->cant;?>/<?=$lugares[141]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[142]->cant==$lugares[142]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.3" title="<?=$lugares[142]->cant;?>/<?=$lugares[142]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[143]->cant==$lugares[143]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.4" title="<?=$lugares[143]->cant;?>/<?=$lugares[143]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[144]->cant==$lugares[144]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.5" title="<?=$lugares[144]->cant;?>/<?=$lugares[144]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[145]->cant==$lugares[145]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.6" title="<?=$lugares[145]->cant;?>/<?=$lugares[145]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[146]->cant==$lugares[146]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.7" title="<?=$lugares[146]->cant;?>/<?=$lugares[146]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[147]->cant==$lugares[147]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.8" title="<?=$lugares[147]->cant;?>/<?=$lugares[147]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[148]->cant==$lugares[148]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.9" title="<?=$lugares[148]->cant;?>/<?=$lugares[148]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[149]->cant==$lugares[149]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.10" title="<?=$lugares[149]->cant;?>/<?=$lugares[149]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[150]->cant==$lugares[150]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.11" title="<?=$lugares[150]->cant;?>/<?=$lugares[150]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[151]->cant==$lugares[151]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.2.12" title="<?=$lugares[151]->cant;?>/<?=$lugares[151]->cantidad;?>">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[152]->cant==$lugares[152]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.1" title="<?=$lugares[152]->cant;?>/<?=$lugares[152]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[153]->cant==$lugares[153]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.2" title="<?=$lugares[153]->cant;?>/<?=$lugares[153]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[154]->cant==$lugares[154]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.3" title="<?=$lugares[154]->cant;?>/<?=$lugares[154]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[155]->cant==$lugares[155]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.4" title="<?=$lugares[155]->cant;?>/<?=$lugares[155]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[156]->cant==$lugares[156]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.5" title="<?=$lugares[156]->cant;?>/<?=$lugares[156]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[157]->cant==$lugares[157]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.6" title="<?=$lugares[157]->cant;?>/<?=$lugares[157]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[158]->cant==$lugares[158]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.7" title="<?=$lugares[158]->cant;?>/<?=$lugares[158]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[159]->cant==$lugares[159]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.8" title="<?=$lugares[159]->cant;?>/<?=$lugares[159]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[160]->cant==$lugares[160]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.9" title="<?=$lugares[160]->cant;?>/<?=$lugares[160]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[161]->cant==$lugares[161]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.10" title="<?=$lugares[161]->cant;?>/<?=$lugares[161]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[162]->cant==$lugares[162]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.11" title="<?=$lugares[162]->cant;?>/<?=$lugares[162]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[163]->cant==$lugares[163]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.12" title="<?=$lugares[163]->cant;?>/<?=$lugares[163]->cantidad;?>">2.20</div>		
							<div class="col-xs-1 lugar <?php if($lugares[164]->cant==$lugares[164]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.3.13" title="<?=$lugares[164]->cant;?>/<?=$lugares[164]->cantidad;?>">2.00</div>
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[165]->cant==$lugares[165]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.1" title="<?=$lugares[165]->cant;?>/<?=$lugares[165]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[166]->cant==$lugares[166]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.2" title="<?=$lugares[166]->cant;?>/<?=$lugares[166]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[167]->cant==$lugares[167]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.3" title="<?=$lugares[167]->cant;?>/<?=$lugares[167]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[168]->cant==$lugares[168]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.4" title="<?=$lugares[168]->cant;?>/<?=$lugares[168]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[169]->cant==$lugares[169]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.5" title="<?=$lugares[169]->cant;?>/<?=$lugares[169]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[170]->cant==$lugares[170]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.6" title="<?=$lugares[170]->cant;?>/<?=$lugares[170]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[171]->cant==$lugares[171]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.7" title="<?=$lugares[171]->cant;?>/<?=$lugares[171]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[172]->cant==$lugares[172]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.8" title="<?=$lugares[172]->cant;?>/<?=$lugares[172]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[173]->cant==$lugares[173]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.9" title="<?=$lugares[173]->cant;?>/<?=$lugares[173]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[174]->cant==$lugares[174]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.10" title="<?=$lugares[174]->cant;?>/<?=$lugares[174]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[175]->cant==$lugares[175]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.11" title="<?=$lugares[175]->cant;?>/<?=$lugares[175]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[176]->cant==$lugares[176]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.12" title="<?=$lugares[176]->cant;?>/<?=$lugares[176]->cantidad;?>">2.20</div>		
							<div class="col-xs-1 lugar <?php if($lugares[177]->cant==$lugares[177]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.4.13" title="<?=$lugares[177]->cant;?>/<?=$lugares[177]->cantidad;?>">2.00</div>
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.1" title="<?=$lugares[178]->cant;?>/<?=$lugares[178]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.2" title="<?=$lugares[179]->cant;?>/<?=$lugares[179]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.3" title="<?=$lugares[180]->cant;?>/<?=$lugares[180]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.4" title="<?=$lugares[181]->cant;?>/<?=$lugares[181]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.5" title="<?=$lugares[182]->cant;?>/<?=$lugares[182]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.6" title="<?=$lugares[183]->cant;?>/<?=$lugares[183]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.7" title="<?=$lugares[184]->cant;?>/<?=$lugares[184]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.8" title="<?=$lugares[185]->cant;?>/<?=$lugares[185]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.9" title="<?=$lugares[186]->cant;?>/<?=$lugares[186]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.10" title="<?=$lugares[187]->cant;?>/<?=$lugares[187]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.11" title="<?=$lugares[188]->cant;?>/<?=$lugares[188]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.12" title="<?=$lugares[189]->cant;?>/<?=$lugares[189]->cantidad;?>">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[190]->cant==$lugares[190]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.1" title="<?=$lugares[190]->cant;?>/<?=$lugares[190]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[191]->cant==$lugares[191]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.2" title="<?=$lugares[191]->cant;?>/<?=$lugares[191]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[192]->cant==$lugares[192]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.3" title="<?=$lugares[192]->cant;?>/<?=$lugares[192]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[193]->cant==$lugares[193]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.4" title="<?=$lugares[193]->cant;?>/<?=$lugares[193]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[194]->cant==$lugares[194]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.5" title="<?=$lugares[194]->cant;?>/<?=$lugares[194]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[195]->cant==$lugares[195]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.6" title="<?=$lugares[195]->cant;?>/<?=$lugares[195]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[196]->cant==$lugares[196]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.7" title="<?=$lugares[196]->cant;?>/<?=$lugares[196]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[197]->cant==$lugares[197]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.8" title="<?=$lugares[197]->cant;?>/<?=$lugares[197]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[198]->cant==$lugares[198]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.9" title="<?=$lugares[198]->cant;?>/<?=$lugares[198]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[199]->cant==$lugares[199]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.10" title="<?=$lugares[199]->cant;?>/<?=$lugares[199]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[200]->cant==$lugares[200]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.11" title="<?=$lugares[200]->cant;?>/<?=$lugares[200]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[201]->cant==$lugares[201]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.6.12" title="<?=$lugares[201]->cant;?>/<?=$lugares[201]->cantidad;?>">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[202]->cant==$lugares[202]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.1" title="<?=$lugares[202]->cant;?>/<?=$lugares[202]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[203]->cant==$lugares[203]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.2" title="<?=$lugares[203]->cant;?>/<?=$lugares[203]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[204]->cant==$lugares[204]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.3" title="<?=$lugares[204]->cant;?>/<?=$lugares[204]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[205]->cant==$lugares[205]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.4" title="<?=$lugares[205]->cant;?>/<?=$lugares[205]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[206]->cant==$lugares[206]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.5" title="<?=$lugares[206]->cant;?>/<?=$lugares[206]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[207]->cant==$lugares[207]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.6" title="<?=$lugares[207]->cant;?>/<?=$lugares[207]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[208]->cant==$lugares[208]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.7" title="<?=$lugares[208]->cant;?>/<?=$lugares[208]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[209]->cant==$lugares[209]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.8" title="<?=$lugares[209]->cant;?>/<?=$lugares[209]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[210]->cant==$lugares[210]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.9" title="<?=$lugares[210]->cant;?>/<?=$lugares[210]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[211]->cant==$lugares[211]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.10" title="<?=$lugares[211]->cant;?>/<?=$lugares[211]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[212]->cant==$lugares[212]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.11" title="<?=$lugares[212]->cant;?>/<?=$lugares[212]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[213]->cant==$lugares[213]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.12" title="<?=$lugares[213]->cant;?>/<?=$lugares[213]->cantidad;?>">2.20</div>		
							<div class="col-xs-1 lugar <?php if($lugares[214]->cant==$lugares[214]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.7.13" title="<?=$lugares[214]->cant;?>/<?=$lugares[214]->cantidad;?>">2.00</div>
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar <?php if($lugares[215]->cant==$lugares[215]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.1" title="<?=$lugares[215]->cant;?>/<?=$lugares[215]->cantidad;?>">3.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[216]->cant==$lugares[216]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.2" title="<?=$lugares[216]->cant;?>/<?=$lugares[216]->cantidad;?>">3.50</div>
							<div class="col-xs-1 lugar <?php if($lugares[217]->cant==$lugares[217]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.3" title="<?=$lugares[217]->cant;?>/<?=$lugares[217]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[218]->cant==$lugares[218]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.4" title="<?=$lugares[218]->cant;?>/<?=$lugares[218]->cantidad;?>">3.40</div>
							<div class="col-xs-1 lugar <?php if($lugares[219]->cant==$lugares[219]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.5" title="<?=$lugares[219]->cant;?>/<?=$lugares[219]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[220]->cant==$lugares[220]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.6" title="<?=$lugares[220]->cant;?>/<?=$lugares[220]->cantidad;?>">3.20</div>
							<div class="col-xs-1 lugar <?php if($lugares[221]->cant==$lugares[221]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.7" title="<?=$lugares[221]->cant;?>/<?=$lugares[221]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[222]->cant==$lugares[222]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.8" title="<?=$lugares[222]->cant;?>/<?=$lugares[222]->cantidad;?>">3.00</div>
							<div class="col-xs-1 lugar <?php if($lugares[223]->cant==$lugares[223]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.9" title="<?=$lugares[223]->cant;?>/<?=$lugares[223]->cantidad;?>">2.80</div>
							<div class="col-xs-1 lugar <?php if($lugares[224]->cant==$lugares[224]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.10" title="<?=$lugares[224]->cant;?>/<?=$lugares[224]->cantidad;?>">2.60</div>
							<div class="col-xs-1 lugar <?php if($lugares[225]->cant==$lugares[225]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.11" title="<?=$lugares[225]->cant;?>/<?=$lugares[225]->cantidad;?>">2.40</div>		
							<div class="col-xs-1 lugar <?php if($lugares[226]->cant==$lugares[226]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.12" title="<?=$lugares[226]->cant;?>/<?=$lugares[226]->cantidad;?>">2.20</div>		
							<div class="col-xs-1 lugar <?php if($lugares[227]->cant==$lugares[227]->cantidad) echo 'lugar-verde'; else echo 'lugar-rojo'; ?>" id="s3.8.13" title="<?=$lugares[227]->cant;?>/<?=$lugares[227]->cantidad;?>">2.00</div>
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
				return '<form><input type="hidden" value='+$(this).attr("id") +' name="lugar"><input style="width:50px;" type="number" name="cant"> <button type="submit" class="btn btn-primary btn-xs">Ok</button></form>';
			}
		});	
		$('div.lugar').tooltip({placement: "top"});	
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