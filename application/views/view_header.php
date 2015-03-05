<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Tensolite</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="Emiliano Scavuzzo" name="author" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.ico" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/plugins/jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>assets/plugins/bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>assets/css/style.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand">
						<img src="<?= base_url(); ?>assets/img/logo.jpg" alt="" style="max-width: 110%;max-height: 110%;">
						Tensolite
					</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">1</span>
						</a>
						<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications</li>
                            
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left media-object bg-red"><i class="fa fa-bug"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left"><img src="<?= base_url(); ?>assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left"><img src="<?= base_url(); ?>assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left media-object bg-green"><i class="fa fa-plus"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                        	<li class="media">
                                <a href="javascript:;">
                                    <div class="pull-left media-object bg-blue"><i class="fa fa-envelope"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?= base_url(); ?>assets/img/user-4.jpg" alt="" /> 
							<span class="hidden-xs">Nombre</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Editar Perfil</a></li>
							<li class="divider"></li>
							<li><a href="<?= base_url() ?>login/cerrar_sesion">Cerrar Sesión</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		


		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="<?= base_url(); ?>assets/img/user-4.jpg" alt="" /></a>
						</div>
						<div class="info">
							Nombre
							<small>Cargo</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul id="ULsidebar" class="nav">
					<li class="nav-header">Navegación</li>
					
					<li id="LIresumen" class="active"><a href="<?= base_url(); ?>resumen"><i class="fa fa-laptop"></i><span>Resumen</span></a></li>

					<li id="LImateria" class="has-sub">
						<a href="javascript:;"><b class="caret pull-right"></b><i class="fa fa-cubes"></i>
						    <span>Materia Prima</span>
					    </a>
						<ul class="sub-menu">
						    <li id="LIcemento"><a href="<?= base_url(); ?>cemento">Cemento</a></li>
						    <li id="LIarena"><a href="<?= base_url(); ?>arena">Arena</a></li>
						    <li id="LIbinder"><a href="<?= base_url(); ?>binder">Binder</a></li>
						</ul>
					</li>

					<li id="LIproduccion"><a href="<?= base_url(); ?>produccion"><i class="fa fa-cogs"></i><span>Producción</span></a></li>	

					<li id="LIperdida" class="has-sub">
						<a href="javascript:;"><b class="caret pull-right"></b><i class="fa fa-toggle-down"></i>
						    <span>Pérdida</span>
					    </a>
						<ul class="sub-menu">
						    <li id="LIenplaya"><a href="<?= base_url(); ?>perdidaPlaya">En Playa</a></li>
						    <li id="LIenproduccion"><a href="<?= base_url(); ?>perdidaProduccion">En Producción</a></li>
						</ul>
					</li>

					<li id="LIrecuperacion"><a href="<?= base_url(); ?>recuperacion"><i class="fa fa-refresh"></i><span>Recuperación</span></a></li>

					<li id="LIdeposito"><a href="<?= base_url(); ?>deposito"><i class="fa fa-database"></i><span>Depósito</span></a></li>

					<li id="LIdespacho"><a href="<?= base_url(); ?>despacho"><i class="fa fa-truck"></i><span>Despacho</span></a></li>

					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->