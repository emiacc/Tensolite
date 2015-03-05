<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>404 Error Page</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
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
	<!-- begin #page-container -->
	<div id="page-container" class="">
	    <!-- begin error -->
        <div class="error">
            <div class="error-code m-b-10">404 <i class="fa fa-warning"></i></div>
            <div class="error-content">
                <div class="error-message">No pudimos encontrarlo...</div>
                <div class="error-desc m-b-20">
                    La página que estás buscando no existe.
                </div>
                <div>
                    <a href="<?= base_url(); ?>resumen" class="btn btn-success">Volver al Inicio</a>
                </div>
            </div>
        </div>
        <!-- end error -->
     </div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?= base_url(); ?>assets/plugins/jquery-1.8.2/jquery-1.8.2.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/bootstrap-3.2.0/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?= base_url(); ?>assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?= base_url(); ?>assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?= base_url(); ?>assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?= base_url(); ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->	
</body>
</html>

