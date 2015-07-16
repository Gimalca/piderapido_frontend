<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicon1s, etc. -->
    <meta charset="utf-8">
    <title>Zona Operadores - Pide Rápido</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- favicon1 -->
    <link rel="shortcut icon" href="assets/img/favicon1.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page sb-l-o sb-r-c">

    <div id="main">

        <!-- Start: Header -->
			<?php include ('layouts/header.php');?>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">

                <!-- Start: Sidebar Header -->
                <header class="sidebar-header">
                    <div class="user-menu">
                        <div class="row text-center mbn">
                            <div class="col-xs-4">
                                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                    <span class="glyphicons glyphicons-home"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                    <span class="glyphicons glyphicons-inbox"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                    <span class="glyphicons glyphicons-bell"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                    <span class="glyphicons glyphicons-imac"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="glyphicons glyphicons-settings"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                    <span class="glyphicons glyphicons-restart"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- End: Sidebar Header -->

                <!-- sidebar menu -->
                
				<?php include('layouts/menu.php'); ?>
				
              
            </div>
        </aside>

        <section id="content_wrapper">
            <section id="content" class=" pnanimated fadeIn">                
                <div class="table-layout">
                    <div class="w00 text-center pr30 hidden-xs" id="imagen">
                        <img src="assets/img/logos/kfclogo.png" class="responsive">
                    </div>
                    <br><br>
                    <h2 class="lh30 mt15">
                        Ajustes generales
                        <b class="text-primary">KFC - La Trinidad</b>
                    </h2>                    
                </div>                
                <!-- Admin-panels -->
                <div class="fade-onload">
                    <div class="row">
                        <div class="tray tray-center p25 va-t posr">
                            <div class="col-xs-6">
                                <!-- Store Owner Details -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title">Datos de Sucursal</span>
                                    </div>
                                    <div class="panel-body bg-light dark">
                                        <div class="admin-form">
                                            <div class="section row mb10">
                                                <label for="sucursal-rif" class="field-label col-md-4 text-center">RIF:</label>
                                                <div class="col-md-8">
                                                    <label for="account-name" class="field prepend-icon">
                                                        <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="RIF" readonly>
                                                        <label for="account-name" class="field-icon"><i class="fa fa-folder-open-o"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-email" class="field-label col-md-4 text-center">Persona de contacto</label>
                                                <div class="col-md-8">
                                                    <label for="account-email" class="field prepend-icon">
                                                        <input type="email" name="account-email" id="account-email" class="gui-input" placeholder="Nombre" readonly>
                                                        <label for="account-email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">Número - Franquiciado</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Telefono" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-phone"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">Direccion Fiscal</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Direccion Fiscal" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-building"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">Direccion Local</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Direccion Local" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-building"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">Horario</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Horario" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-clock-o"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">País</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="País" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-globe"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">Estado</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Estado" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-building"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">Municipio</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Municipio" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-home"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">Referencia</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Referencia" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">ID</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="N° 00000000" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-clipboard"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label for="account-phone" class="field-label col-md-4 text-center">ID Dispositivo</label>
                                                <div class="col-md-8">
                                                    <label for="account-phone" class="field prepend-icon">
                                                        <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="N° 000000" readonly>
                                                        <label for="account-phone" class="field-icon"><i class="fa fa-clipboard"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-12">
                                    <!-- Store Information -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">Correo(s) Electrónico(s)</span>
                                        </div>
                                        <div class="panel-body bg-light dark">
                                            <div class="admin-form">
                                                <div class="section row mb10">
                                                    <label for="account-name" class="field-label col-md-4 text-center">Correo Adm: </label>
                                                    <div class="col-md-8">
                                                        <label for="account-name" class="field prepend-icon">
                                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Email administrador" readonly>
                                                            <label for="account-name" class="field-icon"><i class="fa fa-envelope"></i>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="section row mb10">
                                                    <label for="account-name" class="field-label col-md-4 text-center">Usuario operativo: </label>
                                                    <div class="col-md-8">
                                                        <label for="account-name" class="field prepend-icon">
                                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Usuario" readonly>
                                                            <label for="account-name" class="field-icon"><i class="fa fa-male"></i>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="section row mb10">
                                                    <label for="account-name" class="field-label col-md-4 text-center">Correo Franquicia: </label>
                                                    <div class="col-md-8">
                                                        <label for="account-name" class="field prepend-icon">
                                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Email Franquicia" readonly>
                                                            <label for="account-name" class="field-icon"><i class="fa fa-envelope"></i>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">Contraseña</span>
                                        </div>
                                        <div class="panel-body bg-light dark">
                                            <div class="admin-form">
                                                <div class="section row mb10">
                                                    <label for="account-name" class="field-label col-md-4 text-center">Contraseña Actual: </label>
                                                    <div class="col-md-8">
                                                        <label for="account-name" class="field prepend-icon">
                                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Contraseña Usuario Administrador">
                                                            <label for="account-name" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="section row mb10">
                                                    <label for="account-name" class="field-label col-md-4 text-center">Nueva Contraseña: </label>
                                                    <div class="col-md-8">
                                                        <label for="account-name" class="field prepend-icon">
                                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Contraseña Franquimovil">
                                                            <label for="account-name" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="section row mb10">
                                                    <label for="account-name" class="field-label col-md-4 text-center">Repetir Contraseña nueva: </label>
                                                    <div class="col-md-8">
                                                        <label for="account-name" class="field prepend-icon">
                                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Repita Contraseña Franquimovil">
                                                            <label for="city" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                                            </label>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <center>
                                        <button class="btn btn-primary notification1" type="button" type="submit" data-note-style="success">Guardar Cambios</button>
                                        <a href="home.php">
                                            <button class="btn btn-danger notification2" type="button" type="submit" data-note-style="danger">Cancelar</button>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>                        
                    </div>        
                </div>
            </section>
        </section>

        <!-- Start: Content-Wrapper -->
        <!--section id="content_wrapper">
            <section id="content" class="animated fadeIn">
                <h2 class="lh30 mt15 text-center">
					Ajustes generales del
					<b class="text-primary">KFC - La Trinidad</b>
				</h2>
                <div class="admin-panels fade-onload sb-l-o-full">
                    <div class="row">
					    <div class="tray tray-center p25 va-t posr">
                            <div class="panel panel-primary panel-border top mt20 mb35">
                                <div class="panel-heading">
                                    <span class="panel-title">Franquicia</span>
                                </div>
                                <div class="panel-body bg-light dark">
                                    <div class="admin-form col-xs-6">
                                        <div class="section row mb10">
                                            <label for="account-name" class="field-label col-md-3 text-center">Nombre:</label>
                                            <div class="col-md-9">
                                                <label for="account-name" class="field prepend-icon">
                                                    <input type="text" name="account-name" id="account-name" class="gui-input" value="Nombre de la franquicia" readonly>
                                                    <label for="account-name" class="field-icon"><i class="fa fa-male"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="section row mb10">
                                            <label for="account-email" class="field-label col-md-3 text-center">Correo Electrónico:</label>
                                            <div class="col-md-9">
                                                <label for="account-email" class="field prepend-icon">
                                                    <input type="email" name="account-email" id="account-email" class="gui-input" value="owner@store.com" readonly>
                                                    <label for="account-email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="section row mb10">
                                            <label for="account-phone" class="field-label col-md-3 text-center">Telefono 1:</label>
                                            <div class="col-md-9">
                                                <label for="account-phone" class="field prepend-icon">
                                                    <input type="text" name="account-phone" id="account-phone" class="gui-input" value="888-888-8888" placeholder="" readonly>
                                                    <label for="account-phone" class="field-icon"><i class="fa fa-phone"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="section row mb10">
                                            <label for="account-phone" class="field-label col-md-3 text-center">Telefono 2:</label>
                                            <div class="col-md-9">
                                                <label for="account-phone" class="field prepend-icon">
                                                    <input type="text" name="account-phone" id="account-phone" class="gui-input" value="888-888-8888" placeholder="" readonly>
                                                    <label for="account-phone" class="field-icon"><i class="fa fa-phone"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-form col-xs-6">
                                        <div class="section row mb10">
                                            <label for="account-name" class="field-label col-md-3 text-center">Dirección: </label>
                                            <div class="col-md-9">
                                                <label for="account-name" class="field prepend-icon">
                                                    <input type="text" name="account-name" id="account-name" class="gui-input" value="Dirección" readonly>
                                                    <label for="account-name" class="field-icon"><i class="fa fa-home"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="section row mb10">
                                            <label for="account-name" class="field-label col-md-3 text-center">País: </label>
                                            <div class="col-md-9">
                                                <label for="account-name" class="field prepend-icon">
                                                    <input type="text" name="account-name" id="account-name" class="gui-input" value="País" readonly>
                                                    <label for="account-name" class="field-icon"><i class="fa fa-globe"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="section row mb10">
                                            <label for="account-name" class="field-label col-md-3 text-center">Ciudad: </label>
                                            <div class="col-md-9">
                                                <label for="account-name" class="field prepend-icon">
                                                    <input type="text" name="account-name" id="account-name" class="gui-input" value="Ciudad" readonly>
                                                    <label for="city" class="field-icon"><i class="fa fa-building-o"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="section row mb10">
                                            <label for="account-name" class="field-label col-md-3 text-center">Código Postal: </label>
                                            <div class="col-md-9">
                                                <label for="account-name" class="field prepend-icon">
                                                    <input type="text" name="account-name" id="account-name" class="gui-input" value="Código Postal" readonly>
                                                    <label for="zip" class="field-icon"><i class="fa fa-certificate"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary panel-border top mb35">
                                <div class="panel-heading">
                                    <span class="panel-title">Cambio de Contraseña</span>
                                </div>
                                <div class="panel-body bg-light dark">
                                    <div class="admin-form">
                                        <div class="section row mb10">
                                            <label for="account-name" class="field-label col-md-3 text-center">Contraseña Actual: </label>
                                            <div class="col-md-9">
                                                <label for="account-name" class="field prepend-icon">
                                                    <input type="text" name="account-name" id="account-name" class="gui-input" value="Contraseña Actual">
                                                    <label for="account-name" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="section row mb10">
                                            <label for="account-name" class="field-label col-md-3 text-center">Nueva Contraseña: </label>
                                            <div class="col-md-9">
                                                <label for="account-name" class="field prepend-icon">
                                                    <input type="text" name="account-name" id="account-name" class="gui-input" value="Nueva Contraseña">
                                                    <label for="account-name" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="section row mb10">
                                            <label for="account-name" class="field-label col-md-3 text-center">Repita la Nueva Contraseña: </label>
                                            <div class="col-md-9">
                                                <label for="account-name" class="field prepend-icon">
                                                    <input type="text" name="account-name" id="account-name" class="gui-input" value="Repita la Nueva Contraseña">
                                                    <label for="city" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-offset-9">
                                    <input class="btn btn-primary" type="submit" value="Guardar Cambios">
                                    <input class="btn btn-danger" type="submit" value="Cancelar">
                                </div>
                            </div>
				        </div>                        
                    </div>        
		        </div>
            </section>
        </section-->
        <!-- End: Content-Wrapper -->

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Page Plugins via CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <!-- Sparklines CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="vendor/plugins/daterange/daterangepicker.js"></script>
    <script type="text/javascript" src="vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/tagmanager/tagmanager.js"></script>

    <!-- Chart Plugins -->
    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="vendor/plugins/circles/circles.js"></script>
    <script type="text/javascript" src="vendor/plugins/raphael/raphael.js"></script>

    <!-- Holder js  -->
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Admin Panels  -->
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="assets/js/pages/widgets.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init({
                sbm: "sb-l-c",
            });

            // Init Demo JS
            Demo.init();

            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish 
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before 
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
            // 
            var Stacks = {
                stack_top_right: {
                    "dir1": "down",
                    "dir2": "left",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_top_left: {
                    "dir1": "down",
                    "dir2": "right",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_bottom_left: {
                    "dir1": "right",
                    "dir2": "up",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_bottom_right: {
                    "dir1": "left",
                    "dir2": "up",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_bar_top: {
                    "dir1": "down",
                    "dir2": "right",
                    "push": "top",
                    "spacing1": 0,
                    "spacing2": 0
                },
                stack_bar_bottom: {
                    "dir1": "up",
                    "dir2": "right",
                    "spacing1": 0,
                    "spacing2": 0
                },
                stack_context: {
                    "dir1": "down",
                    "dir2": "left",
                    "context": $("#stack-context")
                },
            }

            $('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                preserveGrid: true,
                mobile: false,
                callback: function() {
                    bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
                },
                onFinish: function() {
                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                    // Init the rest of the plugins now that the panels
                    // have had a chance to be moved and organized.
                    // It's less taxing to organize empty panels
                    demoHighCharts.init();
                    runVectorMaps();

                    // We also refresh any "in-view" waypoints to ensure
                    // the correct position is being calculated after the 
                    // Admin Panels plugin moved everything
                    Waypoint.refreshAll();

                },
                onSave: function() {
                    $(window).trigger('resize');
                }
            });

            // PNotify Plugin Event Init
            $('.notification1').click(function(e) {
                var noteStyle = $(this).data('note-style');
                var noteShadow = $(this).data('note-shadow');
                var noteOpacity = $(this).data('note-opacity');
                var noteStack = $(this).data('note-stack');
                var width = "290px";

                var noteStack = noteStack ? noteStack : "stack_top_right";
                var noteOpacity = noteOpacity ? noteOpacity : "1";

                function findWidth() {
                    if (noteStack == "stack_bar_top") {
                        return "100%";
                    }
                    if (noteStack == "stack_bar_bottom") {
                        return "70%";
                    } else {
                        return "290px";
                    }
                }

                new PNotify({
                    title: 'Cambios Guardados',
                    text: '',
                    shadow: noteShadow,
                    opacity: noteOpacity,
                    addclass: noteStack,
                    type: noteStyle,
                    stack: Stacks[noteStack],
                    width: findWidth(),
                    delay: 1400
                });

            });

            $('.notification2').click(function(e) {
                var noteStyle = $(this).data('note-style');
                var noteShadow = $(this).data('note-shadow');
                var noteOpacity = $(this).data('note-opacity');
                var noteStack = $(this).data('note-stack');
                var width = "290px";

                var noteStack = noteStack ? noteStack : "stack_top_right";
                var noteOpacity = noteOpacity ? noteOpacity : "1";

                function findWidth() {
                    if (noteStack == "stack_bar_top") {
                        return "100%";
                    }
                    if (noteStack == "stack_bar_bottom") {
                        return "70%";
                    } else {
                        return "290px";
                    }
                }

                new PNotify({
                    title: 'Cambios No Guardados',
                    text: '',
                    shadow: noteShadow,
                    opacity: noteOpacity,
                    addclass: noteStack,
                    type: noteStyle,
                    stack: Stacks[noteStack],
                    width: findWidth(),
                    delay: 1400
                });

            });

            

            // Widget VectorMap
            function runVectorMaps() {

                // Jvector Map Plugin
                var runJvectorMap = function() {
                    // Data set
                    var mapData = [900, 700, 350, 500];
                    // Init Jvector Map
                    $('#WidgetMap').vectorMap({
                        map: 'us_lcc_en',
                        //regionsSelectable: true,
                        backgroundColor: 'transparent',
                        series: {
                            markers: [{
                                attribute: 'r',
                                scale: [3, 7],
                                values: mapData
                            }]
                        },
                        regionStyle: {
                            initial: {
                                fill: '#E5E5E5'
                            },
                            hover: {
                                "fill-opacity": 0.3
                            }
                        },
                        markers: [{
                            latLng: [37.78, -122.41],
                            name: 'San Francisco,CA'
                        }, {
                            latLng: [36.73, -103.98],
                            name: 'Texas,TX'
                        }, {
                            latLng: [38.62, -90.19],
                            name: 'St. Louis,MO'
                        }, {
                            latLng: [40.67, -73.94],
                            name: 'New York City,NY'
                        }],
                        markerStyle: {
                            initial: {
                                fill: '#a288d5',
                                stroke: '#b49ae0',
                                "fill-opacity": 1,
                                "stroke-width": 10,
                                "stroke-opacity": 0.3,
                                r: 3
                            },
                            hover: {
                                stroke: 'black',
                                "stroke-width": 2
                            },
                            selected: {
                                fill: 'blue'
                            },
                            selectedHover: {}
                        },
                    });
                    // Manual code to alter the Vector map plugin to 
                    // allow for individual coloring of countries
                    var states = ['US-CA', 'US-TX', 'US-MO',
                        'US-NY'
                    ];
                    var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                    var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                    $.each(states, function(i, e) {
                        $("#WidgetMap path[data-code=" + e + "]").css({
                            fill: colors[i]
                        });
                    });
                    $('#WidgetMap').find('.jvectormap-marker')
                        .each(function(i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
                }

                if ($('#WidgetMap').length) {
                    runJvectorMap();
                }
            }

        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>
