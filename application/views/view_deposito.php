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
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.1">6.80</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.2">6.60</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.3">6.20</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.4">6.00</div>
							<div class="col-xs-2 lugar lugar-gris" id="s1.1.5">5.80</div>
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
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.1">5.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.2">5.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.3">5.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.4">5.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.5">4.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.6">4.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.7">4.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.8">4.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.9">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.10">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.1.11">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar lugar-verde" id="s2.2.1">5.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.2.2">5.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.2.3">5.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.2.4">5.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.2.5">4.80</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.2.6">4.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.2.7">4.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.2.8">4.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.2.9">4.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.2.10">4.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.2.11">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar lugar-verde" id="s2.3.1">5.60</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.3.2">5.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.3.3">5.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.3.4">5.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.3.5">4.80</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.3.6">4.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.3.7">4.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.3.8">4.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.3.9">4.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.3.10">4.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.3.11">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar lugar-verde" id="s2.4.1">5.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.4.2">5.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.4.3">5.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.4.4">5.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.4.5">4.80</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.4.6">4.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.4.7">4.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.4.8">4.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.4.9">4.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.4.10">4.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.4.11">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.1">5.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.2">5.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.3">4.50</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.4">5.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.5">4.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.6">4.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.7">4.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.8">4.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.9">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.10">4.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s2.5.11">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar lugar-verde" id="s2.6.1">5.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.6.2">5.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.6.3">4.50</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.6.4">5.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.6.5">4.80</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.6.6">4.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.6.7">4.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.6.8">4.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.6.9">4.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.6.10">4.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.6.11">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar lugar-verde" id="s2.7.1">5.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.7.2">5.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.7.3">4.50</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.7.4">5.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.7.5">4.80</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.7.6">4.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.7.7">4.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.7.8">4.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.7.9">4.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.7.10">4.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.7.11">3.80</div>							
						</div>	
						<div class="row">
							<div class="col-xs-1 lugar lugar-verde" id="s2.8.1">5.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.8.2">5.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.8.3">4.50</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.8.4">5.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.8.5">4.80</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.8.6">4.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.8.7">4.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.8.8">4.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.8.9">4.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s2.8.10">4.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s2.8.11">3.80</div>							
						</div>	
					</div>
					<!-- Sector 3 -->
					<div class="tab-pane fade" id="tab-sector-3">
						<div class="row">							
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.1">3.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.2">3.50</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.3">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.4">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.5">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.6">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.7">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.8">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.9">2.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.10">2.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.11">2.40</div>		
							<div class="col-xs-1 lugar lugar-gris" id="s3.1.12">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-verde" id="s3.2.1">3.60</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.2.2">3.50</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.2.3">3.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.2.4">3.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.2.5">3.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.2.6">3.20</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.2.7">3.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.2.8">3.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.2.9">2.80</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.2.10">2.60</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.2.11">2.40</div>		
							<div class="col-xs-1 lugar lugar-verde" id="s3.2.12">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-rojo" id="s3.3.1">3.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.3.2">3.50</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.3.3">3.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.3.4">3.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.3.5">3.20</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.3.6">3.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.3.7">3.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.3.8">3.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.3.9">2.80</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.3.10">2.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.3.11">2.40</div>		
							<div class="col-xs-1 lugar lugar-rojo" id="s3.3.12">2.20</div>		
							<div class="col-xs-1 lugar lugar-verde" id="s3.3.13">2.00</div>
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-verde" id="s3.4.1">3.60</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.4.2">3.50</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.4.3">3.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.4.4">3.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.4.5">3.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.4.6">3.20</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.4.7">3.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.4.8">3.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.4.9">2.80</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.4.10">2.60</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.4.11">2.40</div>		
							<div class="col-xs-1 lugar lugar-verde" id="s3.4.12">2.20</div>		
							<div class="col-xs-1 lugar lugar-rojo" id="s3.4.13">2.00</div>
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.1">3.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.2">3.50</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.3">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.4">3.40</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.5">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.6">3.20</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.7">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.8">3.00</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.9">2.80</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.10">2.60</div>
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.11">2.40</div>		
							<div class="col-xs-1 lugar lugar-gris" id="s3.5.12">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-verde" id="s3.6.1">3.60</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.6.2">3.50</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.6.3">3.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.6.4">3.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.6.5">3.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.6.6">3.20</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.6.7">3.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.6.8">3.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.6.9">2.80</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.6.10">2.60</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.6.11">2.40</div>		
							<div class="col-xs-1 lugar lugar-verde" id="s3.6.12">2.20</div>		
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-rojo" id="s3.7.1">3.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.7.2">3.50</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.7.3">3.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.7.4">3.40</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.7.5">3.20</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.7.6">3.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.7.7">3.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.7.8">3.00</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.7.9">2.80</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.7.10">2.60</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.7.11">2.40</div>		
							<div class="col-xs-1 lugar lugar-rojo" id="s3.7.12">2.20</div>		
							<div class="col-xs-1 lugar lugar-verde" id="s3.7.13">2.00</div>
						</div>
						<div class="row">							
							<div class="col-xs-1 lugar lugar-verde" id="s3.8.1">3.60</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.8.2">3.50</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.8.3">3.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.8.4">3.40</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.8.5">3.20</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.8.6">3.20</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.8.7">3.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.8.8">3.00</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.8.9">2.80</div>
							<div class="col-xs-1 lugar lugar-verde" id="s3.8.10">2.60</div>
							<div class="col-xs-1 lugar lugar-rojo" id="s3.8.11">2.40</div>		
							<div class="col-xs-1 lugar lugar-verde" id="s3.8.12">2.20</div>		
							<div class="col-xs-1 lugar lugar-rojo" id="s3.8.13">2.00</div>
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